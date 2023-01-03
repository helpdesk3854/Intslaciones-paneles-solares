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
        $cinchado1 = subir_fichero('images','cinchado1');
        $cinchado2 = subir_fichero('images','cinchado2');
        $cinchado3 = subir_fichero('images','cinchado3');
    }

	$query = ("INSERT INTO cinchado_cableado(id_proyecto,cinchado1,cinchado2,cinchado3,observaciones)
	VALUES('$_SESSION[idproyecto]','$cinchado1','$cinchado2','$cinchado3','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);

    header("Location: page9.php");

?>
</body>
</html>