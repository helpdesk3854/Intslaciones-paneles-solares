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
        $obstaculo1 = subir_fichero('images_levantamiento','obstaculo1');
        $obstaculo2 = subir_fichero('images_levantamiento','obstaculo2');
        $obstaculo3 = subir_fichero('images_levantamiento','obstaculo3');
    }
    // echo nl2br( $obstaculo1 . "\n");
    // echo nl2br( $obstaculo2 . "\n");
    // echo nl2br( $obstaculo3 . "\n");
    $query = ("INSERT INTO obstaculos(id_proyecto,obstaculo1,obstaculo2,obstaculo3,observaciones)
	VALUES('$_SESSION[idproyecto]','$obstaculo1','$obstaculo2','$obstaculo3','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    
	
    header("Location: page_lev7.php");

?>
</body>
</html>