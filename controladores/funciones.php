<?php
function isEmail($email){
  return filter_var($email,FILTER_VALIDATE_EMAIL);
}

function hashed($pass){
  return password_hash($pass, PASSWORD_DEFAULT);
}

function validar($datos){
  $errores = [];
  if ($datos) {
    if (strlen($datos["nombre"])==="") {
      $errores['nombre'] = "El campo nombre se encuentra vacio";
    }
    if (strlen($datos["apellido"])==="") {
      $errores['apellido'] = "El campo apellido se encuentra vacio";
    }
    if (!isEmail($datos['email'])) {
      $errores['email'] = "El email tiene un formato incorrecto";
    }
    if (strlen($datos["password"])<=6) {
      $errores['password'] ="La contraseña tiene menos de 6 caracteres";
    }
    if ($datos["password"] != $datos["repassword"]) {
      $errores['repassword'] = "Las contraseñas no coinciden";
    }
  }
  return $errores;
}

function armarUsuario($datos){
  $passwordhash = hashed($datos['password']);
  $usuario = [
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "email" => $datos["email"],
    "password" => $passwordhash,
    "sexo" => $datos["sexo"],
  ];
  return $usuario;
}
function guardarUsuario($usuario){
  $json = json_encode($usuario);
  file_put_contents("usuarios.json",$json.PHP_EOL, FILE_APPEND);
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
