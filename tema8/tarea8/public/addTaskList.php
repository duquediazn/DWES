<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Lista de Repartos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="text-center">
            <h1 class="mb-4">Crear Lista de Repartos</h1>
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