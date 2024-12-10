document.addEventListener('DOMContentLoaded', function () {

    const generarCodigoButton = document.getElementById('generarCodigoButton');

    generarCodigoButton.addEventListener('click', async function () {
        try {
            // Realizar una solicitud fetch para generar el código de barras
            const response = await fetch('generarCode.php', {
                method: 'GET',
                credentials: 'same-origin' // Mantener la sesión activa
            });

            if (response.ok) {
                // Si la respuesta es exitosa, leer la respuesta
                const data = await response.json();

                // Actualizar el campo de código de barras con el nuevo código
                document.getElementById('codigo').value = data.codigo;
            } else {
                console.error('Error al generar el código de barras.');
            }
        } catch (error) {
            console.error('Error en la solicitud:', error);
        }
    });
});
