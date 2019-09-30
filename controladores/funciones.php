<?php
session_start();
// Validacion de e-mail
function isEmail($email){
  return filter_var($email,FILTER_VALIDATE_EMAIL);
}

//Haseado de contraseña
function hashed($pass){
  return password_hash($pass, PASSWORD_DEFAULT);
}


//validacion de datos del registro
function validar($datos,$imagen){
  $errores = [];
  $nombre = trim($datos['nombre']);
  $apellido = trim($datos['apellido']);
  $email = trim($datos['email']);
  $password = trim($datos['password']);
  $repassword = trim($datos['repassword']);
  $celular = trim($datos['celular']);
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
  if(empty($celular)){
    $errores['celular']="El campo celular no puede estar en blanco";
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

// Se guardan los datos del registro
function armarRegistro($datos,$avatar){
  $usuario = [
    'nombre' => $datos['nombre'],
    'apellido' => $datos['apellido'],
    'email' => $datos['email'],
    'password' => hashed($datos['password']),
    'celular' => $datos['celular'],
    'ciudad' => $datos['ciudad'],
    'nacimiento' => $datos['nacimiento'],
    'sexo' => $datos['sexo']
  ];
  return $usuario;
}

//Se guardan los datos del registro en JSON
function guardarRegistro($registro){
  $archivoJson = json_encode($registro);
  file_put_contents('usuarios.json',$archivoJson.PHP_EOL,FILE_APPEND);
}


// Se crea un avatar
function armarAvatar($imagen){
    $nombre = $imagen['avatar']['name'];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen['avatar']['tmp_name'];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."/img/perfil/";
    $avatar = uniqid();
    $archivoDestino = $archivoDestino.$avatar.".".$ext;
    //Aquí estoy copiando al servidor nuestro archivo
    move_uploaded_file($archivoOrigen,$archivoDestino);
    $avatar = $avatar.".".$ext;
    return $avatar;
}


//------------------------ PERSISTENCIA DE DATOS ----------------
function dd($dato){
    echo "<pre>";
        var_dump($dato);
        exit;
    echo "</pre>";
}
function old($dato){
    if(isset($_POST[$dato])){
        return $_POST[$dato];
    }
}

// ------------VALIDAR LOGIN-----------

function validarLogin($email, $password){
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

// Recordar usuario al iniciar sesion
function inicioSesion($usuario, $dato){
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["apellido"] = $usuario["apellido"];
  $_SESSION["email"] = $usuario["email"];
  if(isset($dato["recordarme"])){
        setcookie("email",$dato["email"],time()+3600);
        setcookie("password",$dato["password"],time()+3600);
    }
}


function buscarPorEmail($email){
  $baseDeDatos = abrirBaseDatos();
  foreach ($baseDeDatos as $numero => $usuario) {

    if ($email === $usuario["email"]) {
      return $usuario;
    }
  }
  return null;
}

//Abrir base de datos (JSON) y devuelve array
function abrirBaseDatos(){
    if(file_exists("usuarios.json")){
        $baseDatosJson= file_get_contents("usuarios.json");
        $baseDatosJson = explode(PHP_EOL,$baseDatosJson);
        array_pop($baseDatosJson);
        foreach ($baseDatosJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }
        return $arrayUsuarios;
    }
}

/* base de datos de autos*/
$autos = [
          0=>["acti"=>"active",
              "imagen"=>"Hennessey-venom-gt-spyder.jpg",
              "descripcion"=>"Hennessey Venom GT",
              "precio"=>"US$ 1.100.000"],
          1=>["acti"=>"",
              "imagen"=>"Pagani-Huayra.jpg",
              "descripcion"=>"Pagani Huayra",
              "precio"=>"US$ 1.300.000"],
          2=>["acti"=>"",
              "imagen"=>"McLaren-P1.jpg",
              "descripcion"=>"McLaren P1",
              "precio"=>"US$ 1.350.000"],
          3=>["acti"=>"",
              "imagen"=>"Koenigsegg-Agera-R.jpg",
              "descripcion"=>"Koenigsegg Agera R",
              "precio"=>"1.600.000"],
          4=>["acti"=>"",
              "imagen"=>"Zenvo-ST1.jpg",
              "descripcion"=>"Zenvo ST1",
              "precio"=>"US$ 1.225.000"],
          5=>["acti"=>"",
              "imagen"=>"Pagani-Zonda-Cinque-Roadster.jpg",
              "descripcion"=>"Pagani Zonda Cinque Roadster",
              "precio"=>"US$ 1.850.000"],
          6=>["acti"=>"",
              "imagen"=>"Aston-Martin-One-77.jpg",
              "descripcion"=>"Aston Martin One-77",
              "precio"=>"US$ 1.850.000 "],
          7=>["acti"=>"",
              "imagen"=>"Bugatti-Veyron.jpg",
              "descripcion"=>"Bugatti Veyron",
              "precio"=>"US$ 2.400.000"],
          8=>["acti"=>"",
              "imagen"=>"Lykan-Hypersport.jpg",
              "descripcion"=>"Lykan Hypersport",
              "precio"=>"US$ 3.400.000"],
          9=>["acti"=>"",
              "imagen"=>"Lamborghini-Veneno.jpg",
              "descripcion"=>"Lamborghini Veneno",
              "precio"=>"US$ 4.500.000"],
        ];
?>
