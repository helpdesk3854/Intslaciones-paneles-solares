<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Fortius</title>
</head>	
<body>

	<div class="page-header bg-primary text-white text-center">
		<span class="h4">Fortius</span>
	</div>
    <h1>FORMULARIO COMPLETADO </h1>
</html>

<?php
    session_start();
    include_once("C:/xampp/htdocs/instalaciones/conexion.php");
	
	$id_proyecto = $_SESSION["idproyecto"];
    $query = ("UPDATE proyecto set activo = 'false' where id = $id_proyecto");
    $consulta=pg_query($conexion,$query);
?>