document.addEventListener('DOMContentLoaded', function () {
    // Cuando se cargue el DOM
    const forms = document.querySelectorAll('form[id^="formVotar-"]');

    forms.forEach(form => {
        form.addEventListener('submit', async function (event) {
            event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

            // Crear un objeto FormData con los datos del formulario
            const formData = new FormData(this);

            // Obtener los valores necesarios para la validación
            const valoracion = formData.get('valoracion');

            // Comprobación de que la valoracion esté entre 1 y 5
            if (valoracion < 1 || valoracion > 5) {
                alert("La valoración debe estar entre 1 y 5.");
                return; // Detenemos la ejecución y no enviamos el formulario
            }

            try {
                // Realizar la solicitud con Fetch API usando async/await
                const response = await fetch('votar.php', {
                    method: 'POST',
                    body: formData // Usamos FormData directamente
                });

                const data = await response.json(); // Convertir la respuesta a JSON

                // Procesamos la respuesta del servidor
                if (data.status === "error") {
                    alert(data.message); // Mostrar el mensaje de error
                } else if (data.status === "success") {
                    // Actualizar las estrellas y el número de valoraciones
                    actualizarValoracion(formData.get('idProducto'), data.numVotos, data.estrellas, data.halfStar);
                } else {
                    // Si la respuesta no tiene un estado esperado, se muestra un mensaje genérico de error.
                    alert("Hubo un error al procesar tu voto.");
                }
            } catch (error) {
                // Error de red o en la solicitud
                alert("Hubo un error en la conexión con el servidor.");
            }
        });
    });
});

function actualizarValoracion(idProducto, numVotos, estrellas, halfStar) {
    const fila = document.querySelector(`tr[id='${idProducto}']`);
    let estrellasContenedor = fila.querySelector('.estrellas');

    // Actualizar el número de valoraciones
    let numVotosCell = fila.querySelector('.num-votos');
    numVotosCell.textContent = `${numVotos} Valoraciones.`;

    // Actualizar las estrellas
    estrellasContenedor.innerHTML = ''; // Limpiar las estrellas existentes
    for (let i = 0; i < estrellas; i++) {
        estrellasContenedor.innerHTML += '<i class="fas fa-star"></i>';
    }

    if (halfStar) {
        estrellasContenedor.innerHTML += '<i class="fas fa-star-half-alt"></i>';
    }
}
