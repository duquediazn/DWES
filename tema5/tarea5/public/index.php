<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use Clases\Data;

if ((new Data())->recuperarJugadores()) {
    header('Location: jugadores.php');
    exit();
}
header('Location: instalacion.php');


