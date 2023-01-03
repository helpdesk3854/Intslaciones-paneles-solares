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

    // echo nl2br("ID->" . $arr[0] . "\n") ;  //ID PROYECTO
    // echo nl2br("nOMBRE->" . $arr[1] . "\n");  //NOMBRE
    // echo nl2br("Contraseña->" . $arr[2] . "\n");  //CONTRASEÑA


    

    if( $password == $arr[2]){
        echo "Contraseñas iguales";
        $query = ("INSERT INTO ingeniero_levantamiento(id_proyecto,id_ingeniero)
        VALUES('$proyecto','$arr[0]')"); 
        $consulta=pg_query($conexion,$query);
        header("Location: page_lev1.php");
    }
    else{
        header("Location: ingeniero_lev.php");
        //header("Location: ingeniero.php");
    }
?>
</body>
</html>