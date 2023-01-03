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
        $trayectoria1 = subir_fichero('images_levantamiento','trayectoria1');
        $trayectoria2 = subir_fichero('images_levantamiento','trayectoria2');
        $trayectoria3 = subir_fichero('images_levantamiento','trayectoria3');
        $trayectoria4 = subir_fichero('images_levantamiento','trayectoria4');
        $trayectoria5 = subir_fichero('images_levantamiento','trayectoria5');
    }
    // echo nl2br( $trayectoria1 . "\n");
    // echo nl2br( $trayectoria2 . "\n");
    // echo nl2br( $trayectoria3 . "\n");
    $query = ("INSERT INTO trayecto_caja_inversor(id_proyecto,trayecto1,trayecto2,trayecto3,trayecto4,trayecto5,observaciones)
	VALUES('$_SESSION[idproyecto]','$trayectoria1','$trayectoria2','$trayectoria3','$trayectoria4','$trayectoria5','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    
	
    header("Location: page_lev9.php");

?>
</body>
</html>