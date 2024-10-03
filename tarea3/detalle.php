<?php
require_once "conexion.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $consulta = $conexionProyecto->query("SELECT id, nombre, nombre_corto, descripcion, pvp, familia FROM productos
    WHERE id = $id");

    if (!$registro = $consulta->fetch()) {
        header('Location:listado.php');
    }
}

require_once "inc/header.php";
?>

<h1 class="text-center mt-4 mb-2">Detalle Producto</h1>

<div class="container mt-4" style="width: 50%;">
    <div class="card bg-primary bg-opacity-50 text-white">
        <div class="card-header text-center">
            <?php echo $registro["nombre"]; ?>
        </div>
        <div class="card-body">
            <p class="text-center"> <strong> Código: </strong> <?php echo $registro["id"]; ?> </p>
            <p> <strong> Nombre: </strong> <?php echo $registro["nombre"]; ?> </p>
            <p> <strong> Nombre Corto: </strong><?php echo $registro["nombre_corto"]; ?></p>
            <p> <strong> Código Familia: </strong><?php echo $registro["familia"]; ?></p>
            <p> <strong> PVP (€): </strong><?php echo $registro["pvp"]; ?></p>
            <p> <strong> Descripción: </strong><?php echo $registro["descripcion"]; ?></p>
        </div>
    </div>

    <div class="container text-center">
        <a class="btn bg-primary bg-opacity-50 text-white mt-4" href="listado.php">Volver</a>
    </div>
</div>

<?php
require_once "inc/footer.php";
?>