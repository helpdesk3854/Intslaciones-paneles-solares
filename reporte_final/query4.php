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
        $obracivil1 = subir_fichero('images','obracivil1');
        $obracivil2 = subir_fichero('images','obracivil2');
        $obracivil3 = subir_fichero('images','obracivil3');
    }
    
    if($obracivil1 != null || $obracivil2 != null || $obracivil3 != null ){
        $query = ("INSERT INTO obra_civil_plantabaja(id_proyecto,planta_baja1,planta_baja2,planta_baja3,observaciones)
        VALUES('$_SESSION[idproyecto]','$obracivil1','$obracivil2','$obracivil3','$_REQUEST[observaciones]')"); 
        $consulta=pg_query($conexion,$query);
    }
    header("Location: page5.php");

?>
</body>
</html>