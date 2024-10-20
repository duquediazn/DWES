<?php
session_start();

// Se incluye el autoloader de Composer para cargar automáticamente las dependencias y clases necesarias.
require '../vendor/autoload.php';

use Clases\Data;
use Philo\Blade\Blade; // Se importa la clase Blade para el manejo de plantillas.

// Se definen las rutas para las vistas y la caché que utilizará Blade.
$views = '../views';
$cache = '../cache';

// Se inicializa el motor de plantillas Blade.
$blade = new Blade($views, $cache);

// Se define el título y encabezado de la página.
$titulo = 'Jugadores';
$encabezado = 'Listado Jugadores';
$jugadores = (new Data())->recuperarJugadores();

//Creamos una instancia de BarcodeGeneratorHTML, que producirá un código de barras como HTML.
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();

// Se prepara el mensaje para el usuario, si existe.
$mensaje = $_SESSION['mensaje'] ?? ""; //Operador null coalescente.
unset($_SESSION['mensaje']); // Limpiamos el mensaje de la sesión.

// Se renderiza la vista 'vjugadores' pasando las variables definidas.
echo $blade
    ->view()
    ->make('vjugadores', compact('titulo', 'encabezado', 'jugadores', 'mensaje', 'generator'))
    ->render();
