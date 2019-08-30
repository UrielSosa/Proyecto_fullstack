<?php
  include_once("php/base-de-datos.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <!-- LINKS -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon.ico">
    <script src="https://kit.fontawesome.com/7bcccd3ed9.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Preguntas frecuentes</title>
  </head>
  <body>
    <?php nav() ?>
    <h2 class="text-center text-white">Preguntas Frecuentes</h2>
    <div class="container">
      <br>
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Medios de pago
          <samp class="caret"></samp>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
        </ul>
      </div>
      <br>
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Envios/Entregas
          <samp class="caret"></samp>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
        </ul>
      </div>
      <br>
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Proveedores
          <samp class="caret"></samp>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
          <li role="presentation"><a role="item" href="#">items </a></li>
        </ul>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </body>
</html>
