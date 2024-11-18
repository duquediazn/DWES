<?php
session_start();
require_once 'include/Usuario.php';

// Recolectar los parámetros enviados por la solicitud POST
$usu = $_POST['usu'];
$pass = $_POST['pass'];

function vUsuario($u, $p)
{
    $resp = false;

    if (strlen($u) == 0 || strlen($p) == 0) {
        $resp = false;
    } else {
        $usuario = new Usuario();
        if (!$usuario->isValido($u, $p)) {
            $resp = false;
        } else {
            $_SESSION['usu'] = $u;
            $resp = true;
        }
        $usuario = null;
    }

    return $resp;
}

// Verifica si los datos fueron recibidos
if (isset($usu) && isset($pass)) {
    // Realiza la validación de usuario
    $result = vUsuario($usu, $pass);

    // Devuelve el resultado como una respuesta simple
    echo $result ? 'true' : 'false';
}
