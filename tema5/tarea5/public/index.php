<?php

// Incluye el autoloader generado por Composer para cargar las dependencias y las clases de forma automática.
require '../vendor/autoload.php';

use Clases\Data; // Importa la clase Data desde el espacio de nombres "Clases".

// Crear una instancia de la clase Data.
$data = new Data();

// Verifica si hay jugadores en la base de datos.
if ($data->recuperarJugadores()) {
    header('Location: jugadores.php');
    exit(); // Finaliza el script para evitar que se ejecute código adicional después de la redirección.
}

// Si no hay jugadores, redirige a la página de instalación.
header('Location: instalacion.php');
exit();
