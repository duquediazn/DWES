<?php
require_once "php/conexion.php";

//Consulta para rellenar la tabla con la lista de productos
$consulta = $conexionProyecto->query("SELECT id, nombre FROM productos");

//Volcado de datos en array $registros
$registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
$consulta = null; //Cerramos conexión

include_once "inc/header.php";
?>
<h1 class="text-center mt-4">Gestión de productos</h1>

<div class="container container-md">
    <a class="btn btn-success mb-2" href="crear.php">Crear</a>

    <table class="table table-dark table-striped table-hover align-middle">
        <thead>
            <tr class="table-dark">
                <th class="text-center">Detalle</th>
                <th class="text-center">Código</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($registros as $row) {
                echo '
                    <tr class="table-dark">
                        <td class="text-center"><a class="btn btn-primary" href="detalle.php?id=' . $row["id"] . '">Detalle</a></td>
                        <td class="text-center">' . $row["id"] . '</td>
                        <td class="text-center">' . $row["nombre"] . '</td>
                        <td class="text-center">
                            <form action="borrar.php" method="POST">
                                <a class="btn btn-warning" href="update.php?id=' . $row["id"] . '">Actualizar</a>
                                <input type="hidden" name="id" value="' . $row["id"] . '">
                                <input class="btn btn-danger" type="submit" value="Borrar">
                            </form>
                        </td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include_once "inc/footer.php";
?>