<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$url = 'http://localhost/~nazaret/DWES/tema6/servidorSoap/servidor.php';
$uri = 'http://localhost/~nazaret/DWES/tema6/servidorSoap/';
$paramSaludo = ['texto' => "Manolo"];
$param = ['a' => 51, 'b' => 29];
try {
    $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace' => true]);
} catch (SoapFault $ex) {
    echo "Error: " . $ex->getMessage();
}

$saludo = $cliente->__soapCall('saludo', $paramSaludo);
$suma = $cliente->__soapCall('suma', $param);
$resta = $cliente->__soapCall('resta', $param);
echo $saludo . " La suma es: $suma y la resta es: $resta" . "<br>";
//También podríamos hacer
$saludo = $cliente->saludo("Manolo");
$suma = $cliente->suma($param["a"], $param["b"]);
$resta = $cliente->resta($param["a"], $param["b"]);
echo $saludo . " La suma es: $suma y la resta es: $resta";

/*
El servicio que has creado no incluye un documento WSDL (por eso al crear el servidor hemos
puesto "null" como primer parámetro) para describir sus funciones. Sabes que existen los
métodos suma, resta y saludo, y los parámetros que debes utilizar con ellos, porque conoces
el código interno del servicio. Un usuario que no tuviera esta información, no sabría cómo
consumir el servicio.

El primer parámetro del constructor indica la ubicación del WSDL correspondiente. El segundo
parámetro es una colección de opciones de configuración del servicio. Si existe el primer
parámetro, ya no hace falta más información. PHP SOAP utiliza la información del documento
WSDL para ejecutar el servicio. Si, como en el ejemplo, no existe WSDL, deberás indicar en el
segundo parámetro al menos la opción "uri", con el espacio de nombres destino del
servicio.
*/