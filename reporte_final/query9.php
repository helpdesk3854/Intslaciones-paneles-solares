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
        subir_fichero('images', "obraCivilAlta", $datos);
    }

    header("Location: page10.php");

?>
</body>
</html>