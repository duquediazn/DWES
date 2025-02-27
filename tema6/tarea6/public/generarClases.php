<?php
require '../vendor/autoload.php';

/*
//wsdl2phpgenerator está obsoleto y presenta errores:

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

$generator = new Generator();
$generator->generate(
    new Config([
        'inputFile' => "http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicioW.php?wsdl",
        'outputDir' => "../src/Clases1",
        'namespaceName' => 'Clases'
    ])
);
*/

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance();
$options
    //->setOrigin('http://localhost/~nazaret/DWES/tema6/tarea6/servidorSoap/servicioW.php?wsdl')
    ->setOrigin('http://localhost/DWES/tema6/tarea6/servidorSoap/servicioW.php?wsdl') //xampp
    ->setDestination('../src/Clases1')
    ->setComposerName('nazaret/tarea6'); // Package name
try {
    // Generator instantiation
    $generator = new Generator($options);
    // Package generation
    $generator->generatePackage();
    echo "Generación completa.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
