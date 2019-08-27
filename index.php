<?php
  include_once("php/base-de-datos.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- LINKS -->
    <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <header class="container-fluid u_bg-azul">
      <div class="navbar">
        <div class="u_logo ml-0">
          <img src="img/logo.png" alt="Logo de hotwheels">
        </div>
        <nav class="nav mr-0">
          <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">Contact</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">Nosotros</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- -MENU DE NAVEGACION- -->
    <!-- <div class="container-fluid bg_negro fijo">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand m-0 text-white bg_azul font" href="#"><b> <h1> HOT WHEELS </h1></b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse d-flex justify-content-end font" id="navbarTogglerDemo02">
          <ul class="navbar-nav m-0 mt-2 mt-lg-0">
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b> Login </b> <span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b> About </b><span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b>Services</b>  <span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b> Contact </b>  <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
      </nav>
    </div>
    <header id="header">
      <div class="container-fluid bg_negro fijo">
        <div id="logo" class="pull-left">
          <a class="navbar-brand m-0 text-white bg_azul font" href="#"><b> <h1> HOT WHEELS </h1></b></a>
        </div>

        <nav class="collapse navbar-collapse d-flex justify-content-end font" id="navbarTogglerDemo02">
          <ul class="navbar-nav m-0 mt-2 mt-lg-0">
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b> Login </b> <span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b> About </b><span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b>Services</b>  <span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link text-white bg_azul font" href="#"> <b> Contact </b>  <span class="sr-only">(current)</span></a></li>
            <li class="buy-tickets">Login<a href="#buy-tickets"></a></li>
          </ul>
        </nav>
      </div>
    </header>
  <!-- main de a pagina -->
    <!-- <main class="container fluid bg-dark">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php// foreach ($autos as $clave => $valor):?>
              <li data-target="#carouselExampleCaptions" data-slide-to="<?=$clave ?>" class="<?=$valor[acti] ?>"></li>
            <?php //endforeach?>
          </ol>
          <div class="carousel-inner">
            <?php //foreach ($autos as $clave => $valor) :?>
              <div class="carousel-item <?//=$valor["acti"] ?>">
                <img src="img/<?//=$valor["imagen"]?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" id="fondo">
                  <h5><?//=$valor["descripcion"]?></h5>
                  <p><?//=$valor["precio"] ?></p>
                </div>
              </div>
            <?php// endforeach ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </main>
    <?php// footer();?>
  --><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
