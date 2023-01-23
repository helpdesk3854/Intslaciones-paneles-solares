<html>
<head>
	<title></title>
</head>

<body>
<?php
//<button onclick="location.href='page7a.php'">Siguiente</button>
    session_start();
    include_once("../conexion.php");
    require_once("../subir2.php");
    $datos = array($_SESSION["idproyecto"], $_REQUEST["cantidad"], $_REQUEST["observaciones"]); 
    if(!empty($_POST) ){
        subir_fichero('images', "paneles", $datos);
    }

    header("Location: page7b.php");

?>
</body>
</html>