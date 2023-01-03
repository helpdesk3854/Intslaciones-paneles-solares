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
        echo nl2br( $_REQUEST['calibre'] . "\n");
        echo nl2br( $_REQUEST['longitud'] . "\n");
        // echo nl2br( $centro_carga2 . "\n");
        // echo nl2br( $centro_carga3 . "\n");
    }
    $query = ("INSERT INTO tipo(id_proyecto,calibre,longitud,observaciones)
	VALUES('$_SESSION[idproyecto]','$_REQUEST[calibre]','$_REQUEST[longitud]','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    

	

    header("Location: lev_finalizado.php");

?>
</body>
</html>