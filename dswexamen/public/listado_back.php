<?php
namespace Biblioteca;

require '../src/Conexion.php';
require '../src/Libro.php';


$conexion = new Conexion();
$libro = new Libro($conexion->getConexion());
$libros = $libro->listar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Listado de Libros</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>ISBN</th>
            <th>Disponibilidad</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($libros as $lib): ?>
            <tr>
                <td><?= $lib['id'] ?></td>
                <td><?= $lib['titulo'] ?></td>
                <td><?= $lib['autor'] ?></td>
                <td><?= $lib['isbn'] ?></td>
                <td><?= $lib['disponibilidad'] ? 'Disponible' : 'No Disponible' ?></td>
                <td>
                    <a href="editar.php?id=<?= $lib['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="borrar.php?id=<?= $lib['id'] ?>" class="btn btn-danger btn-sm">Borrar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="crear.php" class="btn btn-primary">Añadir Libro</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
