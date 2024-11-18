async function enviarFormulario() {
    // Declara una constante para obtener el botón de envío por su ID.
    const botonEnviar = document.getElementById("enviar");

    // Desactiva el botón de envío para evitar múltiples clics.
    botonEnviar.disabled = true;

    // Cambia el texto del botón para indicar que la solicitud está en proceso.
    botonEnviar.value = "Un momento...";

    // Obtiene el formulario por su ID y lo almacena en una constante.
    const form = document.getElementById("miForm");

    /*Crea un objeto FormData para recopilar todos los datos del formulario.
    new FormData(form) crea un objeto FormData que automáticamente recopila todos los campos 
    del formulario (incluyendo sus nombres y valores) y los organiza en un formato adecuado para 
    ser enviados en una solicitud HTTP.*/
    const formData = new FormData(form);

    try {
        // Realiza una solicitud fetch asincrónica a la misma URL actual, usando el método POST.
        const response = await fetch(window.location.href, {
            method: "POST",  // Define el método de la solicitud como POST.
            headers: { 'X-Requested-With': 'XMLHttpRequest' },  // Incluye una cabecera para indicar que la solicitud es AJAX.
            body: formData,  // Incluye los datos del formulario como el cuerpo de la solicitud.
        });

        // Verifica si la respuesta no es satisfactoria; lanza un error en tal caso.
        if (!response.ok) {
            throw new Error("Error en la solicitud al servidor.");
        }

        // Convierte la respuesta en JSON para facilitar el uso de los datos devueltos.
        const data = await response.json();

        // Limpia los mensajes de error previos del formulario.
        document.getElementById("errUsu").innerHTML = "";
        document.getElementById("errPass").innerHTML = "";
        document.getElementById("errMail").innerHTML = "";

        // Verifica si la respuesta indica éxito; si no, muestra los errores específicos.
        if (!data.success) {
            // Si hay un error en el campo de usuario, lo muestra en el elemento correspondiente.
            if (data.errUsu) {
                document.getElementById("errUsu").innerHTML = data.errUsu;
            }
            // Si hay un error en el campo de contraseña, lo muestra en el elemento correspondiente.
            if (data.errPass) {
                document.getElementById("errPass").innerHTML = data.errPass;
            }
            // Si hay un error en el campo de correo, lo muestra en el elemento correspondiente.
            if (data.errMail) {
                document.getElementById("errMail").innerHTML = data.errMail;
            }
        } else {
            // Si la respuesta indica éxito, muestra el mensaje de éxito en un cuadro de alerta.
            alert(data.message);
        }
    } catch (error) {
        // Captura y maneja cualquier error ocurrido en el proceso, mostrando un mensaje de alerta.
        alert("Ocurrió un error: " + error.message);
    } finally {
        // Restaura el estado del botón de envío: lo reactiva y cambia el texto a "Registrar".
        botonEnviar.disabled = false;
        botonEnviar.value = "Registrar";
    }

    // Retorna false para prevenir el envío tradicional del formulario (si esta función se usa en onsubmit).
    return false;
}


