<?php
require '../vendor/autoload.php';

// Configurar las opciones WSDL
$options = [
    //'wsdl_url' => 'http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicioW.php?wsdl',
    'wsdl_url' => 'http://localhost/DWES/tema6/tarea6/servidorSoap/servicioW.php?wsdl', //xampp
    'trace' => true
];

// Crear una instancia de Get con las opciones WSDL
$get = new \ServiceType\Get($options);

//Variables:
$cod_prod = 1;
$cod_tienda = 1;
$cod_familia = "CONSOL";

//Llamamos a los métodos correspondientes:
$pvp = $get->getPVP($cod_prod);
$unidades = $get->getStock($cod_prod, $cod_tienda);
$familias = $get->getFamilias();
$productos = $get->getProductosFamilia($cod_familia);

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
