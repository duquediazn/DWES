<?php
session_start();
require '../vendor/autoload.php';

use Clases\Data;

$faker = Faker\Factory::create();

// Generar un código de barras EAN-13:
do {
    $codigo = $faker->ean13; // Generar un nuevo código.
} while (!(new Data())->isValidCode($codigo)); // Verificar que el código no exista ya en la base de datos.

// Almacenar el código en la sesión:
$_SESSION['codigo'] = $codigo;

// Redirigir al formulario de creación de jugador.
header('Location: fcrear.php');
exit();
