<?php
require_once "opencage_api_key.php";

// Función para obtener coordenadas a partir de una dirección
function getCoordinates($address)
{
    // Escapar caracteres especiales en la dirección
    $address = urlencode($address);

    // URL de la API de OpenCageData
    $url = "https://api.opencagedata.com/geocode/v1/json?q={$address}&key=" . OPENCAGE_API_KEY;

    // Realizar la solicitud HTTP a la API
    $response = file_get_contents($url);

    // Decodificar la respuesta JSON
    $responseData = json_decode($response, true);

    // Verificar si la API devolvió resultados
    if (!empty($responseData['results'])) {
        $location = $responseData['results'][0]['geometry'];
        return [
            'lat' => $location['lat'],
            'lng' => $location['lng']
        ];
    } else {
        // Si no se encontraron resultados, devolver un error
        return ['error' => 'No se pudo obtener las coordenadas. Verifica la dirección.'];
    }
}

// Manejar la solicitud del cliente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $address = $_POST['address'] ?? '';

    if ($address) {
        echo json_encode(getCoordinates($address));
    } else {
        echo json_encode(['error' => 'Por favor, proporciona una dirección.']);
    }
}
