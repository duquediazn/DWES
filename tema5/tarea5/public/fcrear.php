<?php
session_start();
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);

$titulo = 'Crear Jugador';
$encabezado = 'Crear Jugador';

if(isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];
    unset($_SESSION['codigo']);
}

if(isset($_SESSION['errores'])) {
    $errores = $_SESSION['errores'];
    unset($_SESSION['errores']);
}

echo $blade
    ->view()
    ->make('vcrear', compact('titulo', 'encabezado', 'codigo', 'errores'))
    ->render();