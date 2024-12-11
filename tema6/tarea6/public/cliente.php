<?php
//$url = 'http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicio.php';
//$uri = 'http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/';
$url = 'http://localhost/DWES/tema6/tarea6/servidorSoap/servicio.php'; //xampp
$uri = 'http://localhost/DWES/tema6/tarea6/servidorSoap/'; //xampp

try {
    $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace' => true]);
} catch (SoapFault $ex) {
    echo "Error: " . $ex->getMessage();
}

//Variables:
$cod_prod = 1;
$cod_tienda = 1;
$cod_familia = "CONSOL";

//Llamamos a los métodos correspondientes:
$pvp = $cliente->getPVP($cod_prod);
$unidades = $cliente->getStock($cod_prod, $cod_tienda);
$familias = $cliente->getFamilias();
$productos = $cliente->getProductosFamilia($cod_familia);

//ECHO:
echo "El PVP del producto de código $cod_prod es: $pvp € <br>";
echo "Quedan $unidades unidades disponible del producto de código $cod_prod en la tienda de código $cod_tienda <br>";
echo "Familias de productos existentes: <br>";

foreach ($familias as $familia) {
    echo $familia . "<br>";
}

echo "Códigos de los productos de la familia $cod_familia: <br>";

foreach ($productos as $producto) {
    echo $producto . "<br>";
}
