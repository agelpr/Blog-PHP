<?php
	include_once 'app/conexion.inc.php';//abro y cierra la conexion
	include_once 'app/repositoriousuario.inc.php';//muestro consultas de bd
	$titulo = 'Blog Agel|PR';
	include_once 'plantillas/inicio.inc.php';
	include_once 'plantillas/navbar.inc.php';
 ?>

<!--BARRA DE TAREAS-->
	<div class="container">
		<div class="jumbotron">
			<h1>AgelPR | Design</h1>
			<p>Blog dedicado a la programación y al desarrollo</p>
		</div>
	</div>
<!--BARRA DE TAREAS-->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
							</div>
							<div class="panel-body">
								<div class="form-group">
									<input type="search" class="form-control" placeholder="¿Qué buscas?">
								</div>
								<button class="form-control">Buscar</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
									</div>
									<div class="panel-body">

									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
									</div>
									<div class="panel-body">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Ultimas Entradas
					</div>
					<div class="panel-body">
						<div class="form-group">
							<p>Todavía no hay entradas que buscar</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php

			include_once 'plantillas/cierre.inc.php';
	 ?>

</body>
</html>
