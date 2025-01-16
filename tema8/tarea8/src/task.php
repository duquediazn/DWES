<?php

use Google\Service\Batch\Script;

require_once '../vendor/autoload.php';

try {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Configuración del cliente de Google
    $client = new Google\Client();
    $client->setAuthConfig('../client_secret.json');
    $client->setScopes(Google_Service_Tasks::TASKS);
    $client->setAccessType('offline');

    $tokenPath = '../token.json';
    if (!file_exists($tokenPath)) {
        throw new Exception('El archivo token.json no existe. Autentícate nuevamente.');
    }

    $accessToken = json_decode(file_get_contents($tokenPath), true);
    $client->setAccessToken($accessToken);

    if ($client->isAccessTokenExpired()) {
        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }

    $service = new Google_Service_Tasks($client);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Solicitud POST para crear una nueva tarea:
        $input = json_decode(file_get_contents('php://input'), true);

        $title = $input['title'] ?? null;
        $notes = $input['notes'] ?? null;
        $listId = $input['listId'] ?? null;

        if (!$title || !$listId) {
            throw new Exception('Faltan parámetros obligatorios.');
        }


        $task = new Google_Service_Tasks_Task();
        $task->setTitle($title);
        $task->setNotes($notes);


        $createdTask = null;
        $createdTask = $service->tasks->insert($listId, $task);


        echo json_encode([
            'success' => true,
            'taskId' => $createdTask->getId()
        ]);
        file_put_contents(
            'debug.log',
            "[" . date('Y-m-d H:i:s') . "] task.php -> sucess = true" . PHP_EOL,
            FILE_APPEND
        );
        exit;
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') { //Solicitud GET para listar las tareas de una lista:
        $listId = $_GET['listId'] ?? null;
        if (!$listId) {
            throw new Exception('listId no proporcionado.');
        }

        $tasks = $service->tasks->listTasks($listId);
        $response = [];
        foreach ($tasks->getItems() as $task) {
            $response[] = [
                'id' => $task->getId(),
                'title' => $task->getTitle(),
                'status' => $task->getStatus(),
                'notes' => $task->getNotes() //Se añade para la ordenación de los repartos (contiene lat. y long.)
            ];
        }
        echo json_encode($response);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {  //IMPLEMENTADO: Solicitud DELETE para eliminar una tarea:
        $input = json_decode(file_get_contents('php://input'), true);

        // Extraer parámetros del cuerpo
        $taskId = $input['taskId'] ?? null;
        $taskListId = $input['taskListId'] ?? null;

        if (!$taskId || !$taskListId) {
            throw new Exception('Faltan parámetros obligatorios: taskId o taskListId.');
        }

        $service->tasks->delete($taskListId, $taskId);

        echo json_encode(['success' => true]);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') { //IMPLEMENTADO: Solicitud PUT para actualizar una tarea:
        $input = json_decode(file_get_contents('php://input'), true);

        $title = $input['title'] ?? null;
        $notes = $input['notes'] ?? null;
        $listId = $input['listId'] ?? null;
        $taskId = $input['taskId'] ?? null;

        $task = $service->tasks->get($listId, $taskId);

        $task->setTitle($title);
        $task->setNotes($notes);

        $service->tasks->update($listId, $taskId, $task);

        echo json_encode(['success' => true]);
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
