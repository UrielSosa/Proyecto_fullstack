<?php
  include_once("controladores/funciones.php");
  /**
  * @author <<---- Camila--Uriel--Tomas--Matias ---->>
  */
  $errores = [];
  if ($_POST) {
    $errores = validar($_POST,$_FILES);
   if(count($errores)==0){
     $avatar = armarAvatar($_FILES);
     $registro = armarRegistro($_POST,$avatar);
     guardarRegistro($registro);

     //De n o excistir errores en la información tipeada por el usuario entonces lo redirecciono a donde yo desee.
     header("location:login.php");
   }
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
    <?php include_once "partials/header.php";?>

    <div class="container mt-5" id="Register">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-m-12">
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="nombre" value="<?=isset($errores['nombre'])? "":old('nombre');?>">
          </div>
          <div class="form-group col-l-12 col-sm-6 col-lg-5 ml-sm-0 ml-lg-5">
            <label for="Apellido">Apellido</label>
            <input type="text" class="form-control" id="Apellido" placeholder="Apellido" name="apellido" value="<?=isset($errores['apellido'])? "":old('apellido');?>">
          </div>
          <div class="form-group col-sm-4 col-lg-3  ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Email" name="email" value="<?=isset($errores['email'])? "":old('email');?>">
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
            <input type="text" class="form-control" id="Numero1" placeholder="+11-123456789" name="celular" value="<?=isset($errores['celular'])? "":old('celular');?>">
          </div>
          <div class="form-group ml-sm-1 ml-lg-5 col-sm-12 col-lg-3">
            <label for="lugar">¿De donde eres?</label>
            <select class="form-control" name="ciudad" value="<?=isset($errores['ciudad'])? "":old('ciudad');?>">
              <option >Argentina</option>
              <option>Brasil</option>
              <option>Colombia</option>
              <option>Chile</option>
            </select>
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-sm-12 ml-lg-5 col-sm-4 col-lg-3 mr-5"><p>¿Fecha de nacimiento?</p>
        <input type="date" class="form-control" name="nacimiento" step="1" min="1980-01-01" max="2019-12-31" value="<?=isset($errores['nacimiento'])? "":old('nacimiento');?>">
        </div>
        </div>
        <div class="form-group ml-sm-1 ml-lg-5 col-sm-12 col-lg-3 pl-0">
          <label for="lugar">Sexo</label>
          <select class="form-control" name="sexo" value="<?=isset($errores['sexo'])? "":old('sexo');?>">
            <option >Mujer</option>
            <option>Hombre</option>
            <option>Otro</option>
          </select>
        </div>
        <div class="form-group col-sm-6 col-lg-5 ml-sm-0 ml-lg-5 col-xs-3 ml-xs-0 mt-3 pl-0">
          <label for="avatar"> Ingresar foto </label>
          <input name="avatar" type="file" class="form-control" id="avatar" value="<?=isset($errores['avatar'])? "":old('avatar');?>">
        </div>
        <br><br>
        <center>
        <button type="submit" class="btn btn-info" name="button"> Registrate</button>

      </div>
      <?php if($errores):
         foreach ($errores as $key => $error): ?>
        <div class="alert alert-danger" role="alert">
          <?= $errores[$key] ?? '' ?>
        </div>
      <?php endforeach;
    endif;?>
      </form>
    </div>

    <?php include_once "partials/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
