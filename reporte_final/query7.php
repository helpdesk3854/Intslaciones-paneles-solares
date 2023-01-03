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
        $fijacion_modulos = subir_fichero('images','fijacion_modulos');
        $entrepaneles = subir_fichero('images','entrepaneles');
        $orillas = subir_fichero('images','orillas');
        $subestructura = subir_fichero('images','subestructura');
        $fijacion_estructura = subir_fichero('images','fijacion_estructura');
        echo $fijacion_modulos ;
        echo $entrepaneles ;
        echo $orillas ;
        echo $subestructura ;
        echo $fijacion_estructura ;
    }
    
    $query = ("INSERT INTO estructura(id_proyecto,fijacion_modulos,entrepaneles,orillas,sub_estructura,fijacion_estructura,observaciones)
    values('$_SESSION[idproyecto]','$fijacion_modulos','$entrepaneles','$orillas','$subestructura','$fijacion_estructura','$_REQUEST[observaciones]')");
    
    $consulta=pg_query($conexion,$query);

    header("Location: page7a.php");

?>
</body>
</html>