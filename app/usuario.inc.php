<?php
  //private significa que ningun archivo externo puede ingresar a la informacion donde se este indicanndo
  class Usuario {

    private $id;
    private $nombre;
    private $email;
    private $pass;
    private $fecha_registro;
    private $activo;

    public function __construct($id, $nombre, $email, $pass, $fecha_registro, $activo){
      //this -> id = $id (indica que lo que esta en la class usuario lo va a tener el __construct)
      $this -> id = $id;
      $this -> nombre = $nombre;
      $this -> email = $email;
      $this -> pass = $pass;
      $this -> fecha_registro = $fecha_registro;
      $this -> activo = $activo;
    }

    //los getters sirven para leer lo que esta en las variables del constructor
    public function obtenerId() {
      return $this -> id;
    }
    public function obtenerNombre(){
      return $this -> nombre;
    }
    public function obtenerEmail(){
      return $this -> email;
    }
    public function obtenerPass(){
      return $this -> pass;
    }
    public function obtenerFechaRegistro(){
      return $this -> fecha_registro;
    }
    public function esta_activo(){
      return $this -> activo;
    }

    //metodo setter para modificar ciertos valores, nombre de usuario o email
    public function cambiar_nombre($nombre){
      $this -> nombre = $nombre;
    }
    public function cambiar_email($email){
      $this -> email = $email;
    }
    public function cambiar_pass($pass){
      $this -> pass = $pass;
    }
    public function  cambiar_activo($activo){
      $this -> activo = $activo;
    }

  }

?>
