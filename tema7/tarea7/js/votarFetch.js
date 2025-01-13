form.addEventListener('submit', function (event) {
    event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

    // Crear un objeto FormData a partir del formulario actual
    const formData = new FormData(this);

    // Realizar la solicitud Fetch
    fetch('votar.php', {
        method: 'POST',
        body: formData, // Usar el objeto FormData directamente
    })
        .then(response => {
            if (!response.ok) {
                throw new Error("Error en la conexión con el servidor.");
            }
            return response.json();
        })
        .then(data => {
            // Procesamos la respuesta del servidor
            if (data.status === "error") {
                alert(data.message); // Mostrar el mensaje de error
            } else if (data.status === "success") {
                // Actualizar las estrellas y el número de valoraciones
                actualizarValoracion(formData.get('idProducto'), data.numVotos, data.estrellas, data.halfStar);
            } else {
                alert("Hubo un error al procesar tu voto.");
            }
        })
        .catch(error => {
            alert(error.message || "Hubo un error en la conexión con el servidor.");
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