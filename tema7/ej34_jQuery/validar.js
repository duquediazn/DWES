function envForm() {
    var usu = document.getElementById("usu").value;
    var pass = document.getElementById('pass').value;

    // Llamada AJAX con jQuery
    $.ajax({
        url: 'include/Validar.php', // Archivo PHP para la validación
        type: 'POST',
        data: {
            usu: usu,
            pass: pass
        },
        success: function (response) {
            // Verifica la respuesta del servidor
            if (response == 'false') {
                alert("Credenciales Erróneas !!!");
            } else {
                // Redirige a la página de productos si las credenciales son correctas
                window.location.href = 'listado.php';
            }
        },
        error: function () {
            alert('Error en la comunicación con el servidor.');
        }
    });

    // Evita que el formulario se envíe de manera convencional
    return false;
}
