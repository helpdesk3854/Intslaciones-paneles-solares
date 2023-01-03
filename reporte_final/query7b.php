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
        $mc41 = subir_fichero('images','mc41');
        $mc42 = subir_fichero('images','mc42');
        $mc43 = subir_fichero('images','mc43');
    }
    
    $query = ("INSERT INTO mc4(id_proyecto,mc41,mc42,mc43,observaciones)
    values('$_SESSION[idproyecto]','$mc41','$mc42','$mc43','$_REQUEST[observaciones]')");
    
    $consulta=pg_query($conexion,$query);
    header("Location: page8.php");

?>
</body>
</html>