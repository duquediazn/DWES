<?php

require '../vendor/autoload.php';

use Clases\Operaciones;

//$url = "http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicio.wsdl";
$url = "http://localhost/DWES/tema6/tarea6/servidorSoap/servicio.wsdl"; //xampp

try {
    $server = new SoapServer($url);
    $server->setClass('Clases\Operaciones');
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}
