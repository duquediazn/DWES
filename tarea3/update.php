<?php
session_start();

require_once "php/conexion.php";

include_once "inc/header.php";

if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']); // Eliminar el mensaje para que no aparezca en recargas futuras
} else {
    $mensaje = "";
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $consulta = $conexionProyecto->query("SELECT id, nombre, nombre_corto, descripcion, pvp, familia FROM productos
    WHERE id = $id");

    if ($registro_productos = $consulta->fetch()) {
        $consulta = $conexionProyecto->query("SELECT cod, nombre FROM familias");

        $registros_familias = $consulta->fetchAll();
    }
} else {
    header('Location:listado.php');
}


?>
<h1 class="text-center mt-4 mb-2">Modificar Producto</h1>

<?php
// Mensaje de feedback al usuario
if (!empty($mensaje)) {
    echo $mensaje;
}
?>

<div class="container container-md">
    <form action="php/actualizar_producto.php" method="POST">
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
include_once "inc/footer.php";
?>