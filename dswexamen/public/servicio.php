<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use Biblioteca\Servicios\Operaciones;

//Completar: Servidor SOAP
$uri = 'http://localhost/DWES/dswexamen/public/';
$parametros = ['uri' => $uri];
try {
    $server = new SoapServer(NULL, $parametros);
    $server->setClass(Operaciones::class);
    $server->handle();
} catch (SoapFault $f) {
    die("Error en server: " . $f->getMessage());
}
