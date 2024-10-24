<?php
$url = 'http://localhost/DWES/tema6/servidorSoap/servidor.php';
$uri = 'http://localhost/DWES/tema6/servidorSoap';
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
$resta = $cliente->rest($param["a"], $param["b"]);
echo $saludo . " La suma es: $suma y la resta es: $resta";
