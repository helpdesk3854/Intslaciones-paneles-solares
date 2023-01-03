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
        $fachada1 = subir_fichero('images_levantamiento','fachada1');
        $fachada2 = subir_fichero('images_levantamiento','fachada2');
        $fachada3 = subir_fichero('images_levantamiento','fachada3');
    }
    // echo nl2br( $fachada1 . "\n");
    // echo nl2br( $fachada2 . "\n");
    // echo nl2br( $fachada3 . "\n");
    $query = ("INSERT INTO ingreso_lev(id_proyecto,fachada1,fachada2,fachada3,observaciones)
	VALUES('$_SESSION[idproyecto]','$fachada1','$fachada2','$fachada3','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    
    header("Location: page_lev2.php");

?>
</body>
</html>