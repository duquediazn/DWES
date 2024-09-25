<?php 
    if (isset($_GET["nombre"]) && $_GET["nombre"]!="") {
        $nombre = $_GET["nombre"];
        $telefono = $_GET["telefono"];
        
        include "agenda.php";
        
        if($telefono!=""){
            $agenda[$nombre]=$telefono;
        } else {
            $agenda[$nombre]="";
        }

        foreach($agenda as $contacto=>$numero) {
            echo $contacto.": ".$numero."<br>";
        }
    }

    /*if($GET["limpiar"]==="1") {
        $agenda=[];
    } else {
        foreach($agenda as $contacto=>$numero) {
            echo $contacto.": ".$numero."<br>";
        }
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Tarea 2 - Preferencias de Usuario con Sesiones</title>
</head>
<body>
    <h1>Agenda</h1>
    <section class="contenedor">
        <form action="" method="">
            <fieldset>
                <legend>Datos Agenda</legend>
                <?php
                
                ?>
            </fieldset>
            <fieldset>
                <legend>Nuevo Contacto</legend>  
                
                <label for="name">Nombre: 
                    <input type="text" name="nombre" id="name" required>
                </label>
                <br>
                <label for="telefono">Teléfono: 
                    <input type="tel" name="telefono" id="telefono">
                </label>
                <br>
                <button type="submit">Añadir Contacto</button>
                <button type="reset">Limpiar Campos</button>
            </fieldset>
        </form>
        <form action="" method="GET">
            <fieldset>
                <legend>Vaciar Agenda</legend>

                <input type="hidden" name="limpiar" value="1">
                <button type="submit">Vaciar</button>
            </fieldset>
        </form>
    </section>
</body>
</html>