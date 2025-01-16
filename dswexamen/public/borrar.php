<?php
session_start();
require '../vendor/autoload.php'; // Carga el autoload de Composer

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET["id"])) {
    $id = $_GET["id"] ?? null;
}

use Biblioteca\Conexion;
use Biblioteca\Libro;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $conexion = new Conexion();
    $libro = new Libro($conexion->getConexion());
    $libro->borrar($id);
    header('Location: listado.php');
    exit;
}
