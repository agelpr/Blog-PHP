<?php
  class Conexion {
    //objeto es la variable $conexion
    private static $conexion;

    public static function abrir_conexion() {
      if (!isset(self::$conexion)) {
          try {
            include_once 'config.inc.php';
            self::$conexion = new PDO('mysql:host='.$nombre_servidor.'; dbname='.$nombre_base_datos, $nombre_usuario, $password);//llamo a los valores del servidor y ejecuto la conexion
            self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//muestra errores de haberlos
            self::$conexion -> exec("SET CHARACTER SET utf8");//indico a la bd que use caracteres especiales
          } catch (PDOException $ex) {
            print "ERROR: " . $ex -> getMessage() . "<br>"; //muestro el error
            die();//cierra la conexion
          }
      }
    }
    public static function cerrar_conexion(){
      if (isset(self::$conexion)) {
        self::$conexion = null; //destruyo la conexion
        }
    }
    public static function obtener_conexion(){
      return self::$conexion;//obtengo la conexion desde archivos exteriores
    }
  }
?>
