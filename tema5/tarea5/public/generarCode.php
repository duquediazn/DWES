<?php
session_start();
require '../vendor/autoload.php';

use Clases\Data;

$faker = Faker\Factory::create();
$codigo = $faker->ean13; // Generar un código de barras EAN-13

while(!((new Data())->isValidCode($codigo))) {
    $codigo = $faker->ean13;
} 

$_SESSION['codigo'] = $codigo;

header('Location: fcrear.php');