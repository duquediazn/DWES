<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Lista de Repartos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body style="background:#00bfa5;">
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card" style='width:28rem;'>
            <div class="card-header">
                <h3><i class="fas fa-calendar"></i> Crear Lista de Repartos</h3>
            </div>
            <div class="card-body">
                <form id="createTaskListForm" class="mb-3">
                    <div class="mb-3">
                        <label for="date" class="form-label">Selecciona la fecha:</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Lista</button>
                    <a href="index.php" class="btn btn-secondary">Volver</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        $('#createTaskListForm').submit(function(event) {
            event.preventDefault();
            const date = $('#date').val();

            if (!date) {
                alert('Por favor, selecciona una fecha.');
                return;
            }

            $.ajax({
                url: '../src/tasklist.php',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    date: date
                }),
                success: function(response) {
                    alert('Lista de tareas creada con éxito.');
                },
                error: function(err) {
                    const error = JSON.parse(err.responseText);
                    alert(`Error: ${error.error}`);
                }
            });
        });
    </script>
</body>

</html>