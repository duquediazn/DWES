<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geocoding App - OpenCageData</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f7f7f7;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="button"], input[readonly] {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }
        input[readonly] {
            background-color: #e9e9e9;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>Geocoding App</h1>
    <p>Introduce una dirección para obtener sus coordenadas:</p>

    <form id="geocoding-form">
        <label for="address">Dirección:</label>
        <input type="text" id="address" placeholder="Introduce una dirección" required>
        <input type="button" id="get-coordinates-btn" value="Obtener Coordenadas">
    </form>

    <div id="result" style="display: none;">
        <p><strong>Resultados:</strong></p>
        <label for="latitude">Latitud:</label>
        <input type="text" id="latitude" readonly>
        <label for="longitude">Longitud:</label>
        <input type="text" id="longitude" readonly>
    </div>

    <p class="error" id="error-message" style="display: none;"></p>

    <script>
        document.getElementById('get-coordinates-btn').addEventListener('click', async function () {
            const address = document.getElementById('address').value.trim();
            const errorMessage = document.getElementById('error-message');
            const resultDiv = document.getElementById('result');
            const latitudeField = document.getElementById('latitude');
            const longitudeField = document.getElementById('longitude');

            // Limpiar resultados previos
            errorMessage.style.display = 'none';
            resultDiv.style.display = 'none';

            if (!address) {
                errorMessage.textContent = 'Por favor, introduce una dirección.';
                errorMessage.style.display = 'block';
                return;
            }

            try {
                // Enviar la dirección al servidor
                const response = await fetch('http://localhost/DWES/tema8/tarea8/src/geocoding.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({ address }),
                });

                const data = await response.json();

                if (data.error) {
                    errorMessage.textContent = data.error;
                    errorMessage.style.display = 'block';
                } else {
                    latitudeField.value = data.lat;
                    longitudeField.value = data.lng;
                    resultDiv.style.display = 'block';
                }
            } catch (error) {
                errorMessage.textContent = 'Ocurrió un error al procesar la solicitud.';
                errorMessage.style.display = 'block';
            }
        });
    </script>
</body>
</html>
