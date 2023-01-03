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
        $fachada1 = subir_fichero('images','fachada1');
        $fachada2 = subir_fichero('images','fachada2');
        $fachada3 = subir_fichero('images','fachada3');
    }
    $query = ("INSERT INTO ingreso(id_proyecto,fachada1,fachada2,fachada3,observaciones)
	VALUES('$_SESSION[idproyecto]','$fachada1','$fachada2','$fachada3','$_REQUEST[observaciones]')"); 
    $consulta=pg_query($conexion,$query);
    

	

    header("Location: page2.php");

?>
</body>
</html>
