<?php

// Se incluye el autoloader de Composer para cargar automáticamente las dependencias y clases necesarias.
require '../vendor/autoload.php';

// Se importa la clase Blade para el manejo de plantillas.
use Philo\Blade\Blade;

// Se definen las rutas para las vistas y la caché que utilizará Blade.
$views = '../views';
$cache = '../cache';

// Se inicializa el motor de plantillas Blade.
$blade = new Blade($views, $cache);

// Se define el título y encabezado de la página.
$titulo = 'Install';
$encabezado = 'Instalación';

// Se renderiza la vista 'vinstalacion' pasando las variables definidas.
echo $blade
    ->view()
    ->make('vinstalacion', compact('titulo', 'encabezado'))
    ->render();
