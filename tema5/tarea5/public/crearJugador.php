<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../vendor/autoload.php';

use Clases\Jugador;
use Clases\Data;

//FUNCIONES PARA LA VALIDACIÓN:
//Darle formato correcto al nombre y apellido:
function formatearNombre(string $nombre): string
{
    //Elimina espacios al inicio y al final:
    $nombre = trim($nombre);
    //Reemplazar múltiples espacios con un único espacio:
    $nombre = preg_replace('/\s+/', ' ', $nombre);
    //Convierte a título, poniendo en mayúscula la primera letra de cada palabra:
    $nombre = ucwords(strtolower($nombre));

    return $nombre;
}

//Función para validar que el código de barras sea EAN-13
function validate_EAN13Barcode($barcode)
{
    // check to see if barcode is 13 digits long
    if (!preg_match("/^[0-9]{13}$/", $barcode)) {
        return false;
    }

    $digits = $barcode;

    // 1. Add the values of the digits in the 
    // even-numbered positions: 2, 4, 6, etc.
    $even_sum = $digits[1] + $digits[3] + $digits[5] +
        $digits[7] + $digits[9] + $digits[11];

    // 2. Multiply this result by 3.
    $even_sum_three = $even_sum * 3;

    // 3. Add the values of the digits in the 
    // odd-numbered positions: 1, 3, 5, etc.
    $odd_sum = $digits[0] + $digits[2] + $digits[4] +
        $digits[6] + $digits[8] + $digits[10];

    // 4. Sum the results of steps 2 and 3.
    $total_sum = $even_sum_three + $odd_sum;

    // 5. The check character is the smallest number which,
    // when added to the result in step 4, produces a multiple of 10.
    $next_ten = (ceil($total_sum / 10)) * 10;
    $check_digit = $next_ten - $total_sum;

    // if the check digit and the last digit of the 
    // barcode are OK return true;
    if ($check_digit == $digits[12]) {
        return true;
    }

    return false;
}

/*VALIDACIONES:*/
$_SESSION['errores'] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validación nombre:
    if (empty($_POST['nombre'])) {
        $_SESSION['errores']["nombre"] = "El nombre no puede estar vacío.";
    } elseif (strlen($_POST['nombre']) < 3 || strlen($_POST['nombre']) > 40) {
        $_SESSION['errores']["nombre"] = "El nombre debe tener entre 3 y 40 caracteres.";
    } else {
        $nombre = formatearNombre($_POST['nombre']);
    }
    //Validación apellidos:
    if (empty($_POST['apellidos'])) {
        $_SESSION['errores']["nombre"] = "El nombre no puede estar vacío.";
    } elseif (strlen($_POST['apellidos']) < 3 || strlen($_POST['apellidos']) > 60) {
        $_SESSION['errores']["nombre"] = "Los apellidos deben tener entre 3 y 60 caracteres.";
    } else {
        $apellidos = formatearNombre($_POST['apellidos']);
    }

    // Validación dorsal:
    // comprobar si es entero y está entre 1 y 99
    if (!empty($_POST['dorsal'])) {
        // Verificamos que el dorsal sea un número entero entre 1 y 99
        if (
            filter_var($_POST['dorsal'], FILTER_VALIDATE_INT) !== false
            && $_POST['dorsal'] >= 1 && $_POST['dorsal'] <= 99
        ) {
            // Si el dorsal es válido, comprobar si otro jugador ya tiene ese dorsal
            if ((new Data())->isValidDorsal($_POST['dorsal'])) {
                $dorsal = $_POST['dorsal'];
            } else {
                $_SESSION['errores']["dorsal"] = "Otro jugador ya tiene ese dorsal.";
            }
        } else {
            $_SESSION['errores']["dorsal"] = "El dorsal debe ser un número entero entre 1 y 99.";
        }
    } else {
        $dorsal = null;
    }


    //Validación posición:
    //comprobar si es una posicion correcta
    if (!empty($_POST['posicion'])) {
        $posiciones = [
            'por' => 'Portero',
            'def' => 'Defensa',
            'li' => 'Lateral Izquierdo',
            'ld' => 'Lateral Derecho',
            'cen' => 'Central',
            'del' => 'Delantero'
        ];
        if (array_key_exists($_POST['posicion'], $posiciones)) {
            $posicion = $posiciones[$_POST['posicion']];
        } else {
            $_SESSION['errores']['posicion'] = "Posición no válida.";
        }
    } else {
        $posicion = null;
    }
    //Validación código:
    if (!empty($_POST['codigo'])) {
        //Se comprueba que sea un código de barras válido
        if (validate_EAN13Barcode($_POST['codigo']) && (new Data())->isValidCode($_POST['codigo'])) {
            $codigo = $_POST['codigo'];
        } else {
            $_SESSION['errores']['codigo'] = "Código de barras no válido.";
        }
    } else {
        $_SESSION['errores']['codigo'] = "El código de barras no puede estar vacío.";;
    }
}

if (empty($_SESSION['errores'])) {
    //Se crea el jugador en la base de datos:
    $jugador = new Jugador($nombre, $apellidos, $dorsal, $posicion, $codigo);
    $jugador->crearJugador();
    $_SESSION['mensaje'] = "Jugador creado con éxito.";
} else {
    header('Location: fcrear.php');
    exit();
}

header('Location: jugadores.php');
