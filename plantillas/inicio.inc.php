<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

  <?php
  if (!isset($titulo) || empty($titulo)) {
    $titulo = 'Blog Agel|PR';
  }echo "<title>$titulo</title>";
  ?>

</head>
<body>
