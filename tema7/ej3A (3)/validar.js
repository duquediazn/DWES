function enviarFormulario() {
    // Cambia el texto y deshabilita el botón de envío mientras se espera una respuesta.
    xajax.$("enviar").disabled = true;
    xajax.$("enviar").value = "Un momento...";

    // Llama a la función `validarFormulario` en el servidor, enviando los datos del formulario "miForm".
    xajax_validarFormulario(xajax.getFormValues("miForm"));

    return false; // Evita el envío tradicional del formulario.
}
