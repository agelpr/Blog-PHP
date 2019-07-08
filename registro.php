<?php
  	include_once 'app/conexion.inc.php';//abro y cierra la conexion
  	include_once 'app/repositoriousuario.inc.php';//muestro consultas de bd
    include_once 'app/validador_registro.inc.php';

      if(isset($_POST['enviar'])){//valido los errores de los campos del formulario solo si hace click en el boton de enviar
          $validador = new ValidadorRegistro ($_POST['nombre'], $_POST['email'],
            $_POST['clave1'], $_POST['clave2']);
      }

  	$titulo = 'Registrate';
  	include_once 'plantillas/inicio.inc.php';
  	include_once 'plantillas/navbar.inc.php';
 ?>

 <div class="container">
   <div class="jumbotron">
     <h1 class="text-center">Formulario de Registro</h1>
   </div>
 </div>
<div class="container">
  <div class="row">
    <div class="col-md-6 text-center">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            Instrucciones para el Registro
          </h3>
        </div>
        <div class="panel-body">
          <br>
          <p class="text-justify">
            Para unirte al Blog, introduce un nombre de usuario, tu email y
            una contraseña. El email que uses debe ser real, ya que lo necesitarás
            para gestionar tu cuenta. Te recomendamos que uses una contraseña que
            contenga letras minúsculas, mayúsculas, números y símbolos.
          </p>
          <br>
          <a href="#">¿Ya estás Registrado?</a>
          <br><br>
          <a href="#">¿Has olvidado la contraseña?</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            Ingresa tus datos
          </h3>
        </div>
        <div class="panel-body">
          <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"><!--PARA PROCESAR LA INFORMACION DENTRO DE LA MISMA PAGINA, ASI SE CAMBIE EL NOMBRE DE LA DIRECCION-->
            <?php
              if(isset($_POST['enviar'])){//si ha pulsado enviar, cambio el registro validado
                include_once 'plantillas/registro_validado.inc.php';
              }else{//si no ha pulsado enviar, cambio el registro vacio
                include_once 'plantillas/registro_vaco.inc.php';
              }
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>









 <?php
 		include_once 'plantillas/cierre.inc.php';
 ?>
