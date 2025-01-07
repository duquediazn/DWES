<?php
require_once '../vendor/autoload.php';

session_start();

try {
    // Configuración del cliente de Google
    $client = new Google\Client();
    $client->setApplicationName('Google Tasks API PHP');
    $client->setScopes(Google_Service_Tasks::TASKS); // Permisos completos
    $client->setAuthConfig('../client_secret.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    $client->setRedirectUri('http://localhost/DWES/tema8/tarea8/public/'); // URI de redirección

    // Ruta del token
    $tokenPath = '../token.json';

    // Si existe un token almacenado, lo usamos
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);

        // Si el token ha caducado, lo renovamos
        if ($client->isAccessTokenExpired()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
    } else {
        // Si no hay token, obtenemos uno nuevo
        if (!isset($_GET['code'])) {
            $authUrl = $client->createAuthUrl();
            echo "Autorización requerida. <a href='$authUrl'>Haz clic aquí para autorizar</a>";
            exit;
        } else {
            $authCode = $_GET['code'];
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

            // Verificar errores durante la autorización
            if (array_key_exists('error', $accessToken)) {
                throw new Exception("Error en la autorización: " . $accessToken['error_description']);
            }

            $client->setAccessToken($accessToken);

            // Guardar el token para futuras sesiones
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
    }
} catch (Google_Service_Exception $e) {
    echo "Error con la API de Google Tasks: " . htmlspecialchars($e->getMessage());
} catch (Google_Exception $e) {
    echo "Error con el cliente de Google: " . htmlspecialchars($e->getMessage());
} catch (Exception $e) {
    echo "Ocurrió un error inesperado: " . htmlspecialchars($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tareas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center">UT8: Aplicación de repartos</h1>

        <!-- Botón para añadir nueva lista -->
        <div class="mb-4 text-end">
            <button id="addList" class="btn btn-success">Añadir Nueva Lista de repartos</button>
        </div>

        <!-- Selección de lista de tareas -->
        <div class="mb-4">
            <label for="taskList" class="form-label">Selecciona una lista:</label>
            <select id="taskList" class="form-select"></select>
        </div>

        <!-- Botones para la lista seleccionada -->
        <div class="mb-3 text-end">
            <!-- Botón para agregar tarea -->
            <button id="addTask" class="btn btn-primary">
                <i class="fas fa-plus"></i> Nuevo
            </button>

            <button id="orderTasks" class="btn btn-info">
                <i class="fas fa-sort"></i> Ordenar
            </button>

            <button id="deleteList" class="btn btn-danger">
                <i class="fas fa-trash"></i> Borrar Lista
            </button>

        </div>

        <!-- Tabla de tareas -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Reparto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="taskTableBody">
                <!-- Las tareas se cargarán aquí dinámicamente -->
            </tbody>
        </table>


    </div>

    <script>
        //const baseURL = '/dswut8/google-task/';

        $(document).ready(function() {
            function getQueryParam(param) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(param);
            }

            function loadTaskLists() {
                $.getJSON('../src/tasklist.php', function(data) {
                    $('#taskList').empty();
                    let selectedListId = getQueryParam('listId');
                    let firstListId = null;

                    data.forEach(function(taskList, index) {
                        $('#taskList').append(
                            `<option value="${taskList.id}" ${selectedListId === taskList.id ? 'selected' : ''}>
                                ${taskList.title}
                            </option>`
                        );
                        if (index === 0) {
                            firstListId = taskList.id;
                        }
                    });

                    if (selectedListId) {
                        loadTasks(selectedListId);
                    } else if (firstListId) {
                        loadTasks(firstListId);
                        $('#taskList').val(firstListId);
                    }
                });
            }

            function loadTasks(taskListId) {
                $.getJSON(`../src/task.php?listId=${taskListId}`, function(data) {
                    $('#taskTableBody').empty();
                    data.forEach(function(task) {
                        $('#taskTableBody').append(`
                            <tr>
                                <td>${task.title}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning editTask" data-id="${task.id}" data-title="${task.title}">
                                        <i class="fas fa-edit"> </i> Editar
                                    </button>
                                    <button class="btn btn-sm btn-danger deleteTask"  data-id="${task.id}">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                    <button class="btn btn-sm btn-info viewMap" data-id="${task.id}" data-title="${task.title}">
                                        <i class="fas fa-map-marked-alt"></i> Mapa
                                    </button>
                                </td>
                            </tr>
                        `);
                    });
                });
            }

            $('#taskList').change(function() {
                const taskListId = $(this).val();
                loadTasks(taskListId);
            });

            $('#addTask').click(function() {
                const taskListId = $('#taskList').val();
                if (!taskListId) {
                    alert('Por favor selecciona una lista.');
                    return;
                }
                window.location.href = `repartos.php?id=${taskListId}`;
            });

            $('#addList').click(function() {
                window.location.href = 'addTaskList.php'; // Página para crear una nueva lista
            });

            $('#orderTasks').click(function() {
                const taskListId = $('#taskList').val();
                if (!taskListId) {
                    alert('Por favor selecciona una lista.');
                    return;
                }
                alert('Ordenar tareas no implementado todavía.');
                // Implementar lógica de ordenación aquí
            });

            $('#deleteList').click(function() {
                const taskListId = $('#taskList').val();
                if (!taskListId) {
                    alert('Por favor selecciona una lista.');
                    return;
                }
                if (confirm('¿Estás seguro de que deseas borrar esta lista?')) {
                    $.ajax({
                        url: `/dswut8/google-task/src/tasklist.php?listId=${taskListId}`,
                        type: 'DELETE',
                        success: function() {
                            alert('Lista borrada correctamente.');
                            loadTaskLists();
                        }
                    });
                }
            });

            $(document).on('click', '.viewMap', function() {
                const taskId = $(this).data('id');
                alert(`Abrir mapa para la tarea: ${taskId}`);
                // Implementar la redirección o lógica del mapa aquí
            });

            loadTaskLists();
        });
    </script>
</body>

</html>