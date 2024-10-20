<?php
/*
"jugadores.php": Llama a la vista "vjugadores.php" Muestra en una tabla los datos de los jugadores. 
Tiene un botón crear que llama al formulario para crear un jugador nuevo. Si un jugador NO tiene dorsal mostraremos "Sin asignar".
*/
session_start();

require '../vendor/autoload.php';

use Clases\Data;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);

$titulo = 'Jugadores';
$encabezado = 'Listado Jugadores';
$jugadores = (new Data())->recuperarJugadores();
$mensaje = "";

if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
}

echo $blade
    ->view()
    ->make('vjugadores', compact('titulo', 'encabezado', 'jugadores', 'mensaje'))
    ->render();
