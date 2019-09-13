<?php
  include_once "controladores/funciones.php";
  /**
  * @author <<---- Camila--Uriel--Tomas--Matias ---->>
  */
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>Home</title>
    <?php include_once "head.php" ?>
  </head>
  <body>
    <!-- incluimos la barra de navegacion -->
    <?php include_once "vistas/header.php";?>

    <!-- Inicio del main -->
    <main class="baner-fluid u_pos-a">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php foreach ($autos as $clave => $valor):?>
              <li data-target="#carouselExampleCaptions" data-slide-to="<?=$clave ?>" class="<?=$valor["acti"] ?>"></li>
            <?php endforeach?>
          </ol>
          <div class="carousel-inner">
            <?php foreach ($autos as $clave => $valor) :?>
              <div class="carousel-item <?=$valor["acti"] ?>">
                <img src="img/carousel/<?=$valor["imagen"]?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" id="fondo">
                  <h5><?=$valor["descripcion"]?></h5>
                  <p><?=$valor["precio"] ?></p>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- incluimos articulos -->
      <?php include_once "vistas/articulos.php";?>
</main>

  <!-- footer -->
    <?php include_once "vistas/footer.php";?>
  <!-- Fin del footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
