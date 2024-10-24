<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../vendor/autoload.php';

use ServiceType\Wstitulosuni; 
use StructType\Wstitulosuni as StructWstitulosuni; 

// Crea la instancia de StructWstitulosuni
$parametros = new StructWstitulosuni('es', '2024');

// Asegúrate de que estás llamando el método con el objeto correcto
$titulos = (new Wstitulosuni)->wstitulosuni($parametros);

var_dump($titulos);
