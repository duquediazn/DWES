<?php
session_start();
// Guardar las preferencias en la sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie("idioma", $_POST['idioma'], time() + 3600, "/");
    setcookie("perfil_publico", $_POST['perfil_publico'], time() + 3600, "/");
    setcookie("zona_horaria", $_POST['zona_horaria'], time() + 3600, "/");
    $_SESSION['mensaje'] = "Preferencias de usuario guardadas.";

    // Redirigir para cargar la cookie en la nueva solicitud
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();  // Salimos para que deje de ejecutarse el script.
}

if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']); // Eliminar el mensaje de la sesión para que no se muestre nuevamente
}

// Definir valores predeterminados
$idioma = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : "";
$perfil_publico = isset($_COOKIE['perfil_publico']) ? $_COOKIE['perfil_publico'] : "";
$zona_horaria = isset($_COOKIE['zona_horaria']) ? $_COOKIE['zona_horaria'] : "";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Preferencias</title>
</head>

<body style="background:silver;">
    <div class="container mt-5">
        <div class="d-flex justify-content-center h-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Preferencias Usuario</h3>
                    </div>
                    <?php if (isset($mensaje)) { ?>
                        <div class="text-primary mt-3 container">
                            <strong>
                                <?php echo $mensaje; ?>
                            </strong>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        <form name='preferencias' method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                            <label for="idioma" class="form-label">Idioma</label>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-language"></i>
                                    </span>
                                </div>
                                <select class="form-select form-control" name="idioma" id="idioma">
                                    <option value="Español" <?php if ($idioma == "Español") echo "selected" ?>>Español</option>
                                    <option value="Inglés" <?php if ($idioma == "Inglés") echo "selected" ?>>Inglés</option>
                                </select>
                            </div>
                            <label for="perfil_publico" class="form-label">Perfil público</label>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-users"></i>
                                    </span>
                                </div>
                                <select class="form-select form-control" name="perfil_publico" id="perfil_publico">
                                    <option value="Sí" <?php if ($perfil_publico == "Sí") echo "selected" ?>>Sí</option>
                                    <option value="No" <?php if ($perfil_publico == "No") echo "selected" ?>>No</option>
                                </select>
                            </div>
                            <label for="zona_horaria" class="form-label">Zona Horaria</label>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                </div>
                                <select class="form-select form-control" name="zona_horaria" id="zona_horaria">
                                    <option value="GMT-2" <?php if ($zona_horaria == "GMT-2") echo "selected" ?>>GMT-2</option>
                                    <option value="GMT-1" <?php if ($zona_horaria == "GMT-1") echo "selected" ?>>GMT-1</option>
                                    <option value="GMT" <?php if ($zona_horaria == "GMT") echo "selected" ?>>GMT</option>
                                    <option value="GMT+1" <?php if ($zona_horaria == "GMT+1") echo "selected" ?>>GMT+1</option>
                                    <option value="GMT+2" <?php if ($zona_horaria == "GMT+2") echo "selected" ?>>GMT+2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a class="btn float-left btn-primary" href="mostrar.php">Mostrar Preferencias</a>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Establecer Preferencias" class="btn float-right btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>