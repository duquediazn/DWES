<?php

require_once "../src/Producto.php";
require_once '../vendor/autoload.php';

if (!isset($_GET['taskId']) || !isset($_GET['listId'])) {
    header('Location:index.php');
    die();
}
$taskId = $_GET['taskId'];
$listId = $_GET['listId'];

try {
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
    $task = $service->tasks->get($listId, $taskId);
} catch (Google_Service_Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error con Google API: ' . $e->getMessage()]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

$productos = new Producto();
$arrProductos = $productos->listadoProductos();

$data = json_decode($task->getNotes());
$string = $task->getTitle();
$position = strpos($string, '-');
$result = trim(substr($string, 0, $position));

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Añadir Nueva Tarea</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="background:#00bfa5;">
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card" style='width:28rem;'>
            <div class="card-header">
                <h3><i class="fas fa-cart-plus mr-2"></i>Añadir Tarea</h3>
            </div>
            <div class="card-body">
                <form id="taskForm">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width:2.5rem;"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Dirección" id="address" name="address"
                            value="<?php echo $data->address ?>" required>
                    </div>
                    <div class="form-group mt-1">
                        <button type="button" class="btn btn-info mr-2" id="getCoordinates">Obtener Coordenadas</button>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Latitud" id="latitude" name="latitude"
                            value="<?php echo $data->latitude ?>" readonly>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Longitud" id="longitude" name="longitude"
                            value="<?php echo $data->longitude ?>" readonly>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-box-open"></i></span>
                        </div>
                        <select id="producto" class="form-control" required>
                            <?php foreach ($arrProductos as $producto) :
                                if (trim($result) === trim($producto->nombre)): ?>
                                    <option value="<?php echo $producto->nombre ?>" selected><?php echo $producto->nombre ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $producto->nombre ?>"><?php echo $producto->nombre ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="listId" value="<?php echo $listId; ?>">
                        <input type="hidden" name="taskId" value="<?php echo $taskId; ?>">
                        <button type="submit" class="btn btn-success">Actualizar Tarea</button>
                        <a href="../public/index.php?listId=<?php echo $listId; ?>" class="btn btn-secondary">Cancelar</a>

                    </div>
                </form>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            // Obtener coordenadas desde geocoding.php
            $('#getCoordinates').on('click', function() {
                const address = $('#address').val().trim();
                if (!address) {
                    alert('Por favor, introduce una dirección.');
                    return;
                }

                $.ajax({
                    url: '../src/geocoding.php',
                    method: 'POST',
                    data: {
                        address
                    },
                    success: function(response) {
                        if (response.error) {
                            alert('Error: ' + response.error);
                        } else {
                            $('#latitude').val(response.lat);
                            $('#longitude').val(response.lng);
                        }
                    },
                    error: function() {
                        alert('Error al procesar la solicitud.');
                    }
                });
            });

            // Enviar datos para crear una nueva tarea en task.php
            $('#taskForm').on('submit', function(e) {
                e.preventDefault();

                const producto = $('#producto').val().trim();
                const address = $('#address').val().trim();
                const latitude = $('#latitude').val().trim();
                const longitude = $('#longitude').val().trim();
                const listId = $('input[name="listId"]').val();
                const taskId = $('input[name="taskId"]').val();

                if (!producto || !address) {
                    alert('Por favor, completa los campos obligatorios.');
                    return;
                }

                const title = `${producto} - ${address} (${latitude}, ${longitude})`;
                const notes = JSON.stringify({
                    address: address,
                    latitude: latitude,
                    longitude: longitude,
                });
                $.ajax({
                    url: '../src/task.php',
                    method: 'PUT',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        title: title,
                        notes: notes,
                        listId: listId,
                        taskId: taskId
                    }),
                    success: function(response) {
                        if (typeof response === 'string') {
                            response = JSON.parse(response);

                        }
                        if (response.success) {
                            alert('Tarea actualizada correctamente.');
                            window.location.href = `../public/index.php?listId=${listId}`;
                        } else {
                            alert('Error: ' + (response.error || 'No se pudo añadir la tarea.'));
                        }
                    },
                    error: function() {
                        alert('Error al procesar la solicitud.');
                    }
                });
            });
        });
    </script>
</body>

</html>