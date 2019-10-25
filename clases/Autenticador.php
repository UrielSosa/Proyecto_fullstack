<?php

class Autenticador {
    public function inicioSesion($usuario, $dato){
      $_SESSION["nombre"] = $usuario["nombre"];
      $_SESSION["apellido"] = $usuario["apellido"];
      $_SESSION["email"] = $usuario["email"];
      $_SESSION["contra"] = $usuario["contra"];
      $_SESSION["telefono"] = $usuario["telefono"];
      $_SESSION["sexo"] = $usuario["sexo"];
      $_SESSION["pais"] = $usuario["pais"];
      $_SESSION["avatar"] = $usuario["avatar"];
      // usuario ROL define si es administrador o comprador/vendedor; a esta variable se le asigna un numero para diferenciarlos
      // $_SESSION["rol"] = $usuario["rol"];
      if(isset($dato["recordarme"])){
            setcookie("email",$dato["email"],time()+3600);
            setcookie("password",$dato["password"],time()+3600);
        }
    }

    // static function chequeoRol(){
    //   if ($_SESSION["rol"] != 7){
    //     header("Location:listadoProductos.php");
    //   }
    // }
}


 ?>
