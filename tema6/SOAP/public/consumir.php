<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//$url = 'http://localhost/~nazaret/DWES/tema6/SOAP/servidorSoap/servidor.php'; //sin wsdl
//$uri = 'http://localhost/~nazaret/DWES/tema6/SOAP/servidorSoap/'; //sin wsdl
$url = "http://localhost/~nazaret/DWES/tema6/SOAP/servidorSoap/servicio_php2wsdl.wsdl"; //con wsdl

$paramSaludo = ['texto' => "Manolo"];
$param = ['a' => 51, 'b' => 29];
try {
    //$cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace' => true]); //sin wsdl
    $cliente = new SoapClient($url);
} catch (SoapFault $ex) {
    echo "Error: " . $ex->getMessage();
}

//Vemos las funciones que nos ofrece el servicio
var_dump($cliente->__getFunctions());
echo "<br>";

//Una forma de llamar a los métodos: 
$saludo = $cliente->__soapCall('saludo', $paramSaludo);
$suma = $cliente->__soapCall('suma', $param);
$resta = $cliente->__soapCall('resta', $param);
echo $saludo . " La suma es: $suma y la resta es: $resta" . "<br>";

//También podríamos hacer:
$saludo = $cliente->saludo("Manolo");
$suma = $cliente->suma(20, 40);
$resta = $cliente->resta($param["a"], $param["b"]);
echo $saludo . " La suma es: $suma y la resta es: $resta";

/*
SIN WSDL:
Cuano creamos el servicio sin incluir un documento WSDL, ponemos "null" como primer parámetro 
para describir sus funciones. Sabes que existen los métodos suma, resta y saludo, y los parámetros 
que debes utilizar con ellos, porque conoces el código interno del servicio. 
Un usuario que no tuviera esta información, no sabría cómo consumir el servicio.

El primer parámetro del constructor indica la ubicación del WSDL correspondiente. El segundo
parámetro es una colección de opciones de configuración del servicio. Si existe el primer
parámetro, ya no hace falta más información. PHP SOAP utiliza la información del documento
WSDL para ejecutar el servicio. Si, como en el ejemplo, no existe WSDL, deberás indicar en el
segundo parámetro al menos la opción "uri", con el espacio de nombres destino del
servicio.

CON WSDL:
Si añades a la URL del servicio el parámetro GET wsdl, verás el fichero de descripción del
servicio: 
http://localhost/~nazaret/DWES/tema6/SOAP/servidorSoap/servidor.php?wsdl
*/