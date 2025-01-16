<?php
require_once '../vendor/autoload.php';

session_start();

$redirectUri = "http://localhost/DWES/tema8/tarea8/public/";

try {
    // Configuración del cliente de Google
    $client = new Google\Client();
    $client->setApplicationName('Google Tasks API PHP');
    $client->setScopes(Google_Service_Tasks::TASKS); // Permisos completos
    $client->setAuthConfig('../client_secret.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    $client->setRedirectUri($redirectUri); // URI de redirección

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
        <table class="table table-striped mb-6">
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

        <!-- Mensaje a usuario-->
        <div id="userMessage" hidden></div>

        <!-- Lista ordenada de tareas  -->
        <div id="orderedTaskContainer" class="container mt-4 mb-4 dark" hidden>
            <h2 class="text-center">Orden de repartos</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Reparto</th>
                        <th>Distancia</th>
                    </tr>
                </thead>
                <tbody id="orderedTaskBody">
                    <!-- Las tareas ordenadas se cargarán aquí dinámicamente -->

                </tbody>
            </table>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            // Función para obtener parámetros de la URL
            function getQueryParam(param) {
                // Crea un objeto URLSearchParams a partir de la query string de la URL actual
                const urlParams = new URLSearchParams(window.location.search);
                // Devuelve el valor del parámetro solicitado
                return urlParams.get(param);
            }

            //Cargar listas de tareas:
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

            //Cargar tareas de una lista:
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

            //IMPLEMENTADO: Actualizar una tarea de una lista: 
            $(document).on('click', '.editTask', function() {
                const taskId = $(this).data('id'); // Obtener el taskId
                const listId = $('#taskList').val(); // Obtener el ID de la lista activa
                window.location.href = `updateTask.php?taskId=${encodeURIComponent(taskId)}&listId=${encodeURIComponent(listId)}`;
            });

            //IMPLEMENTADO: Borrar una tarea de una lista:
            $(document).on('click', '.deleteTask', function() {
                const taskId = $(this).data('id'); // Obtener el taskId
                const taskListId = $('#taskList').val(); // Obtener el ID de la lista activa

                if (!taskListId) {
                    alert('Por favor selecciona una lista.');
                    return;
                }

                if (confirm('¿Estás seguro de que deseas eliminar esta tarea?')) {
                    $.ajax({
                        url: '../src/task.php',
                        type: 'DELETE',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            taskId,
                            taskListId
                        }),
                        success: function(response) {
                            alert('Tarea eliminada correctamente.');
                            loadTasks(taskListId); // Recargar las tareas de la lista activa
                        },
                        error: function(err) {
                            alert('Hubo un error al eliminar la tarea. Por favor, inténtalo nuevamente.');
                        }
                    });
                }
            });

            //Cambiar Lista Seleccionada:
            $('#taskList').change(function() {
                const taskListId = $(this).val();
                loadTasks(taskListId);
                $('#orderedTaskContainer').attr('hidden', true); //Ocultamos la tabla de ordenación al cambiar de lista.
            });

            //Añadir Tareas:
            $('#addTask').click(function() {
                const taskListId = $('#taskList').val();
                if (!taskListId) {
                    alert('Por favor selecciona una lista.');
                    return;
                }
                window.location.href = `repartos.php?id=${taskListId}`;
            });

            //Añadir listas: 
            $('#addList').click(function() {
                window.location.href = 'addTaskList.php'; // IMPLEMENTADA: Página para crear una nueva lista
            });

            //BLOQUE DE LÓGICA DE ORDENACIÓN: 
            // Función para obtener la posición actual del usuario
            function obtenerUbicacion(callback) {
                if (navigator.geolocation) {
                    $('#userMessage').removeAttr('hidden');
                    $('#userMessage').append("<p class='bg-light p-2 text-danger'>Obteniendo ubicación mediante geolocalización...</p>");
                    navigator.geolocation.getCurrentPosition(function(position) {
                        const userLat = position.coords.latitude;
                        const userLng = position.coords.longitude;
                        callback(userLat, userLng);
                    }, function() {
                        alert("No se pudo obtener la ubicación. Verifica los permisos.");
                    });
                } else {
                    alert("Geolocalización no es compatible con este navegador.");
                }

            }

            // Fórmula de Haversine para calcular la distancia entre dos puntos
            function calcularDistancia(lat1, lon1, lat2, lon2) {
                const R = 6371; // Radio de la Tierra en km
                const dLat = (lat2 - lat1) * (Math.PI / 180);
                const dLon = (lon2 - lon1) * (Math.PI / 180);
                const a =
                    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) *
                    Math.sin(dLon / 2) * Math.sin(dLon / 2);
                const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                return R * c; // Distancia en km
            }

            // Función para ordenar tareas por distancia
            function ordenarTareasPorDistancia(userLat, userLng) {
                const taskListId = $('#taskList').val();
                if (!taskListId) {
                    alert("Por favor selecciona una lista.");
                    return;
                }
                // Obtener las tareas desde el servidor
                $.getJSON(`../src/task.php?listId=${taskListId}`, function(tasks) {
                    // Agregar distancia a cada tarea
                    tasks.forEach(task => {

                        // Parsear el string JSON que está en task.notes
                        const taskNotes = JSON.parse(task.notes);

                        // Extraer las coordenadas desde taskNotes
                        const taskLat = parseFloat(taskNotes.latitude); // Coordenada de latitud
                        const taskLng = parseFloat(taskNotes.longitude); // Coordenada de longitud

                        task.distance = calcularDistancia(userLat, userLng, taskLat, taskLng);
                    });
                    // Ordenar tareas por distancia
                    tasks.sort((a, b) => a.distance - b.distance);

                    // Renderizar tareas ordenadas
                    $('#orderedTaskContainer').removeAttr('hidden');
                    $('#orderedTaskBody').empty()
                    tasks.forEach(task => {
                        $('#orderedTaskBody').append(`
                        <tr>
                            <td>${task.title}</td>
                            <td>${task.distance.toFixed(2)} km</td>
                        </tr>`);
                    });
                    $('#userMessage').empty();
                    $('#userMessage').attr('hidden', true);
                    $('#orderTasks').attr("disabled", false);
                })
            };

            //Botón "Ordenar:
            $('#orderTasks').click(function() {
                const taskListId = $('#taskList').val();
                if (!taskListId || $('#taskTableBody').is(":empty")) {
                    alert('Por favor selecciona una lista.');
                    return;
                }
                //IMPLEMENTADO: Lógica de ordenación.
                $('#orderTasks').attr("disabled", true);
                obtenerUbicacion(function(userLat, userLng) {
                    ordenarTareasPorDistancia(userLat, userLng);
                });
            });

            //Borrar una lista de tareas:
            $('#deleteList').click(function() {
                const taskListId = $('#taskList').val();
                if (!taskListId) {
                    alert('Por favor selecciona una lista.');
                    return;
                }
                if (confirm('¿Estás seguro de que deseas borrar esta lista?')) {
                    $.ajax({
                        url: `../src/tasklist.php?listId=${taskListId}`,
                        type: 'DELETE',
                        success: function() {
                            alert('Lista borrada correctamente.');
                            loadTaskLists();
                        }
                    });
                }
            });

            //Ver ubicación en Google Maps:
            $(document).on('click', '.viewMap', function() {
                const taskId = $(this).data('id');
                const taskListId = $('#taskList').val()
                // IMPLEMENTADO: redirección o lógica del mapa aquí:
                // Hacer la solicitud GET para obtener las tareas
                $.getJSON(`../src/task.php?listId=${taskListId}`, function(tasks) {
                    // Filtrar la tarea específica utilizando el taskId
                    const task = tasks.find(task => task.id === taskId);

                    if (task) {
                        const notes = JSON.parse(task.notes); // Convertir el string JSON de 'notes' a un objeto
                        const latitude = notes.latitude;
                        const longitude = notes.longitude;

                        //URL para Google Maps
                        const googleMapsUrl = `https://www.google.com/maps?q=${latitude},${longitude}`;

                        // Abrir Google Maps en una nueva ventana
                        window.open(googleMapsUrl, '_blank');
                    } else {
                        console.log("Tarea no encontrada");
                    }
                });

            });

            loadTaskLists();
        });
    </script>
</body>

</html>