<?php
    require_once "conexion.php";

    $consulta=$conexionProyecto->query("SELECT id, nombre FROM productos");
    $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
    $consulta=null;//Cerramos conexión
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 3: Cesta de la compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-info">
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
                            <td class="text-center"><a class="btn btn-primary" href="detalle.php?id='.$row["id"].'">Detalle</a></td>
                            <td class="text-center">'.$row["id"].'</td>
                            <td class="text-center">'.$row["nombre"].'</td>
                            <td class="text-center">
                                <form action="borrar.php" method="POST">
                                    <a class="btn btn-warning" href="update.php?id='.$row["id"].'">Actualizar</a>
                                    <input type="hidden" name="id" value="'.$row["id"].'">
                                    <input class="btn btn-danger" type="submit" value="Borrar">
                                </form>
                            </td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>