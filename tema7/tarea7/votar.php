<?php
require './include/Votos.php';
session_start();

if (!isset($_SESSION['usu'])) {
    header('Location:login.php');
    exit();
}

$idProducto = $_POST['idProducto'];
$cantidad = $_POST['valoracion'];
$idUsuario = $_SESSION['usu'];

// Validación de que la cantidad está entre 1 y 5
if ($cantidad < 1 || $cantidad > 5) {
    // Si la cantidad no es válida, se responde con un error
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['status' => 'error', 'message' => 'La valoración debe estar entre 1 y 5.']);
        exit();
    } else {
        $_SESSION["mensaje"] = "La valoración debe estar entre 1 y 5.";
        header("Location: listado.php");
        exit();
    }
}

$votos = new Votos();
$resultado = $votos->miVoto($cantidad, $idProducto, $idUsuario);

if (!$resultado) {
    // Si es una solicitud AJAX, enviamos el mensaje como JSON
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['status' => 'error', 'message' => 'Ya has valorado este producto.']);
        exit();
    } else {
        // Si no es AJAX, redirigimos con un mensaje de error
        $_SESSION["mensaje"] = "Ya has valorado este producto";
        header("Location: listado.php");
        exit();
    }
}

// Obtener el número de votos y las estrellas actualizadas
$numVotos = $votos->numVotos($idProducto);
$estrellasData = $votos->pintarEstrellas($idProducto);

// Si es una solicitud AJAX, devolvemos el resultado en JSON
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    echo json_encode([
        'status' => 'success',
        'numVotos' => $numVotos,
        'estrellas' => $estrellasData['estrellas'],
        'halfStar' => $estrellasData['halfStar']
    ]);
    exit();
} else {
    // Si no es AJAX, redirigimos de vuelta a listado.php con un mensaje de éxito
    $_SESSION["mensaje"] = "Gracias por tu valoración.";
    header("Location: listado.php");
    exit();
}
