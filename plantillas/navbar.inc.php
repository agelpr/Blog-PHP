<?php
      Conexion :: abrir_conexion();//abro conexion
      $total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion :: obtener_conexion());//hago consultas y la alimento con la conexion
      Conexion :: cerrar_conexion();//cierro conexion
?>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expander="false" aria-controls="navbar">
        <span class="sr-only">Este boton des´pliega la barra de navegación</span>
        <span class="icon-bar"></span>  <!--muestra las tres barras del menu-->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">AgelPR | Design</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav"><!--enlaces-->
        <li class=""><a href="#"> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>  Entradas</a></li>
        <li class=""><a href="#"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>  Favoritos</a></li>
        <li class=""><a href="#"> <span class="glyphicon glyphicon-education" aria-hidden="true"></span>  Autores</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">

            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <?php echo $total_usuarios;?>
        </a></li>

        <li><a href=""> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Iniciar Sesión</a></li>
        <li><a href="registro.php"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Registrate</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--MENU-->
