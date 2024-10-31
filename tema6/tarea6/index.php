<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Clases\Producto;
use Clases\Stock;

/*
$producto = new Producto(1);
$stock = new Stock(1,1);

echo var_dump($producto->getPvp());
echo var_dump($stock->getUnidades());

*/

$producto = new Producto();
            $producto->setFamilia('CONSOL');
            $productos= $producto->getProductosFamilia();
            echo var_dump($productos);