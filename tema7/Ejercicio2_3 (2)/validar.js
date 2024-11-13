// Capturamos el evento de envío del formulario con id "registro".
// Si no se cumple la función validar(), evitamos el envío del formulario.
$("#registro").submit(function (event) {
    if (!validar()) event.preventDefault(); // preventDefault evita el envío del formulario si la validación falla.
});

// Función para validar el campo de nombre de usuario
function validarNombre() {
    const usu = $("#usu");       // Selecciona el campo de entrada de usuario (con id "usu").
    const errUsu = $("#errUsu"); // Selecciona el elemento que muestra errores de usuario (con id "errUsu").

    // Si el valor del campo de usuario es menor a 4 caracteres:
    if (usu.val().length < 4) {
        // Muestra el mensaje de error quitando la clase "d-none" (que oculta el elemento)
        // y agregando clases para formatearlo como un mensaje de error.
        errUsu.removeClass("d-none").addClass("input-group form-group text-danger");
        return false; // Retorna false para indicar que la validación falló.
    }

    // Si la longitud es válida, oculta el mensaje de error
    errUsu.last().addClass("d-none");
    return true; // Retorna true si el nombre de usuario es válido.
}

// Función para validar los campos de contraseña
function validarPass() {
    const pass1 = $("#pass1");   // Selecciona el primer campo de contraseña (id "pass1").
    const pass2 = $("#pass2");   // Selecciona el segundo campo de contraseña (id "pass2").
    const errPass = $("#errPass"); // Selecciona el elemento de error de contraseña (id "errPass").

    // Comprueba que la longitud de pass1 sea al menos 6 caracteres y que ambas contraseñas coincidan:
    if (pass1.val().length < 6 || pass1.val() != pass2.val()) {
        // Si la validación falla, muestra el mensaje de error:
        errPass.removeClass("d-none").addClass("input-group form-group text-danger");
        return false; // Retorna false si la contraseña es inválida o no coinciden.
    }

    // Si la contraseña es válida, oculta el mensaje de error.
    errPass.last().addClass("d-none");
    return true; // Retorna true si ambas contraseñas son válidas y coinciden.
}

// Función para validar el campo de correo electrónico
function validarMail() {
    const mail = $("#mail");       // Selecciona el campo de entrada de correo (id "mail").
    const errMail = $("#errMail"); // Selecciona el elemento de error para el correo (id "errMail").

    // Usa una expresión regular para verificar el formato del correo electrónico:
    if (!mail.val().match("^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$")) {
        // Si el correo no cumple el formato, muestra el mensaje de error.
        errMail.removeClass("d-none").addClass("input-group form-group text-danger");
        return false; // Retorna false si el correo es inválido.
    }

    // Si el correo es válido, oculta el mensaje de error.
    errMail.last().addClass("d-none");
    return true; // Retorna true si el correo tiene un formato válido.
}

// Función principal de validación que ejecuta las tres funciones de validación anteriores
function validar() {
    // Ejecuta validarNombre(), validarMail() y validarPass(), y retorna true sólo si todas son válidas.
    // Usa el operador "&" (AND bit a bit) en vez de "&&" (AND lógico), lo cual es poco común en JavaScript.
    return validarNombre() & validarMail() & validarPass();
}
