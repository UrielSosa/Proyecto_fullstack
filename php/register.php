<?php
include('php/base-de-datos.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>register</title>
  </head>
  <body>
    <?php nav() ?>
    <br>
    <h3 id="register">Register (no funcional)</h3>
    <br>
    <br>

    <div class="container">
  <form>
      <div class="form-row">
        <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-m-12">
          <label for="Nombre">Nombre</label>
          <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
        </div>
        <div class="form-group col-l-12 col-sm-6 col-lg-5 ml-sm-0 ml-lg-5">
          <label for="Apellido">Apellido</label>
          <input type="text" class="form-control" id="Apellido" placeholder="Apellido">
        </div>
        <div class="form-group col-sm-4 col-lg-3  ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
          <label for="Email">Email</label>
          <input type="email" class="form-control" id="Email" placeholder="Email">
        </div>
        <div class="form-group col-sm-4 col-lg-3 ml-sm-0 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
          <label for="Contraseña">Contraseña</label>
          <input type="password" class="form-control" id="Contraseña" placeholder="Contraseña">
        </div>
        <div class="form-group col-sm-4 col-lg-3 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
          <label for="Confirmar Contraseña">Confirmar Contraseña</label>
          <input type="password" class="form-control" id="Confirmar Contraseña" placeholder="Repetir Contraseña">
        </div>
      <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
        <label for="Numero1">Numero de celular</label>
        <input type="text" class="form-control" id="Numero1" placeholder="+11-123456789">
      </div>
      <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
        <label for="Numero2">Numero de linea</label>
        <input type="text" class="form-control" id="Numero2" placeholder="0800-888-000">
      </div>
      <div class="form-group ml-5">
        <label for="exampleFormControlSelect1">¿De donde eres?</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Argentina</option>
          <option>Brasil</option>
          <option>Colombia</option>
          <option>Chile</option>
      </select>
      </div>
    </div>
    <div class="form-check form-check-inline ml-sm-0 ml-lg-5">
      <input class="form-check-input" type="radio" name="genero" id="G-mujer" value="Mujer">
      <label class="form-check-label" for="mujer">Mujer</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="genero" id="G-hombre" value="Hombre">
    <label class="form-check-label" for="Hombre">Hombre</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="genero" id="G-otro" value="Otro">
    <label class="form-check-label" for="Otro">Otro</label>
  </div>
  <br>
  <br>
  <div class="container-fluid">
    <button type="submit" class="btn btn-primary ml-sm-0 ml-lg-5" id="boton"><i class="fas fa-file-export">  Registrate ahora</i></button>
  </div>
  </form>
</div>
<?php
footer();
 ?>


<script src="https://kit.fontawesome.com/aa6e91673c.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
