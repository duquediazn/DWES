<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "vendor/autoload.php";

$operacion = new Clases\Operaciones();
$pvp=$operacion->getPVP('1');
$unidades=$operacion->getStock('1', '1');
$familias=$operacion->getFamilias();
$productos=$operacion->getProductosFamilia('CONSOL');

echo $pvp;
echo "<br>";
echo $unidades;
echo "<br>";
echo var_dump($familias);
echo "<br>";
echo var_dump($productos);