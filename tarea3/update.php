<?php
require_once "conexion.php";

$mendaje = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $consulta = $conexionProyecto->query("SELECT id, nombre, nombre_corto, descripcion, pvp, familia FROM productos
    WHERE id = $id");

    if ($registro_productos = $consulta->fetch()) {
        $consulta = $conexionProyecto->query("SELECT cod, nombre FROM familias");

        $registros_familias = $consulta->fetchAll();
    } else {
        header('Location:listado.php');
    }
}

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

            $mensaje = "
                    <div class='alert alert-success container container-md mb-2'>
                        Producto actualizado correctamente.
                    </div>";
        } catch (PDOException $e) {
            $mensaje = '
                    <div class="alert alert-danger container container-md mb-2"> 
                        Error: ' . $e->getMessage() . ' 
                    </div>';
            $mensaje .= '
                    <div class="alert alert-warning container container-md mb-2"> 
                        El producto no se ha podido actualizar. 
                    </div>';
        }
    } else {
        // Mostrar errores
        foreach ($errores as $campo => $error) {
            $mensaje .= "
                    <div class='alert alert-warning container container-md mb-2'>
                        $error
                    </div>";
        }
    }
}

$consulta = null; //Cerramos conexión

require_once "inc/header.php";
?>
<h1 class="text-center mt-4 mb-2">Modificar Producto</h1>

<?php
// Mensaje de feedback al usuario
echo $mensaje;
?>

<div class="container container-md">
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label class="mb-2" for="nombre">Nombre</label>
                <input class="form-control mb-2" type="text" name="nombre" id="nombre" placeholder="Nombre" required
                    title="Introduzca el nombre del producto." maxlength="200" value="<?php echo $registro_productos["nombre"]; ?>">
            </div>
            <div class="col">
                <label class="mb-2" for="nombre-corto">Nombre corto</label>
                <input class="form-control mb-2" type="text" name="nombre-corto" id="nombre-corto" placeholder="Nombre Corto" required
                    pattern="^[A-Z0-9]+$" title="Introduzca el nombre corto del producto, sólo mayúsculas y números" maxlength="50"
                    value="<?php echo $registro_productos["nombre_corto"]; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="mb-2" for="precio">Precio (€)</label>
                <input class="form-control mb-2" type="text" name="precio" id="precio" placeholder="Precio (€)" required
                    pattern="^\d+(\.\d{1,2})?$" title="Introduce un número válido (hasta dos decimales)"
                    value="<?php echo $registro_productos["pvp"]; ?>">
            </div>
            <div class="col">
                <label class="mb-2" for="familia">Familia</label>

                <select class="form-select mb-2" name="familia" id="familia" required>
                    <?php
                    foreach ($registros_familias as $row) {
                        if ($row["cod"] === $registro_productos["familia"]) {
                            echo '
                                <option value="' . $row["cod"] . '" selected> ' . $row["nombre"] . ' </option>
                            ';
                        } else {
                            echo '
                                <option value="' . $row["cod"] . '"> ' . $row["nombre"] . ' </option>
                            ';
                        }
                    }
                    ?>
                </select>

            </div>
        </div>
        <label class="mb-2" for="descripcion">Descripción</label>
        <textarea class="form-control mb-2" name="descripcion" id="descripcion"
            title="Descripción del producto (opcional)" rows="10">
            <?php echo $registro_productos["descripcion"]; ?>
        </textarea>

        <input class="btn btn-primary me-2 mt-2" type="submit" value="Modificar">

        <a class="btn btn-secondary me-2 mt-2" href="listado.php">Volver</a>
    </form>
</div>

<?php
require_once "inc/footer.php";
?>