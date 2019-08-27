<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- LINKS -->
    <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
	    <div class="d-flex justify-content-center h-100">
		    <div class="card">
			    <div class="card-header">
				    <h3>Iniciar Sesión</h3>
				      <div class="d-flex justify-content-end social_icon">
					      <span><i class="fab fa-facebook-square"></i></span>
					      <span><i class="fab fa-google-plus-square"></i></span>
				        <span><i class="fab fa-twitter-square"></i></span>
				      </div>
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
				<div class="d-flex justify-content-center links">¿No estas registrado aun?<a href="register.php">Registrate Ahora</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">¿Olvidaste tu Contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>
  </body>
</html>