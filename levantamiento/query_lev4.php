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
        $norte = subir_fichero('images_levantamiento','norte');
        $sur = subir_fichero('images_levantamiento','sur');
        $este = subir_fichero('images_levantamiento','este');
        $oeste = subir_fichero('images_levantamiento','oeste');
    }
    // echo nl2br( $norte . "\n");
    // echo nl2br( $sur . "\n");
    // echo nl2br( $este . "\n");
    // echo nl2br( $oeste . "\n");
    $query = ("INSERT INTO puntos_cardinales(id_proyecto,norte,sur,este,oeste,observaciones)
	VALUES('$_SESSION[idproyecto]','$norte','$sur','$este','$oeste','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    

	

    header("Location: page_lev5.php");

?>
</body>
</html>