<?php
require_once "php/conexion.php";

$mensaje = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    try {
        $consulta = $conexionProyecto->query("SELECT id, nombre, nombre_corto, descripcion, pvp, familia FROM productos
        WHERE id = $id");

        if (!$registro = $consulta->fetch()) {
            header('Location:listado.php');
        }
    } catch(PDOException $e) {
        $mensaje = '
            <div class="alert alert-danger container container-md mb-2"> 
                Error: ' . $e->getMessage() . ' 
            </div>';
    }
}

include_once "inc/header.php";
?>

<h1 class="text-center mt-4 mb-2">Detalle Producto</h1>

<?php
// Mensaje de feedback al usuario
if (!empty($mensaje)) {
    echo $mensaje;
}
?>

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
include_once "inc/footer.php";
?>