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
        $centro_carga = subir_fichero('images','centro_carga');
        $itm = subir_fichero('images','itm');
        $cableado = subir_fichero('images','cableado');
    }
    

	$query = ("INSERT INTO centro_carga(id_proyecto,centro_carga,itm,cableado,observaciones)
	VALUES('$_SESSION[idproyecto]','$centro_carga','$itm','$cableado','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);

    header("Location: page4.php");

?>
</body>
</html>