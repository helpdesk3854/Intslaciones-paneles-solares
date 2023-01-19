<html>
<head>
	<title></title>
</head>

<body>
<?php
    session_start();
    include_once("../conexion.php");
    require_once("../subir2.php");
    $datos = array($_SESSION["idproyecto"], $_REQUEST["observaciones"]); 
    if(!empty($_POST) ){
        echo "ENTRAMOS";
        subir_fichero('images', "obraCivilBaja", $datos);
    }
    header("Location: page5.php");

?>
</body>
</html>