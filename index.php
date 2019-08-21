<?php
  include_once("php/base-de-datos.php");
?>
<!DOCTYPE html>
<html>
<head>
  <!-- ------ ICONOS --------- -->
    <script src="https://kit.fontawesome.com/7acc8f5de1.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="utf-8">
    <!------------ GOOGLE FONTS --------->
    <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
  <title>  E-Commers </title>
  <link rel="stylesheet" href="css/master.css">
  <!-- ------- CSS DE BOOTSTRAP ---------- -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	   <!-- -------MENU DE NAVEGACION------ -->
     <div class="container-fluid bg_negro fijo">

        <nav class="navbar navbar-expand-lg navbar-light bg_negro">
        <a class="navbar-brand m-0 text-white bg_azul font" href="#"><b> <h1> HOT WHEELS </h1></b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-end font" id="navbarTogglerDemo02">
          <ul class="navbar-nav m-0 mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-white bg_azul font" href="#"> <b> Login </b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white bg_azul font" href="#"> <b> About </b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white bg_azul font" href="#"> <b>Services</b>  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white bg_azul font" href="#"> <b> Contact </b>  <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        </nav>
     </div>

     <!--  CAROUSEL -->
       <main class="container fluid bg-dark position">
         <div class="bd-example">
           <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
               <?php foreach ($autos as $clave => $valor):?>
               <li data-target="#carouselExampleCaptions" data-slide-to="<?=$clave ?>" class="<?=$valor[acti] ?>"></li>
               <?php endforeach?>
             </ol>
           <div class="carousel-inner">
           <?php foreach ($autos as $clave => $valor) :?>
             <div class="carousel-item <?=$valor[acti] ?>">
               <img src="img/<?=$valor["imagen"]?>" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                 <h5><?=$valor["descripcion"]?></h5>
                 <p><?=$valor["precio"] ?></p>
               </div>
             </div>
           <?php endforeach ?>
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
     <!-- Fin del carousel -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- ---------CAJA2---------- -->


</body>
</html>
