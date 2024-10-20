<?php
session_start();
require_once '../vendor/autoload.php'; 
use Clases\Jugador;
use Clases\Data;

// Crear una instancia del generador de Faker
$faker = Faker\Factory::create();

for($i=0;$i<10;$i++){
    // Generar datos para un jugador de fútbol
    $nombre = $faker->firstName;
    $apellidos = $faker->lastName . ' ' . $faker->lastName;
    $dorsal = $faker->numberBetween(1, 99); // Dorsal entre 1 y 99
    $posicion = $faker->randomElement(['Portero', 'Defensa', 'Lateral Izquierdo', 'Lateral Derecho', 'Central' ,'Delantero']);
    $codigo = $faker->ean13; // Generar un código de barras EAN-13

    while(!((new Data())->isValidCode($codigo))) {
        $codigo = $faker->ean13;
    } 

    while (!((new Data())->isValidDorsal($dorsal))) {
        $dorsal = $faker->numberBetween(1, 99);
    }

    $jugador = new Jugador($nombre, $apellidos, $dorsal, $posicion, $codigo);
    $jugador->crearJugador();
}

header('Location: jugadores.php');

