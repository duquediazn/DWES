<?php
require '../vendor/autoload.php'; // Composer autoload
use Biblioteca\Conexion;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($usuario) && !empty($password)) {
        $conexion = (new Conexion())->getConexion();
        $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");

        try {
            $stmt->execute([$usuario, $password]);
            $success = "Usuario creado correctamente.";
        } catch (PDOException $e) {
            $error = "Error al crear el usuario: " . $e->getMessage();
        }
    } else {
        $error = "Todos los campos son obligatorios.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Crear Usuario</h1>
    <?php if (!empty($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php elseif (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <form action="create_user.php" method="POST">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario (Email)</label>
            <input type="email" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
        <a href="login.php" class="btn btn-secondary">Volver al Login</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
