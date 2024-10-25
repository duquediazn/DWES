<?php
/*
Importante: 
Para poder usar SOAP hay que descomentar en php.ini la línea: 
;extension=soap
Hay que quitar el ";": 
extension=soap

Si al hacer phpinfo() no se muestra la sección de SOAP: 
Soap Client 	enabled
Soap Server 	enabled
Directive	Local Value	Master Value
soap.wsdl_cache	1	1
soap.wsdl_cache_dir	/tmp	/tmp
soap.wsdl_cache_enabled	On	On
soap.wsdl_cache_limit	5	5
soap.wsdl_cache_ttl	86400	86400

Hay que reinstalar php con la siguiente opción: 
sudo apt install php8.1-soap

Para la versión 8.1 o la que corresponda. 

*/
require '../vendor/autoload.php';

use Clases\Operaciones;

//$uri = 'http://localhost/~nazaret/DWES/tema6/SOAP/servidorSoap/'; //sin wsdl
//$parametros = ['uri' => $uri]; //sin wsdl
$url = "http://localhost/~nazaret/DWES/tema6/SOAP/servidorSoap/servicio_php2wsdl.wsdl";
try {
    //$server = new SoapServer(NULL, $parametros); //sin wsdl
    $server = new SoapServer($url);
    $server->setClass('Clases\Operaciones');
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}

/*
 Para añadir las funciones de la clase
"Operaciones" a nuestro "Servidor Soap" fíjate que hemos añadido "$server-
>setClass('Clases\Operaciones)" . Si hubiésemos implementados las funciones directamente, sin
usar una clase, tendríamos que haberlas añadido usando "$server->addFunction('nombre')"

El método handle es el encargado de
procesar las peticiones, recogiendo los datos que se reciban utilizando POST por HTTP.
*/