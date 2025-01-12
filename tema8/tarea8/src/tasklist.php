<?php
require_once '../vendor/autoload.php';

$client = new Google\Client();
$client->setAuthConfig('../client_secret.json');
$client->setScopes(Google_Service_Tasks::TASKS);
$client->setAccessType('offline');

$tokenPath = '../token.json';
if (file_exists($tokenPath)) {
    $accessToken = json_decode(file_get_contents($tokenPath), true);
    $client->setAccessToken($accessToken);

    if ($client->isAccessTokenExpired()) {
        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
}

$service = new Google_Service_Tasks($client);

try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') { // Listar las listas de tareas
        $taskLists = $service->tasklists->listTasklists();
        $response = [];
        foreach ($taskLists->getItems() as $taskList) {
            if ($taskList->getTitle() !== "My Tasks") { // Evitar la lista predeterminada de Google Task
                $response[] = ['id' => $taskList->getId(), 'title' => $taskList->getTitle()];
            }
        }
        echo json_encode($response);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') { // IMPLEMENTADO: Crear una nueva lista de tareas
        $input = json_decode(file_get_contents('php://input'), true);
        /*
        
        */
        $date = $input['date'] ?? null;

        if (!$date) {
            throw new Exception('No se proporcionó la fecha.');
        }

        $today = new DateTime();
        $selectedDate = new DateTime($date);

        if ($selectedDate < $today) {
            throw new Exception('La fecha no puede ser anterior a la actual.');
        }

        // Verificar si ya existe una lista con el mismo nombre
        $taskLists = $service->tasklists->listTasklists();
        foreach ($taskLists->getItems() as $taskList) {
            if ($taskList->getTitle() === "Repartos $date") {
                throw new Exception('Ya existe una lista de tareas para esta fecha.');
            }
        }

        // Crear la nueva lista
        $taskList = new Google_Service_Tasks_TaskList();
        $taskList->setTitle("Repartos $date");
        $service->tasklists->insert($taskList);

        echo json_encode(['success' => true, 'message' => 'Lista de tareas creada con éxito.']);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') { //IMPLEMENTADO: Eliminar una lista de tareas
        // Eliminar una lista de tareas;
        $listId = $_GET['listId'] ?? null;

        if (!$listId) {
            throw new Exception('No se proporcionó el listId.');
        }

        // Intentar eliminar la lista
        $service->tasklists->delete($listId);

        echo json_encode(['success' => true, 'message' => 'Lista eliminada con éxito.']);
    } else {
        throw new Exception('Método HTTP no soportado.');
    }
} catch (Google_Service_Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error con Google API: ' . $e->getMessage()]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
