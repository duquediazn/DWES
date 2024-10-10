<?php
    //Si no .htaccess
    if ($_SERVER['PHP_AUTH_USER']!='gestor' || $_SERVER['PHP_AUTH_PW']!='secreto') {
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        /*Envía una cabecera HTTP que solicita la autenticación básica. 
        El "Realm" especifica el ámbito de la autenticación, 
        que en este caso es "Contenido restringido". 
        Esto indica al navegador que debe pedir al usuario un nombre de usuario y una contraseña.*/
        header('HTTP/1.0 401 Unauthorized');
        /*Envía una respuesta HTTP con el código de estado 401, que significa "No autorizado". 
        Esto indica que el acceso al recurso está prohibido porque no se proporcionaron credenciales válidas.*/
        echo "Usuario no reconocido!";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS BootStrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Ejemplo Tema 4</title>
</head>
<body style='background:gray'>
    <h3 class='text-center mt-3'>Directivas PHP_AUTH</h3>
    <div class='container mt-3'>
        <div class="card text-white bg-primary mb-3 m-auto" style="max-width:22rem;">
            <div class="card-header font-weight-bold text-center">PHP_AUTH</div>
            <div class="card-body" style='font-size:1.2em'>
                <p class="card-text"><span class='font-weight-bold'>Usuario:</span>"<?php echo $_SERVER['PHP_AUTH_USER'] ?>"</p>
                <p class="card-text"><span class='font-weight-bold'>Contraseña:</span>"<?php echo $_SERVER['PHP_AUTH_PW'] ?>"</p>
                <p class="card-text"><span class='font-weight-bold'>MétodoAutentificación:</span>"<?php echo $_SERVER['AUTH_TYPE'] ?>"</p>
            </div>
        </div>
    </div>
</body>
</html>