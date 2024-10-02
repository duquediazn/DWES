<?php
    require_once "conexion.php";

    $mensaje="";

    //Consulta para rellenar el select del formulario
    $consulta=$conexionProyecto->query("SELECT cod, nombre FROM familias");

    //Volcado de datos en array registros
    $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);

    //Envío del formulario: creación de un registro
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre=trim($_POST["nombre"]);
        $nombre_corto=trim($_POST["nombre-corto"]);
        $precio=$_POST["precio"];
        $familia=$_POST["familia"];
        $descripcion=$_POST["descripcion"];

        try{
            //Insert preparado
            $consulta=$conexionProyecto->prepare('INSERT INTO productos (nombre, nombre_corto, descripcion, pvp, familia) 
            VALUES (:nombre, :nombre_corto, :descripcion, :precio, :familia)');

            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":nombre_corto", $nombre_corto);
            $consulta->bindParam(":descripcion", $descripcion);
            $consulta->bindParam(":precio", $precio);
            $consulta->bindParam(":familia", $familia);

            $consulta->execute(); //Ejecución del insert
            
            $mensaje='
                <div class="alert alert-success container container-md mb-2"> 
                    Producto registrado correctamente.
                </div>';         

        } catch (PDOException $e){
            $mensaje = '
                <div class="alert alert-danger container container-md mb-2"> 
                    Error: '.$e->getMEssage().' 
                </div>';
            $mensaje .= '
                <div class="alert alert-warning container container-md mb-2"> 
                    El producto no se ha podido registrar. 
                </div>';
        }
    }

    $consulta=null;//Cerramos conexión
    
    require_once "inc/header.php";
?>

<h1 class="text-center mt-4 mb-2">Crear Producto</h1>

<?php
    // Mensaje de feedback al usuario
    echo $mensaje;
?>

<div class="container container-md">
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label class="mb-2" for="nombre">Nombre</label>
                <input class="form-control mb-2" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            </div>
            <div class="col">
                <label class="mb-2" for="nombre-corto">Nombre corto</label>
                <input class="form-control mb-2" type="text" name="nombre-corto" id="nombre-corto" placeholder="Nombre Corto" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="mb-2" for="precio">Precio (€)</label>
                <input class="form-control mb-2" type="text" name="precio" id="precio" placeholder="Precio (€)" required>
            </div>
            <div class="col">
                <label class="mb-2" for="familia">Familia</label>

                <select class="form-select mb-2" name="familia" id="familia" required>
                    <?php
                        foreach ($registros as $row) {
                            echo'
                                <option value="'.$row["cod"].'"> '.$row["nombre"].' </option>
                            ';
                        }
                    ?>
                </select>

            </div>
        </div>
        <label class="mb-2" for="descripcion">Descripción</label>
        <textarea class="form-control mb-2" name="descripcion" id="descripcion"></textarea>

        <input class="btn btn-primary me-2 mt-2" type="submit" value="Crear">

        <input class="btn btn-success me-2 mt-2" type="reset" value="Limpiar">
        <a class="btn btn-secondary me-2 mt-2" href="listado.php">Volver</a>
    </form>
</div>

<?php
    require_once "inc/footer.php";
?>