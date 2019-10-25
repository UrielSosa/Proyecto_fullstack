<?php


class Validador {

  //validacion de datos del registro
  public function validarRegistro($datos,$imagen){
    $errores = [];
    $nombre = trim($datos['nombre']);
    $apellido = trim($datos['apellido']);
    $email = trim($datos['email']);
    $password = trim($datos['password']);
    $repassword = trim($datos['repassword']);
    $telefono = trim($datos['telefono']);
    $pais = trim($datos['pais']);
    $sexo = trim($datos['sexo']);
    $avatar = trim($datos['avatar']);



    // dd($datos);

    if(empty($nombre )){
      $errores['nombre']="El campo nombre no puede estar en blanco";
    }
    if(empty($apellido )){
      $errores['apellido']="El campo apellido no puede estar en blanco";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errores['email']="Email inválido";
    }
    if(empty($password)){
      $errores['password']="La contraseña no puede estar en blanco";
    }elseif (strlen($password)<6) {
      $errores['password']="La contraseña como mínimo debe tener 6 caracteres";
    }
    if($password != $repassword){
      $errores['repassword']="Las contraseñas deben ser iguales";
    }
    if(empty($telefono)){
      $errores['telefono']="El campo celular no puede estar en blanco";
    }
    if(isset($_FILES)){
      $nombre = $imagen['avatar']['name'];
      $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($imagen['avatar']['error']==4){
          $errores['avatar']=" Ingresa tu foto";
        }elseif ($ext != "jpg" && $ext != "png") {
          $errores['avatar']="Formato inválido";
        }
    }
    return $errores;
  }

  //Validacion de login
  public function validarLogin($email, $password){
    $paso = 0;
    $datosArray = abrirBaseDatos();
    // dd($json);
        foreach ($datosArray as $clave => $arrayUsuario) {

            if ($arrayUsuario["email"] === $email) {
              $paso++;
            }

            if ($arrayUsuario["password"] === $password){
              $paso++;
            }
        }
    return $paso;
  }
}


 ?>
