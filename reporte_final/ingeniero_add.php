<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
    session_start(); 
    include_once("../conexion.php");

    $proyecto=$_REQUEST["id_proyecto"];
    $ingeniero=$_REQUEST["id_ingeniero"];
    $password=$_REQUEST["password"];

    $_SESSION["idproyecto"] = $proyecto; 

    $sentence = 'select * from ingeniero where id = ' . $ingeniero;
    $query = pg_query($conexion,$sentence);
    $arr = pg_fetch_array($query, 0, PGSQL_NUM);



    

    if( $password == $arr[2]){
        echo "Contraseñas iguales";
        $query = ("INSERT INTO ingeniero_proyect(id_proyecto,id_ingeniero)
        VALUES('$proyecto','$arr[0]')"); 
        $consulta=pg_query($conexion,$query);
        header("Location: page1.php");
    }
    else{
        header("Location: ingeniero.php");
        //header("Location: ingeniero.php");
    }
?>
</body>
</html>