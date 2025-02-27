$(document).ready(function () {
    // Cuando se cargue el DOM
    $('form[id^="formVotar-"]').submit(function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

        // Obtener los valores del formulario
        const idProducto = $(this).find('input[name="idProducto"]').val();
        const valoracion = $(this).find('select[name="valoracion"]').val();

        // Comprobación de que la valoracion esté entre 1 y 5
        if (valoracion < 1 || valoracion > 5) {
            alert("La valoración debe estar entre 1 y 5.");
            return; // Detenemos la ejecución y no enviamos el formulario
        }

        // Realizar la solicitud AJAX
        $.ajax({
            url: 'votar.php', // Archivo PHP que procesará la votación
            type: 'POST', // Método de la solicitud
            data: {
                idProducto: idProducto,
                valoracion: valoracion
            },
            dataType: 'json', // Especificamos que esperamos una respuesta en formato JSON
            success: function (response) { // Solicitud AJAX exitosa
                // Procesamos la respuesta del servidor
                if (response.status === "error") {
                    alert(response.message); // Mostrar el mensaje de error
                } else if (response.status === "success") {
                    // Actualizar las estrellas y el número de valoraciones
                    actualizarValoracion(idProducto, response.numVotos, response.estrellas, response.halfStar);
                } else {
                    // Si la respuesta no tiene un estado esperado, se muestra un mensaje genérico de error.
                    alert("Hubo un error al procesar tu voto.");
                }
            },
            error: function () { // Solicitud AJAX fallida
                alert("Hubo un error en la conexión con el servidor.");
            }
        });
    });
});

function actualizarValoracion(idProducto, numVotos, estrellas, halfStar) {
    const fila = $("tr[id='" + idProducto + "']");
    let estrellasContenedor = fila.find('.estrellas');

    // Actualizar el número de valoraciones
    let numVotosCell = fila.find('.num-votos');
    numVotosCell.text(numVotos + " Valoraciones.");

    // Actualizar las estrellas
    estrellasContenedor.empty();
    for (let i = 0; i < estrellas; i++) {
        estrellasContenedor.append('<i class="fas fa-star"></i>');
    }

    if (halfStar) {
        estrellasContenedor.append('<i class="fas fa-star-half-alt"></i>');
    }
}
