<?php

  class ValidadorRegistro {
      private $nombre;
      private $email;

      private $error_nombre;
      private $error_email;
      private $error_clave1;
      private $error_clave2;

      public function __construct($nombre, $email, $clave1, $clave2){
        $this -> nombre = "";
        $this -> email = "";

        $this -> error_nombre = $this -> validar_nombre($nombre);//si no existe error en el nombre
        $this -> error_email = $this -> validar_email($email);//si no existe error en el nombre
        $this -> error_clave1 = $this -> validar_clave1($clave1);
        $this -> error_clave2 = $this -> validar_clave2($clave1, $clave2);

      }

      private function variable_iniciada($variable){
        if (iseet($variable) && !empty($variable)) { //valido si esta iniciada y si no esta vacia retorno verdadero sino falso
          return true;
        } else {
          return false;
        }
      }

      private function validar_nombre($nombre){
        if (!$this -> variable_iniciada($nombre)) { // valido ahora si no esta iniciada y si esta vacia
          return "Por favor, debes ingresar los valores correspondientes a este campo";
        } else {
          $this -> nombre = $nombre;
        }
        if (strlen($nombre)< 6) {
          return "El nombre de Usuario es muy corto debe contener más de 6 Carácteres";
        }
        if (strlen($nombre) > 20){
          return "El nombre de Usuario es muy largo debe contener mínimo 20 Carácteres";
        }
        return "";
      }

      private function validar_email($email){
        if (!$this -> variable_iniciada($email)) { // valido ahora si no esta iniciada y si esta vacia
          return "Por favor, debes ingresar los valores correspondientes a este campo";
        } else {
          $this -> email = $email;
        }
        return "";
      }

      private function validar_clave1($clave1){
        if (!$this -> variable_iniciada($clave1)) { // valido ahora si no esta iniciada y si esta vacia
          return "Por favor, debes ingresar los valores correspondientes a este campo";
        }
        return "";
      }

      private function validar_clave2($clave1, $clave2){
        if (!$this -> variable_iniciada($clave1)) {
          return "Debes Llenar el campo Ingrese Contraseña";
        }
        if (!$this -> variable_iniciada($clave2)) { // valido ahora si no esta iniciada y si esta vacia
          return "Por favor, debes ingresar los valores correspondientes a este campo";
        }
        if ($clave1 !== $clave2) {
          return "Las contraseñas no coinciden";
        }
        return "";
      }

      public function obtener_nombre(){
        return $this -> nombre;
      }
      public function obtener_email(){
        return $this -> nombre;
      }
      public function obtner_error_nombre(){
        return $this -> error_nombre;
      }
      public function obtner_error_email(){
        return $this -> error_email;
      }
      public function obtner_error_clave1(){
        return $this -> error_clave1;
      }
      public function obtner_error_clave2(){
        return $this -> error_clave2;
      }
    }
?>
