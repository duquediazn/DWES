<?php
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
    // Verifica que el código tenga 13 dígitos.
    if (!preg_match("/^[0-9]{13}$/", $barcode)) return false;

    $even_sum = 0;
    $odd_sum = 0;

    // Sumar los dígitos en posiciones pares e impares.
    for ($i = 0; $i < 12; $i++) {
        if ($i % 2 === 0) {
            $odd_sum += $barcode[$i];
        } else {
            $even_sum += $barcode[$i];
        }
    }

    // Calcular el dígito de control.
    $check_digit = (10 - (($odd_sum + $even_sum * 3) % 10)) % 10;

    return $check_digit === (int)$barcode[12]; // Verifica el dígito de control.
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
