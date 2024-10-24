<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../vendor/autoload.php";

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance(/* '/path/file.yml' */);
$options
    ->setOrigin('https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl')
    ->setDestination('../../universidad')
    ->setComposerName('nazaret/tema6'); // Package name
try {
    // Generator instantiation
    $generator = new Generator($options);
    // Package generation
    $generator->generatePackage();
    echo "Generación completa.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
