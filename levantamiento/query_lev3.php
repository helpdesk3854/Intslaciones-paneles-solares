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
        $sup_panel1 = subir_fichero('images_levantamiento','sup_panel1');
        $sup_panel2 = subir_fichero('images_levantamiento','sup_panel2');
        $sup_panel3 = subir_fichero('images_levantamiento','sup_panel3');
    }
    // echo nl2br( $sup_panel1 . "\n");
    // echo nl2br( $sup_panel2 . "\n");
    // echo nl2br( $sup_panel3 . "\n");
    $query = ("INSERT INTO superficie_paneles(id_proyecto,tipo_superficie,superficie_paneles1,superficie_paneles2,superficie_paneles3,observaciones)
	VALUES('$_SESSION[idproyecto]','$_REQUEST[tipo]','$sup_panel1','$sup_panel2','$sup_panel3','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    
	
    header("Location: page_lev4.php");

?>
</body>
</html>