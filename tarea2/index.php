<?php
session_start();

// Inicializar la agenda si no existe
if (!isset($_SESSION['agenda'])) {
    $_SESSION['agenda'] = array();
}

// Inicializar mensaje vacío
$mensaje = "";

// Procesar el formulario al enviar
if (isset($_POST["nombre"])) {
    $nombre = trim($_POST["nombre"]);
    $telefono = trim($_POST["telefono"]);

    //Validación datos:
    if ($_POST["nombre"] == "") {
        $mensaje = "El nombre no puede estar vacío.";
    } elseif (strlen($nombre) < 3 || strlen($nombre) > 50) {
        $mensaje = "El nombre debe tener entre 3 y 50 caracteres.";
    } elseif ($telefono != "" && !preg_match('/^(6|7)[0-9]{8}$/', $telefono)) {
        $mensaje = "El número de teléfono no es válido.";
    } else { //Datos válidos:

        //Se comprueba si el nombre ya existe en la agenda:
        if (array_key_exists($nombre, $_SESSION['agenda'])) {
            // Si el nombre ya existe
            if ($telefono === "") {
                // Eliminar la entrada si no hay número
                unset($_SESSION['agenda'][$nombre]);
                $mensaje = "Contacto '$nombre' eliminado.";
            } else {
                // Sustituir el número
                $_SESSION['agenda'][$nombre] = $telefono;
                $mensaje = "Número de '$nombre' actualizado.";
            }
        } else {
            // Si el nombre no existe
            $_SESSION['agenda'][$nombre] = $telefono;
            if ($telefono != "") {
                $mensaje = "Contacto '$nombre' añadido.";
            } else {
                $mensaje = "Contacto '$nombre' añadido sin número de teléfono.";
            }
        }
    }

    //Redirección para evitar reenvío de formulario al recargar la página
    //header("Location: " . $_SERVER['PHP_SELF']);
}

//Limpiar la agenda de contactos:
if (isset($_GET["limpiar"]) && $_GET["limpiar"] === "1") {
    $_SESSION['agenda'] = array();
    $mensaje = "Todos los contactos han sido eliminados.";

    //Redirección para limpiar la query:
    //header("Location: " . $_SERVER['PHP_SELF']);
}

$agenda = $_SESSION['agenda'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Tarea 2 - Preferencias de Usuario con Sesiones</title>
</head>

<body>
    <h1>Agenda</h1>
    <section class="contenedor feedback">
        <?php
        if ($mensaje != "") {
            echo "<p>$mensaje</p>";
        }
        ?>
    </section>
    <section class="contenedor">
        <form action="" method="POST">
            <fieldset>
                <legend>Datos Agenda</legend>
                <ul>
                    <?php
                    if (!empty($agenda)) {
                        foreach ($agenda as $nombre => $telefono) {
                    ?>

                            <li> <?php echo $nombre . ": " . $telefono; ?> </li>

                    <?php
                        }
                    }
                    ?>
                </ul>
            </fieldset>
            <fieldset>
                <legend>Nuevo Contacto</legend>

                <label for="name">Nombre:
                    <input type="text" name="nombre" id="name" maxlength="50" minlength="3" required >
                </label>
                <br>
                <label for="telefono">Teléfono:
                    <!-- pattern: teléfono válido en España-->
                    <input type="text" name="telefono" id="telefono" pattern="^(6|7)[0-9]{8}$">
                </label>
                <br>
                <input class="btn" type="submit" value="Añadir Contacto">
                <input class="btn" type="reset" value="Limpiar Campos">
            </fieldset>
        </form>

        <?php if (!empty($agenda)) { ?>
            <form action="" method="GET">
                <fieldset>
                    <legend>Vaciar Agenda</legend>

                    <input type="hidden" name="limpiar" value="1">

                    <input class="btn" type="submit" value="Vaciar">
                </fieldset>
            </form>
        <?php } ?>
    </section>
</body>

</html>