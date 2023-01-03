<html>
<head>
	<title></title>
</head>

<body>
<?php
    session_start();
    include_once("../conexion.php");
    require_once("../subir.php");
    if(!empty($_POST)){
        $fijacion_tuberia = subir_fichero('images','fijacion_tuberia');
        $abrazadera = subir_fichero('images','abrazadera');
        $unicanal = subir_fichero('images','unicanal');
        $condulet = subir_fichero('images','condulet');
        $glandulas = subir_fichero('images','glandulas');
        $muro = subir_fichero('images','muro');
        $bobeda = subir_fichero('images','bobeda');
    }
    

	$query = ("INSERT INTO tuberia(id_proyecto,fijacion_tuberia,abrazadera,unicanal,condulet,glandulas,cruce_muro,cruce_bobeda,observaciones)
	VALUES('$_SESSION[idproyecto]','$fijacion_tuberia','$abrazadera','$unicanal','$condulet','$glandulas','$muro','$bobeda','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);

    header("Location: page6.php");

?>
</body>
</html>