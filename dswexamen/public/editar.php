<?php
session_start();
require '../vendor/autoload.php'; // Carga el autoload de Composer


if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET["id"])) {
    $id = $_GET["id"] ?? null;
}

use Biblioteca\Conexion;
use Biblioteca\Libro;

$conexion = (new Conexion())->getConexion();
$libro = new Libro($conexion);
$data = $libro->datosLibro($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexion = new Conexion();
    $libro = new Libro($conexion->getConexion());
    $libro->editar($id, $_POST['titulo'], $_POST['autor'], $_POST['isbn'], $_POST['disponibilidad']);
    header('Location: listado.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Añadir Nuevo Libro</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $data[0]["titulo"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $data[0]["autor"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $data[0]["isbn"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="disponibilidad" class="form-label">Disponibilidad</label>
                <select class="form-select" id="disponibilidad" name="disponibilidad">
                    <?php if ($data[0]["disponibilidad"] !== 0) : ?>
                        <option value="1" selected>Disponible</option>
                        <option value="0">No Disponible</option>
                    <?php else: ?>
                        <option value="1">Disponible</option>
                        <option value="0" selected>No Disponible</option>
                    <?php endif; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="listado.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>