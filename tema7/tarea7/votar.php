<?php
require './include/Votos.php';
session_start();

if (!isset($_SESSION['usu'])) {
    echo json_encode(['error' => 'Usuario no autenticado']);
    exit;
}

$idProducto = $_POST['idProducto'];
$cantidad = $_POST['cantidad'];
$idUsuario = $_SESSION['usu'];

$votos = new Votos();
$valoracion = $votos->miVoto($idProducto, $idUsuario, $cantidad);

if ($valoracion === false) {
    echo json_encode(['error' => 'Ya has valorado este producto']);
} else {
    // Obtener los datos actualizados de valoración
    $estrellas = $votos->pintarEstrellas($idProducto);
}

function pintarEstrellasHTML($numVotos, $media) {
    $html = "<div>{$numVotos} Valoraciones. ";

    // Pintamos las estrellas completas
    for ($i = 1; $i <= floor($media); $i++) {
        $html .= '<i class="fa fa-star"></i>';
    }
    // Pintamos media estrella si corresponde
    if ($media - floor($media) >= 0.5) {
        $html .= '<i class="fa fa-star-half-alt"></i>';
    }
    // Completamos con estrellas vacías hasta 5
    for ($i = ceil($media); $i < 5; $i++) {
        $html .= '<i class="fa fa-star-o"></i>';
    }

    $html .= "</div>";
    return $html;
}

echo pintarEstrellasHTML($estrellas['num_votos'], $estrellas['media']);