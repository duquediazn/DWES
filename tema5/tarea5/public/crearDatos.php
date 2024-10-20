<?php
session_start();

require_once '../vendor/autoload.php';

use Clases\Jugador;
use Clases\Data;

// Se crea una instancia del generador de datos Faker para generar datos aleatorios.
$faker = Faker\Factory::create();

// Se genera un bucle para crear 10 jugadores de fútbol en total.
for ($i = 0; $i < 10; $i++) {
    // Generar datos aleatorios para un jugador de fútbol.
    $nombre = $faker->firstName; // Nombre aleatorio.
    $apellidos = $faker->lastName . ' ' . $faker->lastName; // Apellidos aleatorios (dos apellidos).
    $posicion = $faker->randomElement(['Portero', 'Defensa', 'Lateral Izquierdo', 'Lateral Derecho', 'Central', 'Delantero']); // Posición aleatoria.

    // Validar código de barras, generando uno nuevo hasta encontrar uno válido.
    do {
        $codigo = $faker->ean13; // Generar un código de barras EAN-13.
    } while (!(new Data())->isValidCode($codigo));

    // Validar dorsal, generando uno nuevo hasta encontrar uno válido.
    do {
        $dorsal = $faker->numberBetween(1, 30); // Generar un dorsal aleatorio entre 1 y 30.
    } while (!(new Data())->isValidDorsal($dorsal));

    //Nueva instancia de Jugador con los datos generados.
    $jugador = new Jugador($nombre, $apellidos, $dorsal, $posicion, $codigo);

    //Se llama al método para insertar el nuevo jugador en la base de datos.
    $jugador->crearJugador();
}

header('Location: jugadores.php');
