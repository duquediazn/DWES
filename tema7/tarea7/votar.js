function votarProducto(idProducto, idUsuario) {
    // Obtiene la cantidad seleccionada en el dropdown
    var cantidad = document.getElementById("cantidad_" + idProducto).value;

    $.ajax({
        url: 'ajax_votar.php',
        type: 'POST',
        data: {
            idProducto: idProducto,
            idUsuario: idUsuario,
            cantidad: cantidad
        },
        success: function (response) {
            // Reemplaza el HTML de la columna de valoración con la respuesta de PHP
            $("#valoracion_" + idProducto).html(response);
        },
        error: function () {
            alert('Error en la comunicación con el servidor.');
        }
    });
}
