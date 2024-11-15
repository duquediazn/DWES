<?php
// Configuración para mostrar errores (en desarrollo)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['usu'])) {
  header('Location:login.php');
  die();
}
require './include/Producto.php';
require './include/Votos.php';

$productos = new Producto();
$aProductos = $productos->listadoProductos();

$votos = new Votos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Productos</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/votar.js"></script>
</head>

<body style="background:#00bfa5;">
  <div class="float float-right d-inline-flex mt-2">


    <i class="fas fa-user mr-3 fa-2x"></i>
    <input type="text" size='10px' value="<?php echo $_SESSION['usu']; ?>" class="form-control
    mr-2 bg-transparent text-white font-weight-bold" disabled>
    <a href="cerrar.php" class="btn btn-warning mr-2">Salir</a>
  </div>
  <br>
  <h4 class="container text-center mt-4 font-weight-bold">Productos onLine</h4>

  <?php if(isset($_SESSION["mensaje"])) { ?>
    <div class="alert alert-warning container container-md mb-2">
      <?php
        echo $_SESSION["mensaje"];
        unset($_SESSION["mensaje"]);
      ?>
    </div>
  <?php } ?>

  <div class="container mt-3">
    <table class="table table-striped table-dark">
      <thead>
        <tr class='text-center'>
          <th scope="col">Código</th>
          <th scope="col">Nombre</th>
          <th scope="col">Valoración</th>
          <th scope="col">Valorar</th>
        </tr>
      </thead>
      <tbody>
      <?php
        foreach ($aProductos as $producto) {
          $idProducto = $producto->id;
          $nombreProducto = $producto->nombre;
          $estrellasData = $votos->pintarEstrellas($idProducto);
          $votantes = $votos->numVotos($idProducto);
        ?>
        <tr class="text-center" data-idproducto="<?php echo $idProducto; ?>">
          <th scope="row"><?php echo $idProducto; ?></th>
          <td><?php echo $nombreProducto; ?></td>
          <td class="num-votos"><?php echo $votantes ? "{$votantes} Valoraciones." : "Sin valorar"; ?>
              <span class="estrellas">
                  <?php 
                      if ($votantes) {
                          for ($i = 0; $i < $estrellasData['estrellas']; $i++) {
                              echo '<i class="fas fa-star"></i>';
                          }
                          if ($estrellasData['halfStar']) {
                              echo '<i class="fas fa-star-half-alt"></i>';
                          }
                      }
                  ?>
              </span>
          </td>
          <td>
            <form class="d-inline-flex align-items-center" id="formVotar-<?php echo $idProducto; ?>" method="POST" action="votar.php">
                <select class="form-control mr-2" name="valoracion" id="valoracion-<?php echo $idProducto; ?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="hidden" name="idProducto" value="<?php echo $idProducto; ?>">
                <button class="btn btn-info mt-1 votar-btn">Votar</button>
            </form>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</body>

</html>