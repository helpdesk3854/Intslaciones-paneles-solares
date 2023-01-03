<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Fortius</title>
</head>

<body>
    <header>
		<nav>
			<img src= "../imagenes_vistas/black2.jpg" width="180" height="80">
            <a href="avance.php">Avance diario</a>
		</nav>
	</header>

    <h1>Imagen cargada correctamente</h1>
<?php
    include_once("../conexion.php");
    require_once("../subir.php");
    date_default_timezone_set('America/Mexico_City');
    $fechaActual = date('d/m/y');

    if(!empty($_POST)){
        $imagen = subir_fichero('img_avances','imagen');
    }

    $proyecto=$_REQUEST["id_proyecto"];
    $id_ingeniero=$_REQUEST["id_ingeniero"];
    $horario=$_REQUEST["horario"];

    $sentence = 'select * from ingeniero where id = ' . $id_ingeniero;
    $query = pg_query($conexion,$sentence );
    $arr = pg_fetch_array($query, 0, PGSQL_NUM);
    $nombre = $arr[1];

    
	$query2 = ("INSERT INTO avance(id_proyecto,nombre_ingeniero,imagen,hora,dia)
	VALUES('$proyecto','$nombre','$imagen','$horario','$fechaActual')"); 
    $consulta=pg_query($conexion,$query2);

?>
</body>
</html>