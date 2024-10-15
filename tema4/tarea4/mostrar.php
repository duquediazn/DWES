<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

// Borrar preferencias
if (isset($_POST['borrar'])) {
    if (empty($_SESSION['idioma']) || empty($_SESSION['idioma']) || empty($_SESSION['idioma'])) {
        $mensaje = "Debes fijar primero las preferencias.";
    } else {
        unset($_SESSION['idioma']);
        unset($_SESSION['perfil_publico']);
        unset($_SESSION['zona_horaria']);
        $mensaje = "Preferencias borradas.";
    }
}

// Aquí se definen los valores predeterminados
$idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : "No establecido";
$perfil_publico = isset($_SESSION['perfil_publico']) ? $_SESSION['perfil_publico'] : "No establecido";
$zona_horaria = isset($_SESSION['zona_horaria']) ? $_SESSION['zona_horaria'] : "No establecido";
?>
<!--Vista-->
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
    <title>Mostrar</title>
</head>

<body style="background:silver;">

    <div class="float float-right d-inline-flex mt-4 mr-4">
        <i class="fas fa-user mr-3 fa-2x"></i>
        Bienvenido/a <?php echo $_SESSION['usuario']; ?>
        <a href="logout.php" class="btn btn-warning ml-2">Salir</a>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5" style="background-color: #28a745;">
                    <div class="card-body text-white">
                        <h3 class="card-title">
                            <i class="fas fa-user"></i> Preferencias
                        </h3>
                        <?php if (isset($mensaje)) { ?>
                            <div class="text-danger mt-3">
                                <strong>
                                    <?php echo $mensaje; ?>
                                </strong>
                            </div>
                        <?php } ?>
                        <ul class="list-unstyled">
                            <li><strong>Idioma:</strong> <?php echo $idioma ?> </li>
                            <li><strong>Perfil Público:</strong> <?php echo $perfil_publico ?> </li>
                            <li><strong>Zona Horaria:</strong> <?php echo $zona_horaria ?> </li>
                        </ul>
                        <div class="d-flex justify-content-between">
                            <a href="preferencias.php" class="btn btn-primary">Establecer</a>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input type="submit" class="btn btn-danger" name="borrar" value="Borrar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>