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
        $fases = subir_fichero('images_levantamiento','fases');
        $trayectoria1 = subir_fichero('images_levantamiento','centro_carga1');
        $trayectoria2 = subir_fichero('images_levantamiento','centro_carga2');
        $trayectoria3 = subir_fichero('images_levantamiento','centro_carga3');
    }
    // echo nl2br( $trayectoria1 . "\n");
    // echo nl2br( $trayectoria2 . "\n");
    // echo nl2br( $trayectoria3 . "\n");
    $query = ("INSERT INTO centroc_existente(id_proyecto,trayecto1,trayecto2,trayecto3,observaciones,fases)
	VALUES('$_SESSION[idproyecto]','$trayectoria1','$trayectoria2','$trayectoria3','$_REQUEST[observaciones]','$fases')"); 
    $consulta=pg_query($conexion,$query);
    
	
    header("Location: page_lev12.php");

?>
</body>
</html>