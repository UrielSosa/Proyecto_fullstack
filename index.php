<?php
  include_once("php/base-de-datos.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- LINKS -->
    <script src="https://kit.fontawesome.com/7bcccd3ed9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Home</title>

    <style>
    /* boton de carrito */

    .icono{
      font-size: 140%;
    }
    .btn-outline-success {
         color: #fff;
         background-color: #41ccbf;
         border-color: #41ccbf;
      }

    </style>
  </head>
  <body>
    <?php nav(); ?>
    <!-- Inicio del main -->
    <main class="baner-fluid u_pos-a">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php foreach ($autos as $clave => $valor):?>
              <li data-target="#carouselExampleCaptions" data-slide-to="<?=$clave ?>" class="<?=$valor[acti] ?>"></li>
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

      <!-- articulo card -->
<div class="card-group ">
      <div class="row">
          <div class="card index col-3 col-3 mt-1 mr-1">
            <img src="img/card-m/Honda-1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Honda</h5>
              <p class="card-text"><small class="text-muted">US$ 900.200</small></p>
              <center>
              <span class="btn btn-outline-success">Añadir al carrito <i class="icono fas fa-cart-plus"></i></span>
            </div>
          </div>
          <div class="card index col-3 m-1">
            <img src="img/card-m/ComforTec-Platina.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bajaj Platina</h5>
              <p class="card-text"><small class="text-muted">US$ 1.000.000</small></p>
            <center>
            <span class="btn btn-outline-success">Añadir al carrito <i class="icono fas fa-cart-plus"></i></span>
          </div>
        </div>
        <div class="card index col-3 mt-1 ml-1">
          <img src="img/card-m/Kawasaki-Aramot-S.A.C.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kawasaki Aramot S.A.C</h5>
            <p class="card-text"><small class="text-muted">US$ 1.200.600</small></p>
            <center>
            <span class="btn btn-outline-success">Añadir al carrito <i class="icono fas fa-cart-plus"></i></span>
          </div>
        </div>
        <div class="card index col-3 col-3 mt-1 mr-1">
          <img src="img/card-m/Sengsis.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sengsis</h5>
            <p class="card-text"><small class="text-muted">US$ 850.000</small></p>
            <center>
            <span class="btn btn-outline-success">Añadir al carrito <i class="icono fas fa-cart-plus"></i></span>
          </div>
        </div>
        <div class="card index col-3 m-1">
          <img src="img/card-m/Triax-150.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Triax</h5>
            <p class="card-text"><small class="text-muted">US$ 920.010</small></p>
              <center>
          <span class="btn btn-outline-success">Añadir al carrito <i class="icono fas fa-cart-plus"></i></span>
        </div>
      </div>
      <div class="card index col-3 mt-1 ml-1">
        <img src="img/card-m/TRconoweb.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">TRconoweb</h5>
          <p class="card-text"><small class="text-muted">US$ 700.600</small></p>
            <center>
          <span class="btn btn-outline-success">Añadir al carrito <i class="icono fas fa-cart-plus"></i></span>
        </div>
      </div>
      </div>
  </div>
    <!-- footer -->
    <?php
      footer();
     ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
