<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

// Configurar las opciones WSDL
$options = [
    'wsdl_url' => 'https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl',
    'trace' => true,
    'exceptions' => true
];

// Crear una instancia de Wstitulosuni con las opciones WSDL
$wstitulosuniService = new \ServiceType\Wstitulosuni($options);

// Crear una instancia de StructType\Wstitulosuni con los parámetros necesarios
$wstitulosuniStruct = new \StructType\Wstitulosuni("es", "2024");

// Llamar al método del servicio adecuado
$response = $wstitulosuniService->wstitulosuni($wstitulosuniStruct); 

// Mostrar la respuesta
//echo var_dump($response);

// Verifica si la respuesta contiene datos
if (isset($response->wstitulosuniResult->ClaseTitulosUni) && is_array($response->wstitulosuniResult->ClaseTitulosUni)) {
    foreach ($response->wstitulosuniResult->ClaseTitulosUni as $index => $titulo) {
        echo "Título $index:<br>";
        
        // Acceso a las propiedades del objeto
        echo "Código: " . $titulo->codigo . "<br>";
        echo "Nombre: " . $titulo->nombre . "<br>";
        echo "Tipo: " . $titulo->tipo . "<br>";
        echo "Área: " . $titulo->area . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontraron títulos universitarios en la respuesta.";
}


