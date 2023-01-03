<html>
<head>
	<title></title>
</head>

<body>
<?php
    session_start();
    include_once("../conexion.php");
    require_once("../subir.php");
    
    //if(!empty($_POST)){Si funciona no le muevas :v
    $medidor = subir_fichero('images','medidor');
    $extra1 = subir_fichero('images','extra1');
    $extra2 = subir_fichero('images','extra2');
    $extra3 = subir_fichero('images','extra3');
    $extra4 = subir_fichero('images','extra4');
    $extra5 = subir_fichero('images','extra5');
    //}

    $query = ("INSERT INTO extras(id_proyecto,medidor_antiguo,extra1,extra2,extra3,extra4,extra5)
    VALUES('$_SESSION[idproyecto]','$medidor','$extra1','$extra2','$extra3','$extra4','$extra5')");
    $consulta=pg_query($conexion,$query);
    header("Location: finalizado.php");

?>
</body>
</html>