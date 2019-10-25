<?php

  class ArmarRegistro
  {
    public static function armarImagen($imagen){
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

    public static function armarUsuario($datos,$avatar){
      $contraHash = password_hash($datos['password'], PASSWORD_DEFAULT);
      $usuario = new Usuario(
                              $datos['nombre'],
                              $datos['apellido'],
                              $datos['email'],
                              $contraHash,
                              $datos['telefono'],
                              $datos['pais'],
                              $datos['sexo'],
                              $datos['avatar']
                            );
      return $usuario;
    }
}
?>
