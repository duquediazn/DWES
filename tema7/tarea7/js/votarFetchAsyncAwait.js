document.addEventListener('DOMContentLoaded', function () {
    // Cuando se cargue el DOM
    const forms = document.querySelectorAll('form[id^="formVotar-"]');
    forms.forEach((form) => {
        form.addEventListener('submit', async function (event) {
            event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

            try {
                // Crear un objeto FormData a partir del formulario actual
                const formData = new FormData(this);

                // Realizar la solicitud Fetch usando async/await
                const response = await fetch('votar.php', {
                    method: 'POST',
                    body: formData, // Usar el objeto FormData directamente
                });

                if (!response.ok) {
                    throw new Error("Error en la conexión con el servidor.");
                }

                const data = await response.json();

                // Procesar la respuesta del servidor
                if (data.status === "error") {
                    alert(data.message); // Mostrar el mensaje de error
                } else if (data.status === "success") {
                    // Actualizar las estrellas y el número de valoraciones
                    actualizarValoracion(formData.get('idProducto'), data.numVotos, data.estrellas, data.halfStar);
                } else {
                    alert("Hubo un error al procesar tu voto.");
                }
            } catch (error) {
                // Manejo de errores
                alert(error.message || "Hubo un error en la conexión con el servidor.");
            }
        });
    });
});

function actualizarValoracion(idProducto, numVotos, estrellas, halfStar) {
    const fila = document.querySelector(`tr[id='${idProducto}']`);
    const estrellasContenedor = fila.querySelector('.estrellas');
    const numVotosCell = fila.querySelector('.num-votos');

    // Actualizar el número de valoraciones
    numVotosCell.textContent = `${numVotos} Valoraciones.`;

    // Actualizar las estrellas
    estrellasContenedor.innerHTML = '';
    for (let i = 0; i < estrellas; i++) {
        estrellasContenedor.innerHTML += '<i class="fas fa-star"></i>';
    }

    if (halfStar) {
        estrellasContenedor.innerHTML += '<i class="fas fa-star-half-alt"></i>';
    }
}
