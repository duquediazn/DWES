<?php
// 1. Incluimos las librerías de Xajax para permitir comunicación asíncrona entre el cliente y el servidor.
require_once "xajax/xajax_core/xajax.inc.php";

// 2. Creamos funciones de validación específicas que serán llamadas desde el lado cliente usando Xajax.

// Función para validar el nombre de usuario:
function validarNombre($nombre)
{
    // Retorna falso si el nombre tiene menos de 4 caracteres.
    if (strlen($nombre) < 4) return false;
    return true;
}

// Función para validar el formato del email:
function validarEmail($email)
{
    // Usa una expresión regular para validar el formato del correo electrónico.
    return preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $email);
}

// Función para validar la contraseña y su confirmación:
function validarPasswords($pass1, $pass2)
{
    // Comprueba que ambas contraseñas coincidan y tengan al menos 6 caracteres.
    return ($pass1 == $pass2 && strlen($pass1) > 5);
}

// Función principal que valida el formulario completo:
function validarFormulario($valores)
{
    // Creamos una respuesta Xajax para enviar el resultado de la validación.
    $respuesta = new xajaxResponse();
    $error = false; // Variable para rastrear si hay errores en la validación.

    // Validación del nombre de usuario:
    if (!validarNombre($valores['usu'])) {
        // Si es inválido, asigna un mensaje de error al elemento con id "errUsu".
        $respuesta->assign("errUsu", "innerHTML", "El nombre debe tener más de 3 caracteres.");
        $error = true;
    } else {
        // Si es válido, limpia cualquier mensaje previo en "errUsu".
        $respuesta->clear("errUsu", "innerHTML");
    }

    // Validación de las contraseñas:
    if (!validarPasswords($valores['pass1'], $valores['pass2'])) {
        $respuesta->assign("errPass", "innerHTML", "La contraseña debe ser mayor de 5 caracteres o no coinciden.");
        $error = true;
    } else {
        $respuesta->clear("errPass", "innerHTML");
    }

    // Validación del correo electrónico:
    if (!validarEmail($valores['mail'])) {
        $respuesta->assign("errMail", "innerHTML", "La dirección de email no es válida.");
        $error = true;
    } else {
        $respuesta->clear("errMail", "innerHTML");
    }

    // Si no hay errores, muestra un mensaje de éxito.
    if (!$error) $respuesta->alert("Todo correcto.");

    // Habilita el botón de envío y restaura su valor.
    $respuesta->assign("enviar", "value", "Enviar");
    $respuesta->assign("enviar", "disabled", false);

    // Retorna la respuesta de Xajax.
    return $respuesta;
}

// 3. Creamos un objeto Xajax para configurar y manejar peticiones Xajax.
$xajax = new xajax();

// 4. Registramos la función `validarFormulario` para poder llamarla desde JavaScript.
$xajax->register(XAJAX_FUNCTION, "validarFormulario");

// 5. Configuramos la ubicación de los archivos de JavaScript de Xajax.
$xajax->configure('javascript URI', 'xajax/');

// Activamos el modo de depuración para ver información de las solicitudes Xajax.
$xajax->configure("debug", true);

// Procesa cualquier solicitud Xajax entrante. Esto debe ejecutarse antes de cualquier HTML.
$xajax->processRequest();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuraciones de metadatos y estilo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluimos Bootstrap para estilos y Font Awesome para iconos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <title>Formulario Xajax</title>

    <?php
    // Incluimos el JavaScript de Xajax necesario para las solicitudes.
    $xajax->printJavascript();
    ?>
    <!-- Incluimos el archivo de JavaScript personalizado para el envío del formulario -->
    <script type="text/javascript" src="validar.js"></script>
</head>

<body style="background:#00bfa5;">
    <div class="container mt-5">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style='width:24rem;'>
                <!-- Encabezado del formulario -->
                <div class="card-header">
                    <h3><i class="fa fa-cog mr-1"></i>Registro</h3>
                </div>
                <!-- Cuerpo del formulario -->
                <div class="card-body">
                    <!-- Formulario de registro con id "miForm" -->
                    <form name='miForm' id="miForm" method='POST' action="javascript:void(null);"
                        onsubmit="enviarFormulario();">
                        <!-- Campo de usuario con mensaje de error -->
                        <div class="input-group form-group">
                            <input type="text" class="form-control" placeholder="usuario" id='usu' name='usu'>
                            <span id='errUsu' for='usu' class="input-group form-group text-danger"></span>
                        </div>
                        <!-- Campos de contraseña con mensaje de error -->
                        <div class="input-group form-group">
                            <input type="password" class="form-control" placeholder="contraseña" id='pass1' name='pass1' required>
                        </div>
                        <div class="input-group form-group">
                            <input type="password" class="form-control" placeholder="repita la contraseña" id='pass2' name='pass2' required>
                        </div>
                        <span id='errPass' for='pass2' class='input-group form-group text-danger'></span>
                        <!-- Campo de email con mensaje de error -->
                        <div class="input-group form-group">
                            <input type="email" class="form-control" placeholder="e-Mail" name='mail' id='mail'>
                        </div>
                        <span id='errMail' for='mail' class='input-group form-group text-danger'></span>
                        <!-- Botón de envío -->
                        <div class="form-group">
                            <input type="submit" value="Registrar" class="btn float-right btn-info" name='enviar' id="enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>