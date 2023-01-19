<html>
<head>
	<title></title>
</head>

<body>
<?php
    session_start();
    include_once("../conexion.php");
    require_once("../subir2.php");
    $datos = array($_SESSION["idproyecto"], $_REQUEST['maxima'],$_REQUEST['minima'],$_REQUEST["observaciones"]); 
    if(!empty($_POST) ){
        subir_fichero('images_levantamiento', "pretil", $datos);
    }
	
    header("Location: page_lev6.php");
?>
</body>
</html>