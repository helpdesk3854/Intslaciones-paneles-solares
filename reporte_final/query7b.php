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
    if(!empty($_POST)){
        subir_fichero('images', "mc4", $datos);
    }
    
    header("Location: page8.php");

?>
</body>
</html>