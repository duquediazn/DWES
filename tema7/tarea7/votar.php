<?php
// Configuración para mostrar errores (en desarrollo)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require './include/Votos.php';
session_start();

if (!isset($_SESSION['usu'])) {
    header('Location:login.php');
    exit();
  }

$idProducto = $_POST['idProducto'];
$cantidad= $_POST['valoracion'];
$idUsuario = $_SESSION['usu'];

$votos = new Votos();
$resultado=$votos->miVoto($cantidad, $idProducto, $idUsuario);

if(!$resultado) {
    $_SESSION["mensaje"] = "Ya has valorado este producto";
} 

// Redirige de vuelta a la página de listado
header("Location: listado.php");
exit();