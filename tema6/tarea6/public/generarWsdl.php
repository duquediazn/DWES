<?php
require '../vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;

$class = "Clases\\Operaciones";
//$uri = 'http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicio.php'; 
$uri = 'http://localhost/DWES/tema6/tarea6/servidorSoap/servicio.php'; //xampp
$wsdlGenerator = new PHPClass2WSDL($class, $uri);
$wsdlGenerator->generateWSDL(true);
$fichero = $wsdlGenerator->save('../servidorSoap/servicio-xampp.wsdl');
