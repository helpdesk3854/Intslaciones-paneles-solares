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
            <a  title="inicio" href="../obra.php"><img src= "../imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="../levantamiento/ingeniero_lev.php">Crear un Levantamiento</a>
			<a href="avance.php">Reporte diario</a>
			<a href="../reporte_final/ingeniero.php">Crear un reporte final</a>
		</nav>
	</header>
    <div class="page-header bg-danger text-white text-center">
		<span class="h4">Reporte Diario</span>
	</div>
    

<?php
    include_once("../conexion.php");
    include_once("../subir2.php");
    

    date_default_timezone_set('America/Mexico_City');
    $fechaActual = date('d/m/y');
    $proyecto=$_REQUEST["id_proyecto"];
    $id_ingeniero=$_REQUEST["id_ingeniero"];
    $horario=$_REQUEST["horario"];
    $password=$_REQUEST["password"];

    $sentence = 'select * from ingeniero where id = ' . $id_ingeniero;
    $query = pg_query($conexion,$sentence );
    $arr = pg_fetch_array($query, 0, PGSQL_NUM);
    $nombre = $arr[1];

    $array = array($proyecto, $nombre, $horario, $fechaActual); 


    if( $password == $arr[2]){
        subir_fichero('img_avances', "avance", $array);
        ?>
        <h1>Imagen cargada correctamente</h1>
        <?php
    }
    else{
        ?>
            <h1>Contraseña Invalida</h1>
            <a href="avance.php">
            <button class="btn btn-outline-danger" text-align="center" >Preione para Intentarlo de nuevo</button>
            </a> 
        <?php
    }


?>
</body>
</html>