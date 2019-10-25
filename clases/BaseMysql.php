<?php
Class BaseMYSQL extends BaseDeDatos{

  static public function  conexion($host, $db_name, $usuario, $password, $puerto){
      try{
        $dsn = 'mysql:host='.$host.';'.'dbname='.$db_name.';'.'port='.$puerto;
        $database = new PDO($dsn, $usuario, $password);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ?><script> alert("se realizó la conexión correctamente")</script><?php
        return $database;
      }
      catch ( PDOException $Exception) {
        ?><script> alert("La conexión falló")</script><?php
        echo $Exception->getMessage();
      }
  }
      static public function buscarPorEmail($email, $pdo){
          $consulta = "SELECT email FROM usuarios WHERE email LIKE '$email'";
          $usuario = $pdo->prepare($consulta);
          $usuario->execute();
          $usuarioEncontrado = $usuario->fetchAll(PDO::FETCH_ASSOC);

          return $usuarioEncontrado;
      }

      static public function guardarUsuario(Usuario $usuario, $pdo){
        try {
          $consulta = "INSERT INTO usuarios VALUES(default, :nombre, :apellido, :email, :contra, :telefono, :sexo, :pais, :avatar, default)";
          $usuario = $pdo->prepare($consulta);
          $usuario->bindValue(':nombre', $usuario->getNombre());
          $usuario->bindValue(':apellido', $usuario->getApellido());
          $usuario->bindValue(':email', $usuario->getEmail());
          $usuario->bindValue(':contra', $usuario->getContra());
          $usuario->bindValue(':telefono', $usuario->getTelefono());
          $usuario->bindValue(':sexo', $usuario->getSexo());
          $usuario->bindValue(':pais', $usuario->getPais());
          $usuario->bindValue(':avatar', $usuario->getAvatar());
          $usuario->execute();
          echo "Se insertó el usuario";
        } catch (\Exception $e) {
          echo $e->getMessage();
        }

      }

      public function leer(){

      }

}


 ?>
