<?php
// index.php

// Función para detectar si la solicitud es AJAX
function esSolicitudAjax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

// Procesar la solicitud solo si es una llamada AJAX (Fetch API)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && esSolicitudAjax()) {
    header('Content-Type: application/json');

    // Funciones de validación
    function validarNombre($nombre) {
        return strlen($nombre) >= 4;
    }

    function validarEmail($email) {
        return preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $email);
    }

    function validarPasswords($pass1, $pass2) {
        return ($pass1 === $pass2 && strlen($pass1) > 5);
    }

    // Obtener los datos enviados
    $valores = $_POST;
    $response = [];
    $error = false;

    // Validar nombre de usuario
    if (!validarNombre($valores['usu'])) {
        $response['errUsu'] = "El nombre debe tener más de 3 caracteres.";
        $error = true;
    }

    // Validar contraseñas
    if (!validarPasswords($valores['pass1'], $valores['pass2'])) {
        $response['errPass'] = "La contraseña debe ser mayor de 5 caracteres o no coinciden.";
        $error = true;
    }

    // Validar email
    if (!validarEmail($valores['mail'])) {
        $response['errMail'] = "La dirección de email no es válida.";
        $error = true;
    }

    // Si no hay errores, enviar mensaje de éxito
    if (!$error) {
        $response['success'] = true;
        $response['message'] = "Registro completado exitosamente.";
    } else {
        $response['success'] = false;
    }

    echo json_encode($response);
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Validación en PHP</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Incluir el archivo JavaScript -->
    <script type="text/javascript" src="validarajax.js"></script>
</head>
<body style="background:#00bfa5;">

<div class="container mt-5">
    <div class="d-flex justify-content-center h-100">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                <h3><i class="fa fa-cog mr-1"></i>Registro</h3>
            </div>
            <div class="card-body">
                <form id="miForm" method="POST" action="javascript:void(null);" onsubmit="return enviarFormulario();">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="usuario" id="usu" name="usu">
                        <span id="errUsu" class="text-danger"></span>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="contraseña" id="pass1" name="pass1" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="repita la contraseña" id="pass2" name="pass2" required>
                    </div>
                    <span id="errPass" class="text-danger"></span>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="e-Mail" id="mail" name="mail">
                    </div>
                    <span id="errMail" class="text-danger"></span>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn float-right btn-info" id="enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
