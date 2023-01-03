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
        $medidor = subir_fichero('images_levantamiento','medidor');
    }

    $query = ("INSERT INTO medidor(id_proyecto,medidor,tipo,observaciones)
	VALUES('$_SESSION[idproyecto]','$medidor','$_REQUEST[tipo]','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    
	
    header("Location: page_lev13.php");

?>
</body>
</html>