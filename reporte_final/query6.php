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
        $caja_gabinete = subir_fichero('images','caja_gabinete');
        $fusibles = subir_fichero('images','fusibles');
        $peinado = subir_fichero('images','peinado');

        echo $caja_gabinete;
        echo $fusibles;
        echo $peinado;
    }
    

	$query = ("INSERT INTO caja_gabinete(id_proyecto,caja_gabinete,fusibles,peinado_cables,observaciones)
	VALUES('$_SESSION[idproyecto]','$caja_gabinete','$fusibles','$peinado','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);

    header("Location: page7.php");

?>
</body>
</html>