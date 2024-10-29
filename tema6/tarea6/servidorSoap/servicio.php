<?php
require '../vendor/autoload.php';

use Clases\Operaciones;

$uri = 'http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/'; 
$parametros = ['uri' => $uri]; 
try {
    $server = new SoapServer(NULL, $parametros);
    $server->setClass('Clases\Operaciones');
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}