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
        $pretil1 = subir_fichero('images_levantamiento','pretil1');
        $pretil2 = subir_fichero('images_levantamiento','pretil2');
        $pretil3 = subir_fichero('images_levantamiento','pretil3');
    }
    // echo nl2br( $pretil1 . "\n");
    // echo nl2br( $pretil2 . "\n");
    // echo nl2br( $pretil3 . "\n");
    // echo nl2br( $_REQUEST[observaciones] . "\n");
    // echo nl2br( $pretil2 . "\n");
    // echo nl2br( $pretil3 . "\n");
    $query = ("INSERT INTO pretil(id_proyecto,pretil1,pretil2,pretil3,observaciones,maxima,minima)
	VALUES('$_SESSION[idproyecto]','$pretil1','$pretil2','$pretil3','$_REQUEST[observaciones]','$_REQUEST[maxima]','$_REQUEST[minima]')"); 
    $consulta=pg_query($conexion,$query);
    
	
    header("Location: page_lev6.php");

?>
</body>
</html>