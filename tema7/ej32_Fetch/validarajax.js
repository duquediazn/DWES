async function enviarFormulario() {
    const botonEnviar = document.getElementById("enviar");
    botonEnviar.disabled = true;
    botonEnviar.value = "Un momento...";

    const form = document.getElementById("miForm");
    const formData = new FormData(form);

    try {
        const response = await fetch(window.location.href, {
            method: "POST",
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            body: formData,
        });

        if (!response.ok) {
            throw new Error("Error en la solicitud al servidor.");
        }

        const data = await response.json();

        // Limpiar mensajes de error
        document.getElementById("errUsu").innerHTML = "";
        document.getElementById("errPass").innerHTML = "";
        document.getElementById("errMail").innerHTML = "";

        // Mostrar mensajes de error si existen
        if (!data.success) {
            if (data.errUsu) {
                document.getElementById("errUsu").innerHTML = data.errUsu;
            }
            if (data.errPass) {
                document.getElementById("errPass").innerHTML = data.errPass;
            }
            if (data.errMail) {
                document.getElementById("errMail").innerHTML = data.errMail;
            }
        } else {
            alert(data.message);
        }
    } catch (error) {
        alert("Ocurrió un error: " + error.message);
    } finally {
        botonEnviar.disabled = false;
        botonEnviar.value = "Registrar";
    }

    return false;
}
