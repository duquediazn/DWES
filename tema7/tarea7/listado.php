<?php
// Inicia la sesión del usuario para acceder a sus datos
session_start();

// Si no hay un usuario autenticado en la sesión, redirige a la página de inicio de sesión y termina la ejecución
if (!isset($_SESSION['usu'])) {
  header('Location:login.php');
  die();
}

// Incluye las clases necesarias para gestionar productos y votos
require './include/Producto.php';
require './include/Votos.php';

// Crea instancias de las clases Producto y Votos para obtener datos de productos y votos
$productos = new Producto();
$aProductos = $productos->listadoProductos(); // Obtiene una lista de todos los productos

$votos = new Votos(); // Instancia para manejar las votaciones de productos
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap para estilos y estructura responsiva -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- FontAwesome para iconos de estrellas -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Productos</title>
  <!-- jQuery para manejo de DOM y AJAX, y script personalizado para manejar votaciones -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/votar.js"></script>
</head>

<body style="background:#00bfa5;">
  <!-- Barra de usuario y botón para cerrar sesión -->
  <div class="float float-right d-inline-flex mt-2">
    <i class="fas fa-user mr-3 fa-2x"></i>
    <!-- Muestra el nombre de usuario actual, tomado de la sesión -->
    <input type="text" size='10px' value="<?php echo $_SESSION['usu']; ?>" class="form-control mr-2 bg-transparent text-white font-weight-bold" disabled>
    <a href="cerrar.php" class="btn btn-warning mr-2">Salir</a>
  </div>

  <!-- Título de la página -->
  <br>
  <h4 class="container text-center mt-4 font-weight-bold">Productos onLine</h4>

  <!-- Mensaje de alerta para mostrar notificaciones de la sesión -->
  <?php if (isset($_SESSION["mensaje"])) { ?>
    <div class="alert alert-warning container container-md mb-2">
      <?php
      echo $_SESSION["mensaje"];
      unset($_SESSION["mensaje"]); // Elimina el mensaje de sesión para que no se muestre de nuevo
      ?>
    </div>
  <?php } ?>

  <!-- Tabla de productos con sus detalles y opción de votación -->
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
        // Recorre la lista de productos y genera una fila para cada uno
        foreach ($aProductos as $producto) {
          $idProducto = $producto->id;
          $nombreProducto = $producto->nombre;
          $estrellasData = $votos->pintarEstrellas($idProducto); // Obtiene el número de estrellas y media estrella si aplica
          $votantes = $votos->numVotos($idProducto); // Obtiene el número total de votos para el producto
        ?>
          <tr class="text-center" id="<?php echo $idProducto; ?>">
            <th scope="row"><?php echo $idProducto; ?></th>
            <td><?php echo $nombreProducto; ?></td>
            <td>
              <!-- Muestra el número de votos y las estrellas según la valoración promedio -->
              <p class="num-votos"><?php echo $votantes ? "{$votantes} Valoraciones." : "Sin valorar"; ?></p>
              <span class="estrellas">
                <?php
                // Muestra las estrellas completas y media estrella si la calificación no es un número entero
                if ($votantes) {
                  for ($i = 0; $i < $estrellasData['estrellas']; $i++) {
                    echo '<i class="fas fa-star"></i>'; // Estrella completa
                  }
                  if ($estrellasData['halfStar']) {
                    echo '<i class="fas fa-star-half-alt"></i>'; // Media estrella
                  }
                }
                ?>
              </span>
            </td>
            <td>
              <!-- Formulario de votación para permitir a los usuarios calificar el producto -->
              <form class="d-inline-flex align-items-center" id="formVotar-<?php echo $idProducto; ?>" method="POST" action="votar.php">
                <select class="form-control mr-2" name="valoracion" id="valoracion-<?php echo $idProducto; ?>">
                  <!-- Opciones de calificación de 1 a 5 -->
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <input type="hidden" name="idProducto" value="<?php echo $idProducto; ?>">
                <!-- Botón para enviar la votación -->
                <button class="btn btn-info mt-1 votar-btn">Votar</button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</body>

</html>
