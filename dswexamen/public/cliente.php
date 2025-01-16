<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$wsdl = null; // No WSDL used in this basic example
$options = [
    'location' => "http://localhost/DWES/dswexamen/public/servicio.php",
    'uri' => "http://localhost/DWES/dswexamen/public/",
    'trace' => true
];

try {
    $client = new SoapClient(null, $options);
    //Completar: Cliente Soap
    echo "<h2>Libros Disponibles</h2>";

    $librosDisponibles = $client->getLibrosDisponibles();

    foreach ($librosDisponibles as $clave => $valor) {
        echo "Título: " . $valor["titulo"] . ". Autor: " . $valor["autor"] . "<br>";
    }

    echo "<h2>Buscar Libro por ISBN</h2>";
    $isbn = '9788437604947'; // Ejemplo de ISBN
    $libro = $client->getLibroPorISBN($isbn);

    $disponibilidad = $libro["disponibilidad"] ? "Disponible" : "No disponible";

    echo "Título: " . $libro["titulo"] . ". Autor: " . $libro["autor"] . ". Disponibilidad:  " . $disponibilidad;
} catch (SoapFault $e) {
    echo "Error: " . $e->getMessage();
}
