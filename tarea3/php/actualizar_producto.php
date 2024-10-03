<?php
session_start();

require_once "php/conexion.php";

$_SESSION["mensaje"] = "";

//Envío del formulario: creación de un registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Validación de datos y seguridad
    $errores = []; // Inicializamos un array para almacenar mensajes de error

    // Validar el campo "nombre"
    if (empty($_POST['nombre'])) {
        $errores['nombre'] = "El nombre es obligatorio.";
    } else {
        $nombre = htmlspecialchars(trim($_POST["nombre"]));
    }

    // Validar el campo "nombre-corto"
    if (empty($_POST['nombre-corto'])) {
        $errores['nombre-corto'] = "El nombre corto es obligatorio.";
    } else {
        $nombre_corto = htmlspecialchars(strtoupper(trim($_POST["nombre-corto"])));
        // Validar que solo contenga mayúsculas y números
        if (!preg_match('/^[A-Z0-9]+$/', $nombre_corto)) {
            $errores['nombre-corto'] = "El nombre corto solo debe contener mayúsculas y números.";
        }
    }

    // Validar el campo "precio"
    if (empty($_POST['precio'])) {
        $errores['precio'] = "El precio es obligatorio.";
    } else {
        $precio = trim($_POST['precio']);
        // Validar que sea un número decimal válido con hasta dos decimales
        if (!preg_match('/^\d+(\.\d{1,2})?$/', $precio)) {
            $errores['precio'] = "Introduce un número válido (hasta dos decimales).";
        }
    }

    // Validar el campo "familia"
    if (empty($_POST['familia'])) {
        $errores['familia'] = "La familia es obligatoria.";
    } else {
        $familia = htmlspecialchars(trim($_POST["familia"]));
    }

    // Validar el campo "descripcion" (opcional)
    if (isset($_POST['descripcion'])) {
        $descripcion = htmlspecialchars(trim($_POST["descripcion"]));
    }

    // Procesar el formulario si no hay errores
    if (empty($errores)) {
        try {
            //Preparamos update
            $consulta = $conexionProyecto->prepare('UPDATE productos SET nombre = :nombre, nombre_corto = :nombre_corto,
            descripcion = :descripcion, pvp = :precio, familia = :familia WHERE id = :id');

            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":nombre_corto", $nombre_corto);
            $consulta->bindParam(":descripcion", $descripcion);
            $consulta->bindParam(":precio", $precio);
            $consulta->bindParam(":familia", $familia);
            $consulta->bindParam(":id", $id);

            $consulta->execute(); //Ejecución del update

            $_SESSION["mensaje"] = "
                    <div class='alert alert-success container container-md mb-2'>
                        Producto actualizado correctamente.
                    </div>";
        } catch (PDOException $e) {
            $_SESSION["mensaje"] = '
                    <div class="alert alert-danger container container-md mb-2"> 
                        Error: ' . $e->getMessage() . ' 
                    </div>';
            $_SESSION["mensaje"] .= '
                    <div class="alert alert-warning container container-md mb-2"> 
                        El producto no se ha podido actualizar. 
                    </div>';
        }
    } else {
        // Mostrar errores
        foreach ($errores as $campo => $error) {
            $_SESSION["mensaje"] .= "
                    <div class='alert alert-warning container container-md mb-2'>
                        $error
                    </div>";
        }
    }
}

$consulta = null; //Cerramos conexión

// Redirigir de nuevo a la página del formulario
header('Location: update.php');
