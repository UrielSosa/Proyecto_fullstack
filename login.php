<?php
  include_once "php/funciones.php";
  /**
  * @author <<---- Camila--Uriel--Tomas--Matias ---->>
  */
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>Iniciar sesión </title>
    <?php include_once "head.php" ?>
  </head>
  <body>
    <!-- incluimos la barra de navegacion -->
    <?php include_once "vistas/header.php";?>

    <div class="container">
	    <div class="d-flex justify-content-center h-100 mt-5">
		    <div class="card login">
			    <div class="card-header">
				    <h3 class="d-flex justify-content-start">Iniciar Sesión</h3>
			    </div>
			    <div class="card-body">
				    <form>
					    <div class="input-group form-group">
						    <div class="input-group-prepend">
							    <span class="input-group-text"><i class="fas fa-user"></i></span>
						    </div>
						    <input type="text" class="form-control" placeholder="Nombre o Email">
					    </div>
					    <div class="input-group form-group">
						    <div class="input-group-prepend">
							    <span class="input-group-text"><i class="fas fa-key"></i></span>
						    </div>
						      <input type="password" class="form-control" placeholder="Contraseña">
					    </div>
					    <div class="row align-items-center remember">
						    <input type="checkbox">Remember Me
					    </div>
					    <div class="form-group">
						    <input type="submit" value="Login" class="btn float-right login_btn">
					    </div>
				  </form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">¿No estas registrado aun?<a href="register.php">Registrate Ahora</a></div>
				<div class="d-flex justify-content-center">
					<a href="#">¿Olvidaste tu Contraseña?</a>
>>>>>>> feature
				</div>
			</div>
		</div>
	</div>
</div>
<<<<<<< HEAD
=======

<?php include_once "vistas/footer.php";?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
