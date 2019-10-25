<?php

/**
 *
 */
class Usuario{
  private $nombre;
  private $apellido;
  private $email;
  private $contra;
  private $telefono;
  private $pais;
  private $sexo;
  private $avatar;

  function __construct($nombre, $apellido, $email, $contra, $telefono, $pais, $sexo, $avatar)
  {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
      $this->contra = $contra;
      $this->telefono = $telefono;
      $this->pais = $pais;
      $this->sexo = $sexo;
      $this->avatar = $avatar;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getContra(){
    return $this->contra;
  }

  public function setContra($contra){
    $this->contra = $contra;
  }

  public function getTelefono(){
    return $this->telefono;
  }

  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }
  public function getPais(){
    return $this->pais;
  }

  public function setPais($pais){
    $this->pais = $pais;
  }

  public function getSexo(){
    return $this->sexo;
  }

  public function setSexo($sexo){
    $this->sexo = $sexo;
  }

  public function getAvatar(){
    return $this->avatar;
  }

  public function setAvatar($avatar){
    $this->avatar = $avatar;
  }

}




 ?>
