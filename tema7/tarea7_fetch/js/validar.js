document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('miForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

        const formData = new FormData(this); // Crear FormData con los datos del formulario

        // Llamada con Fetch API
        fetch('validar.php', {
            method: 'POST', // Método HTTP
            body: formData // Usamos FormData directamente
        })
            .then(response => response.text()) // Convertir la respuesta a texto
            .then(data => {
                // Verifica la respuesta del servidor
                if (data === 'false') {
                    alert("Credenciales Erróneas !!!");
                } else {
                    // Redirige a la página de productos si las credenciales son correctas
                    window.location.href = 'listado.php';
                }
            })
            .catch(error => {
                alert('Error en la comunicación con el servidor.');
            });
    });
});

//Con async y await:
/*
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('miForm').addEventListener('submit', async function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

        const formData = new FormData(this); // Crear FormData con los datos del formulario

        try {
            // Llamada con Fetch API
            const response = await fetch('validar.php', {
                method: 'POST', // Método HTTP
                body: formData // Usamos FormData directamente
            })

            if (!response.ok) {
                throw new Error("Error en la solicitud al servidor.");
            }

            const data = await response.text();

            if (!data.success) {
                if (data === 'false') {
                    alert("Credenciales Erróneas !!!");
                } else {
                    // Redirige a la página de productos si las credenciales son correctas
                    window.location.href = 'listado.php';
                }

            } else {
                alert(data.message);
            }
        } catch (error) {
            alert("Error en la comunicación con el servidor: " + error.message);
        }
    });
});
*/