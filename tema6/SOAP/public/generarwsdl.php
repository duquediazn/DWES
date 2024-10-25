<?php
require '../vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;

$class = "Clases\\Operaciones";
$uri = 'http://localhost/~nazaret/DWES/tema6/SOAP/servidorSoap/servidor.php';
$wsdlGenerator = new PHPClass2WSDL($class, $uri);
$wsdlGenerator->generateWSDL(true);
$fichero = $wsdlGenerator->save('../servidorSoap/servicio_php2wsdl.wsdl');