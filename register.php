<?php
  include_once("php/funciones.php");
  /**
  * @author <<---- Camila--Uriel--Tomas--Matias ---->>
  */
  $errores = [];
  if ($_POST) {
    $errores = validar($_POST);
    // if (count($errores) == 0) {
    //     $usuario = armarUsuario($_POST);
    //     guardarUsuario($usuario);
    //    header(".php");
    //   exit;
    // }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Register</title>
    <?php include_once "head.php" ?>
  </head>
  <body>
    <!-- incluimos barra de navegacion -->
    <?php include_once "vistas/header.php";?>

    <div class="container mt-5" id="Register">
      <form action="" method="POST">
        <div class="form-row">
          <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-m-12">
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="nombre">
          </div>
          <div class="form-group col-l-12 col-sm-6 col-lg-5 ml-sm-0 ml-lg-5">
            <label for="Apellido">Apellido</label>
            <input type="text" class="form-control" id="Apellido" placeholder="Apellido" name="apellido">
          </div>
          <div class="form-group col-sm-4 col-lg-3  ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Email" name="email">
          </div>
          <div class="form-group col-sm-4 col-lg-3 ml-sm-0 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
            <label for="Contraseña">Contraseña</label>
            <input type="password" class="form-control" id="Contraseña" placeholder="Contraseña" name="password">
          </div>
          <div class="form-group col-sm-4 col-lg-3 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
            <label for="Confirmar Contraseña">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="Confirmar Contraseña" placeholder="Repetir Contraseña" name="repassword">
          </div>
          <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
            <label for="Numero1">Numero de celular</label>
            <input type="text" class="form-control" id="Numero1" placeholder="+11-123456789" name="celular">
          </div>
          <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
            <label for="Numero2">Numero de linea</label>
            <input type="text" class="form-control" id="Numero2" placeholder="0800-888-000">
          </div>
          <div class="form-group ml-sm-1 ml-lg-5 col-sm-12 col-lg-3">
            <label for="lugar">¿De donde eres?</label>
            <select class="form-control" name="ciudad">
              <option >Argentina</option>
              <option>Brasil</option>
              <option>Colombia</option>
              <option>Chile</option>
            </select>
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-sm-12 ml-lg-5 col-sm-4 col-lg-3 mr-5"><p>¿Fecha de nacimiento?</p>
        <input type="date" class="form-control" name="nacimiento" step="1" min="1980-01-01" max="2019-12-31" value="">
        </div>
        </div>
        <div class="form-check form-check-inline ml-sm-0 ml-lg-5">
          <input class="form-check-input" type="radio" name="sexo" id="G-mujer" value="F">
          <label class="form-check-label" for="mujer">Mujer</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sexo" id="G-hombre" value="M">
          <label class="form-check-label" for="Hombre">Hombre</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sexo" id="G-otro" value="O">
          <label class="form-check-label" for="Otro">Otro</label>
        </div>
        <br><br>
        <center>
        <button type="submit" class="btn btn-info" name="button"> Registrate</button>

      </div>
      <?php foreach ($errores as $key => $error): ?>
        <div class="alert alert-danger" role="alert">
          <strong>Oh no!!</strong><?= $errores[$key] ?? '' ?>
        </div>
      <?php endforeach; ?>
      </form>
    </div>

    <?php include_once "vistas/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
