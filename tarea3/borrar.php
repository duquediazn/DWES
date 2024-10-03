<?php
require_once "php/conexion.php";

$mensaje = "";

if ($_POST["id"]) {
    $id = $_POST["id"];

    $consulta = $conexionProyecto->query("SELECT id FROM productos WHERE id = $id");

    if ($registro = $consulta->fetch()) { //Si el producto existe
        //Procedemos al borrado:
        try {
            //Preparamos delete
            $consulta = $conexionProyecto->prepare('DELETE FROM productos WHERE id = :id');

            $consulta->bindParam(":id", $id);

            $consulta->execute(); //Ejecución del delete

            $mensaje = "
                    <div class='alert alert-success container container-md mb-2'>
                        Producto borrado correctamente.
                    </div>";
        } catch (PDOException $e) {
            $mensaje = '
                    <div class="alert alert-danger container container-md mb-2"> 
                        Error: ' . $e->getMessage() . ' 
                    </div>';
            $mensaje .= '
                    <div class="alert alert-warning container container-md mb-2"> 
                        El producto no se ha podido borrar. 
                    </div>';
        }
    } else {
        $mensaje = '
                <div class="alert alert-warning container container-md mb-2"> 
                    El producto que intenta borrar no existe. 
                </div>';
    }
}

$consulta = null; //Cerramos conexión

require_once "inc/header.php";
?>

<div class="container mt-4">
    <?php echo $mensaje; ?>

    <a class="btn btn-secondary" href="listado.php">Volver</a>
</div>

<?php require_once "footer.php"; ?>