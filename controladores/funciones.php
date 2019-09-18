<?php
function isEmail($email){
  return filter_var($email,FILTER_VALIDATE_EMAIL);
}

function hashed($pass){
  return password_hash($pass, PASSWORD_DEFAULT);
}

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
    $errores['repassword']="Las contraseñas deben ser i guales";
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

function guardarRegistro($registro){
  $archivoJson = json_encode($registro);
  file_put_contents('usuarios.json',$archivoJson.PHP_EOL,FILE_APPEND);
}

function armarAvatar($imagen){
    $nombre = $imagen['avatar']['name'];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen['avatar']['tmp_name'];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."/imagenes/";
    $avatar = uniqid();
    $archivoDestino = $archivoDestino.$avatar.".".$ext;
    //Aquí estoy copiando al servidor nuestro archivo
    move_uploaded_file($archivoOrigen,$archivoDestino);
    $avatar = $avatar.".".$ext;
    return $avatar;
}

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
/* Hay que hacer mas funcional el login, validar bien la contraseña y el email*/
/*
function validarLogin($email, $password){
  $usuarios = file_get_contents("usuarios.json");
  $json = json_decode($usuarios, true);
  $paso = 0;
  dd($json);
  foreach ($json as $dato => $valor) {

      if ($valor === $email) {
        $paso++;
      }
      if (password_verify($password, $valor)){
        $paso++;
      }
  }
  return $paso;
}
*/

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
