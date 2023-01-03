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
        $inversor1 = subir_fichero('images_levantamiento','inversor1');
        $inversor2 = subir_fichero('images_levantamiento','inversor2');
        $inversor3 = subir_fichero('images_levantamiento','inversor3');
    }
    // echo nl2br( $inversor1 . "\n");
    // echo nl2br( $inversor2 . "\n");
    // echo nl2br( $inversor3 . "\n");
    $query = ("INSERT INTO lugar_inversor(id_proyecto,lugar1,lugar2,lugar3,observaciones)
	VALUES('$_SESSION[idproyecto]','$inversor1','$inversor2','$inversor3','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    

	

    header("Location: page_lev10.php");

?>
</body>
</html>