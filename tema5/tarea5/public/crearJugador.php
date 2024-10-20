<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../vendor/autoload.php'; 
use Clases\Jugador;
use Clases\Data;
/*
Aquí irán las validaciones.
*/
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

$_SESSION['errores'] = [];
$jugador = new Jugador();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Validación nombre:
    if(isset($_POST['nombre'])) {
        if (empty($_POST['nombre'])) {
            $_SESSION['errores']["nombre"] = "El nombre no puede estar vacío.";
        } elseif (strlen($_POST['nombre']) < 3 || strlen($_POST['nombre']) > 40) {
            $_SESSION['errores']["nombre"] = "El nombre debe tener entre 3 y 40 caracteres.";
        } else {
            $nombre = formatearNombre($_POST['nombre']);
        }
        $jugador->setNombre($nombre);
    } 
    //Validación apellidos:
    if(isset($_POST['apellidos'])) {
        if (empty($_POST['apellidos'])) {
            $_SESSION['errores']["nombre"] = "El nombre no puede estar vacío.";
        } elseif (strlen($_POST['apellidos']) < 3 || strlen($_POST['apellidos']) > 60) {
            $_SESSION['errores']["nombre"] = "Los apellidos deben tener entre 3 y 60 caracteres.";
        } else {
            $apellidos = formatearNombre($_POST['apellidos']);
        }
        $jugador->setApellidos($apellidos);

    } 
    //Validación dorsal:
    if(isset($_POST['dorsal'])) {
        //comprobar si es entero y está entre 1 y 99
        if(!empty($_POST['dorsal'])){
            $dorsal = $_POST['dorsal'];
            $jugador->setDorsal($dorsal);
        } else {
            $jugador->setDorsal(null);
        }

    } 
    //Validación posición:
    if(isset($_POST['posicion'])) {
        //comprobar si es una posicion correcta
        if(!empty($_POST['posicion'])){
            if(array_search($_POST['posicion'], ['Portero', 'Defensa', 'Lateral Izquierdo', 'Lateral Derecho', 'Central' ,'Delantero'])) {
                $posicion = $_POST['posicion'];
                $jugador->setPosicion($posicion);
            } else {
                $_SESSION['errores']['posicion'] = "Posición no válida.";
            }
        } else {
            $jugador->setPosicion(null);
        }
        
    } 
    //Validación código:
    if(isset($_POST['codigo'])) {
        if(!empty($_POST['codigo'])) {
            $codigo = $_POST['codigo'];
            $jugador->setBarcode($codigo);
        } else {
            $_SESSION['errores']['codigo'] = "El código de barras no puede estar vacío.";
        }
    } 

    if(empty($_SESSION['errores'])){
        //Creación de objeto $jugador:
        $jugador->crearJugador();
        $_SESSION['mensaje']="Jugador creado con éxito.";
    } else {
        header('Location: fcrear.php');
        exit();
    }
}

header('Location: jugadores.php');