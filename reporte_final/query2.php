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
        $inversor = subir_fichero('images','inversor');
        $etiqueta = subir_fichero('images','etiqueta');
        $cableado = subir_fichero('images','cableado');
        $generando = subir_fichero('images','generando');
        $gusano = subir_fichero('images','gusano');
    }
    

	$query = ("INSERT INTO inversor(id_proyecto,inversor,etiqueta,cableado,generando,cableado_gusano,observaciones)
	VALUES('$_SESSION[idproyecto]','$inversor','$etiqueta','$cableado','$generando','$gusano','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);

    header("Location: page3.php");

?>
</body>
</html>