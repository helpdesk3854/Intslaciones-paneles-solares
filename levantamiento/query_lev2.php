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
        $area_panel1 = subir_fichero('images_levantamiento','area_panel1');
        $area_panel2 = subir_fichero('images_levantamiento','area_panel2');
        $area_panel3 = subir_fichero('images_levantamiento','area_panel3');
        $panoramica = subir_fichero('images_levantamiento','panoramica');
    }
    // echo nl2br( $area_panel1 . "\n");
    // echo nl2br( $area_panel2 . "\n");
    // echo nl2br( $area_panel3 . "\n");
    $query = ("INSERT INTO area_paneles(id_proyecto,area_paneles1,area_paneles2,area_paneles3,panoramica,observaciones)
	VALUES('$_SESSION[idproyecto]','$area_panel1','$area_panel2','$area_panel3','$panoramica','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    
	
    header("Location: page_lev3.php");

?>
</body>
</html>