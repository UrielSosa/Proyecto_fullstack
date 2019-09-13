<?php
  include_once("php/funciones.php");
  /**
  * @author <<---- Camila--Uriel--Tomas--Matias ---->>
  */
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <title>Preguntas frecuentes</title>
      <?php include_once "head.php" ?>
    </head>
    <body>
      <!-- incluimos la barra de navegacion -->
      <?php include_once "vistas/header.php";?>

      <h2 class="text-center text-white">Preguntas Frecuentes</h2>
      <div class="container-fluid form-inline ">
        <br>
        <div class="dropdown">
          <button class="btn btn-info dropdown-toggle mt-4 pr-5 pl-5" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Medios de pago
            <samp class="caret"></samp>
          </button>
          <ul class="dropdown-content mio ml-2" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="item" href="#">¿Qué tipos de tarjetas aceptan?</a></li>
            <li role="presentation"><a role="item" href="#">¿Sólo utilizan tarjetas?</a></li>
            <li role="presentation"><a role="item" href="#">¿Utilizan crédito/débito?</a></li>
            <li role="presentation"><a role="item" href="#">¿Utilizan otros medios de pago?</a></li>
          </ul>
        </div>
        <br>
        <div class="dropdown ">
          <button class="btn btn-info dropdown-toggle mt-4 pr-5 pl-5" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Entregas
            <samp class="caret"></samp>
          </button>
          <ul class="dropdown-content mio " aria-labelledby="dropdownMenu2">
            <li role="presentation"><a role="item" href="#">¿Hacen envios a todo el pais?</a></li>
            <li role="presentation"><a role="item" href="#">¿Cuánto tiempo tardan en llegar los envios?</a></li>
            <li role="presentation"><a role="item" href="#">¿Qué sucede si no llega mi compra?</a></li>
            <li role="presentation"><a role="item" href="#">¿Puedo ir a retirar yo el producto?</a></li>
          </ul>
        </div>
        <br>
        <div class="dropdown">
          <button class="btn btn-info dropdown-toggle mt-4 pr-5 pl-5" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Proveedores
            <samp class="caret"></samp>
          </button>
          <ul class="dropdown-content mio " aria-labelledby="dropdownMenu3">
            <li role="presentation"><a role="item" href="#">¿Qué tipos de Proveedores poseen? </a></li>
            <li role="presentation"><a role="item" href="#">¿Son legítimos? </a></li>
            <li role="presentation"><a role="item" href="#">¿Cuáles son  los compromisos a cumplir con los proveedores?</a></li>
          </ul>
        </div>
      </div>
      <?php include_once "vistas/footer.php";?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
    </body>
  </html>
