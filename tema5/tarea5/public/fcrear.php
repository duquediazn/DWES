<?php
session_start();
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);

$titulo = 'Crear Jugador';
$encabezado = 'Crear Jugador';

// Se recupera el código de barras almacenado en la sesión, si existe.
if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];
    unset($_SESSION['codigo']);
}

// Se recuperan los errores durante la validación, de existir.
if (isset($_SESSION['errores'])) {
    $errores = $_SESSION['errores'];
    unset($_SESSION['errores']);
}

// Se renderiza la vista 'vcrear' pasando las variables definidas.
echo $blade
    ->view()
    ->make('vcrear', compact('titulo', 'encabezado', 'codigo', 'errores'))
    ->render();
