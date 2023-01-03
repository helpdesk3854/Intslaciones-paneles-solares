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
        $planta_alta1 = subir_fichero('images','planta_alta1');
        $planta_alta2 = subir_fichero('images','planta_alta2');
        $planta_alta3 = subir_fichero('images','planta_alta3');
    }

	



    if($planta_alta1 != null || $planta_alta2 != null || $planta_alta3 != null ){
        $query = ("INSERT INTO obra_civil_plantalta(id_proyecto,planta_alta1,planta_alta2,planta_alta3,observaciones)
        VALUES('$_SESSION[idproyecto]','$planta_alta1','$planta_alta2','$planta_alta3','$_REQUEST[observaciones]')"); 
        $consulta=pg_query($conexion,$query);
    }
    header("Location: page10.php");

?>
</body>
</html>