<html>
<head>
	<title></title>
</head>

<body>
<?php
//<button onclick="location.href='page7a.php'">Siguiente</button>
    session_start();
    include_once("../conexion.php");
    require_once("../subir.php");
    if(!empty($_POST)){
        $capacidad = subir_fichero('images','capacidad');
        $paneles1 = subir_fichero('images','paneles1');
        $paneles2 = subir_fichero('images','paneles2');
        $paneles3 = subir_fichero('images','paneles3');
        $paneles4 = subir_fichero('images','paneles4');
        $panoramica = subir_fichero('images','panoramica');
    }
    
    $query = ("INSERT INTO paneles(id_proyecto,capacidad,cantidad,paneles1,paneles2,paneles3,paneles4,panoramica,observaciones)
    values('$_SESSION[idproyecto]','$capacidad','$_REQUEST[cantidad]','$paneles1','$paneles2','$paneles3','$paneles4','$panoramica','$_REQUEST[observaciones]')");
    
    $consulta=pg_query($conexion,$query);

    header("Location: page7b.php");

?>
</body>
</html>