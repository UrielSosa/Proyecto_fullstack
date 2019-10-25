<?php
  function conect(){
    $host = 'mysql:host=127.0.0.1; dbname=movies_db; port=3306';
    $user = 'root';
    $pass = '';
    $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
    try {
      $db = new PDO($host, $user, $pass, $options);?>
      <script> alert("se realizó la conexión correctamente")</script>
      <?php
      return $db;
    } catch (\Exception $e) {
      ?>
      <script> alert("La conexión falló")</script>
      <?php
    }
  }

 ?>
