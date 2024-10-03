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

//Consulta para rellenar el select del formulario
$consulta = $conexionProyecto->query("SELECT cod, nombre FROM familias");

//Volcado de datos en array registros
$registros = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<h1 class="text-center mt-4 mb-2">Crear Producto</h1>

<?php
// Mensaje de feedback al usuario
if (!empty($mensaje)) {
    echo $mensaje;
}
?>

<div class="container container-md">
    <form action="php/crear_producto.php" method="POST">
        <div class="row">
            <div class="col">
                <label class="mb-2" for="nombre">Nombre</label>
                <input class="form-control mb-2" type="text" name="nombre" id="nombre" placeholder="Nombre" required
                    title="Introduzca el nombre del producto." maxlength="200">
            </div>
            <div class="col">
                <label class="mb-2" for="nombre-corto">Nombre corto</label>
                <input class="form-control mb-2" type="text" name="nombre-corto" id="nombre-corto" placeholder="Nombre Corto" required
                    pattern="^[A-Z0-9]+$" title="Introduzca el nombre corto del producto, sólo mayúsculas y números" maxlength="50">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="mb-2" for="precio">Precio (€)</label>
                <input class="form-control mb-2" type="text" name="precio" id="precio" placeholder="Precio (€)" required
                    pattern="^\d+(\.\d{1,2})?$" title="Introduce un número válido (hasta dos decimales)">
            </div>
            <div class="col">
                <label class="mb-2" for="familia">Familia</label>

                <select class="form-select mb-2" name="familia" id="familia" required>
                    <?php
                    foreach ($registros as $row) {
                        echo '
                                <option value="' . $row["cod"] . '"> ' . $row["nombre"] . ' </option>
                            ';
                    }
                    ?>
                </select>

            </div>
        </div>
        <label class="mb-2" for="descripcion">Descripción</label>
        <textarea class="form-control mb-2" name="descripcion" id="descripcion"
            title="Descripción del producto (opcional)" rows="10"></textarea>

        <input class="btn btn-primary me-2 mt-2" type="submit" value="Crear">

        <input class="btn btn-success me-2 mt-2" type="reset" value="Limpiar">
        <a class="btn btn-secondary me-2 mt-2" href="listado.php">Volver</a>
    </form>
</div>

<?php
include_once "inc/footer.php";
?>