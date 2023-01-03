<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Fortius</title>
</head>

<body>
    <header>
		<nav>
			<a  title="inicio" href="index.php"><img src= "imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="levantamiento/levantamiento_view.php">Levantamiento</a>
            <a href="avance_diario/avance_view.php">Reporte diario</a>
			<a href="reporte_final/proyectos.php">Reporte Final</a>
		</nav>
	</header>
    <h1>Proyecto cargado Correctamente</h1>
<?php
//including the database connection file
    include_once("conexion.php");
    
    if(isset($_POST['check']) && strtolower($_POST['check']) == '1'){ //where "Value" is the
        //same string given in the HTML form, as value attribute the the checkbox input
        $subestructura = 1;
    }else{
        $subestructura = 0;
    }
    
    $calle = $_REQUEST['calle'];
    $numero = $_REQUEST['numero'];
    $colonia = $_REQUEST['colonia'];
    $cp = $_REQUEST['cp'];
    $ciudad = $_REQUEST['ciudad'];
    $estado = $_REQUEST['estado'];
    $tarifa = $_REQUEST['tarifa'];
    $calle_completa = $calle . " " . $numero .", " . $colonia  . ", " . $cp  ." " . $ciudad ." " . $estado;
	$query = ("INSERT INTO proyecto(nombre_proyecto,nombre_cfe,rpu,domicilio,cantidad_paneles,capacidad_panel,capacidad_instalada,fecha_inicio,fecha_fin,activo,telefono,email,fecha_anticipo,sub_estructura)
	VALUES('$_REQUEST[nombre_proyecto]','$_REQUEST[nombre_cfe]','$_REQUEST[rpu]','$calle_completa','$_REQUEST[cantidad_paneles]','$_REQUEST[capacidad_panel]' ,
        '$_REQUEST[capacidad_instalada]','$_REQUEST[inicio]','$_REQUEST[termino]','True','$_REQUEST[telefono]','$_REQUEST[email]','$_REQUEST[fecha_anticipo]','$subestructura')");

    $consulta=pg_query($conexion,$query);
?>
</body>
</html>