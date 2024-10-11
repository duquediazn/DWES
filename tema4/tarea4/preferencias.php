<?php
session_start();

// Guardar las preferencias en la sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['idioma'] = $_POST['idioma'];
    $_SESSION['perfil_publico'] = $_POST['perfil_publico'];
    $_SESSION['zona_horaria'] = $_POST['zona_horaria'];
    $mensaje = "Preferencias de usuario guardadas.";
}

// Definir valores predeterminados
$idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : "";
$perfil_publico = isset($_SESSION['perfil_publico']) ? $_SESSION['perfil_publico'] : "";
$zona_horaria = isset($_SESSION['zona_horaria']) ? $_SESSION['zona_horaria'] : "";
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
                        <div class="text-primary mt-3">
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
                                    <option value="es" <?php if ($idioma == "es") echo "selected" ?>>Español</option>
                                    <option value="en" <?php if ($idioma == "en") echo "selected" ?>>English</option>
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
                                    <option value="si" <?php if ($perfil_publico == "si") echo "selected" ?>>Sí</option>
                                    <option value="no" <?php if ($perfil_publico == "no") echo "selected" ?>>No</option>
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
                                    <option value="gmt-2" <?php if ($zona_horaria == "gmt-2") echo "selected" ?>>GMT-2</option>
                                    <option value="gmt-1" <?php if ($zona_horaria == "gmt-1") echo "selected" ?>>GMT-1</option>
                                    <option value="gmt" <?php if ($zona_horaria == "gmt") echo "selected" ?>>GMT</option>
                                    <option value="gmt+1" <?php if ($zona_horaria == "gmt+1") echo "selected" ?>>GMT+1</option>
                                    <option value="gmt+2" <?php if ($zona_horaria == "gmt+2") echo "selected" ?>>GMT+2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Establecer Preferencias" class="btn float-left btn-primary">
                            </div>
                            <div class="form-group">
                                <a class="btn float-right btn-success" href="mostrar.php">Mostrar Preferencias</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>