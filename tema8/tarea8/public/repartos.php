<?php
if (!isset($_GET['id'])) {
    header('Location:tasklist.php');
    die();
}
$id = $_GET['id']; // ID de la lista de tareas
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
<div class="container mt-3">
    <div class="d-flex justify-content-center h-100">
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
                    <input type="text" class="form-control" placeholder="Dirección" id="address" name="address" required>
                </div>
                <div class="form-group mt-1">
                    <button type="button" class="btn btn-info mr-2" id="getCoordinates">Obtener Coordenadas</button>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Latitud" id="latitude" name="latitude" readonly>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Longitud" id="longitude" name="longitude" readonly>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-box-open"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Producto" id="producto" name="producto" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="listId" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-success">Añadir Tarea</button>
                    <a href="../public/index.php?listId=<?php echo $id; ?>" class="btn btn-secondary">Cancelar</a>

                </div>
            </form>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Obtener coordenadas desde geocoding.php
        $('#getCoordinates').on('click', function () {
            const address = $('#address').val().trim();
            if (!address) {
                alert('Por favor, introduce una dirección.');
                return;
            }

            $.ajax({
                url: '../src/geocoding.php',
                method: 'POST',
                data: { address },
                success: function (response) {
                    if (response.error) {
                        alert('Error: ' + response.error);
                    } else {
                        $('#latitude').val(response.lat);
                        $('#longitude').val(response.lng);
                    }
                },
                error: function () {
                    alert('Error al procesar la solicitud.');
                }
            });
        });

        // Enviar datos para crear una nueva tarea en task.php
        $('#taskForm').on('submit', function (e) {
            e.preventDefault();

            const producto = $('#producto').val().trim();
            const address = $('#address').val().trim();
            const latitude = $('#latitude').val().trim();
            const longitude = $('#longitude').val().trim();
            const listId = $('input[name="listId"]').val();

            if (!producto || !address) {
                alert('Por favor, completa los campos obligatorios.');
                return;
            }

            const title = `${producto} - ${address} (${latitude}, ${longitude})`;
            const notes = JSON.stringify({
                address: address,
                latitude: latitude,
                longitude: longitude
            });
            $.ajax({
                url: '../src/task.php',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    title: title,
                    notes: notes,
                    listId: listId
                }),
                success: function (response) {
                    if (typeof response === 'string') {
                        response = JSON.parse(response);
                        
                    }
                    if (response.success) {
                        alert('Tarea añadida correctamente.');
                        window.location.href = `../public/index.php?listId=${listId}`;
                    } else {
                        alert('Error: ' + (response.error || 'No se pudo añadir la tarea.'));
                    }
                },
                error: function () {
                    alert('Error al procesar la solicitud.');
                }
            });
        });
    });
</script>
</body>
</html>
