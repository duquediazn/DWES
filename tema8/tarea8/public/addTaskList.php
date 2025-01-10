<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Lista de Repartos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Crear Lista de Repartos</h1>

    <form id="createTaskListForm">
        <label for="date">Selecciona la fecha:</label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Crear Lista</button>
    </form>

    <p id="responseMessage"></p>

    <a href="index.php">Volver a la página principal</a>

    <script>
        $('#createTaskListForm').on('submit', function(event) {
            event.preventDefault();
            const date = $('#date').val();

            if (!date) {
                $('#responseMessage').text('Por favor, selecciona una fecha.');
                return;
            }

            $.ajax({
                url: '../src/tasklist.php',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ date: date }),
                success: function(response) {
                    $('#responseMessage').text('Lista de tareas creada con éxito.');
                },
                error: function(xhr) {
                    const error = JSON.parse(xhr.responseText);
                    $('#responseMessage').text(`Error: ${error.error}`);
                }
            });
        });
    </script>
</body>
</html>
