<?php
  class RepositorioUsuario {

    public static function obtener_todos($conexion){

      $usuarios = array();//guardara todos los usuarios que se soliciten a la tabla

      if (isset($conexion)){

        try {

          include_once 'usuario.inc.php';

          $sql = "SELECT * FROM usuarios";//hago la consulta

          $sentencia = $conexion -> prepare($sql);//prepara el sql a prueba de errores
          $sentencia -> execute();
          $resultado = $sentencia -> fetchAll();//devuelve todos los resultados existentes

          if (count($resultado)) {//cuenta cuantos resultados devolvera

            foreach ($resultado as $fila) { //recorre el array y lo llamara $fila

              $usuarios[] = new Usuario(//recorre el indice de manera dinamica e introduce el nuevo elemento en el ultimo indice

                $fila['id'], $fila['nombre'], $fila['email'], $fila['pass'], $fila['fecha_registro'], $fila['activo']

                );

              }

          }else{
            print "No hay usuarios";
          }

        } catch (PDOException $ex) {
          print "ERROR: " . $ex -> getMessage() . "<br>"; //muestro el error
        }

      }
      return $usuarios;
    }
    public static function obtener_numero_usuarios($conexion){
       $total_usuarios = null;
       if (isset($conexion)) {
         try {

            $sql = "SELECT COUNT(*) as total FROM usuarios";
            $sentencia = $conexion -> prepare ($sql);//evita inyecciones mal intencionadas sql
            $sentencia -> execute();
            $resultado = $sentencia -> fetch();//solo se trae el dato que se le esta pidiendo

          $total_usuarios = $resultado['total'];
         } catch (PDOException $ex) {
           print "ERROR: " . $ex -> getMessage() . "<br>";
         }
       }
       return $total_usuarios;
    }
  }
 ?>
