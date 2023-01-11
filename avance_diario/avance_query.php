<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Fortius</title>
</head>

<body>
    <header>
		<nav>
            <a  title="inicio" href="../obra.php"><img src= "../imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="../levantamiento/ingeniero_lev.php">Crear un Levantamiento</a>
			<a href="avance.php">Reporte diario</a>
			<a href="../reporte_final/ingeniero.php">Crear un reporte final</a>
		</nav>
	</header>
    <div class="page-header bg-danger text-white text-center">
		<span class="h4">Reporte Diario</span>
	</div>
    

<?php
    include_once("../conexion.php");
    $max_ancho = 1280;
    $max_alto = 900;

    date_default_timezone_set('America/Mexico_City');
    $fechaActual = date('d/m/y');
    $proyecto=$_REQUEST["id_proyecto"];
    $id_ingeniero=$_REQUEST["id_ingeniero"];
    $horario=$_REQUEST["horario"];
    $password=$_REQUEST["password"];

    $sentence = 'select * from ingeniero where id = ' . $id_ingeniero;
    $query = pg_query($conexion,$sentence );
    $arr = pg_fetch_array($query, 0, PGSQL_NUM);
    $nombre = $arr[1];


    if( $password == $arr[2]){
        if (isset($_FILES["imagenes"])) {
            //de se asi, para procesar los archivos subidos al servidor solo debemos recorrerlo
            //obtenemos la cantidad de elementos que tiene el arreglo archivos
            $tot = count($_FILES["imagenes"]["name"]);

            //este for recorre el arreglo
            for ($i = 0; $i < $tot; $i++){  
                $link="";                                
                if(is_dir('img_avances') &&is_uploaded_file($_FILES["imagenes"]["tmp_name"][$i])){
                    //con el indice $i, podremos obtener la propiedad que desemos de cada archivo
                    //para trabajar con este como si fuera un array continuo
                    $name = $_FILES["imagenes"]["name"][$i];
                    $tmp_name = $_FILES["imagenes"]["tmp_name"][$i];
                    $tamano = $_FILES["imagenes"]["size"][$i];
                    $tipo = $_FILES["imagenes"]["type"][$i]; 
                    if (((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") ||strpos($tipo, "png")))) {
                        $medidasimagen = getimagesize($tmp_name);
                        if($medidasimagen[0] < 1280 && $tamano < 100000){
                            if(move_uploaded_file($tmp_name, 'img_avances' . '/' . $name)){
                                //echo nl2br( "ARRIBA" . 'images' . '/' . $name . "\n");
                                $link = 'img_avances' . '/' . $name;//retornamos la direccion donde se quedo guardada la imagen
                            }
                        }
                        else {
                            //echo "entramos";
                            //Redimensionar
                            if($tipo=='image/jpeg'){
                                $original = imagecreatefromjpeg($tmp_name);
                            }
                            
                            list($ancho,$alto)=getimagesize($tmp_name);
                            $x_ratio = $max_ancho / $ancho;
                            $y_ratio = $max_alto / $alto;

                            if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){
                                $ancho_final = $ancho;
                                $alto_final = $alto;
                            }
                            elseif (($x_ratio * $alto) < $max_alto){
                                $alto_final = ceil($x_ratio * $alto);
                                $ancho_final = $max_ancho;
                            }
                            else{
                                $ancho_final = ceil($y_ratio * $ancho);
                                $alto_final = $max_alto;
                            }

                            $lienzo=imagecreatetruecolor($ancho_final,$alto_final); 
                
                            imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
                            
                            //imagedestroy($original);
                            
                            $cal=8;
                
                            if($tipo=='image/jpeg'){
                                imagejpeg($lienzo,'img_avances'."/".$name);
                            }
                            $link = 'img_avances' . "/" . $name;
                            //echo nl2br("abajo" .$link . "\n");
                        }
                    }
                }
                //echo nl2br($link . "\n");
                $query2 = ("INSERT INTO avance(id_proyecto,nombre_ingeniero,imagen,hora,dia)
                VALUES('$proyecto','$nombre','$link','$horario','$fechaActual')"); 
                $consulta=pg_query($conexion,$query2);
            }//for
        } //if
        ?>
        <h1>Imagen cargada correctamente</h1>
        <?php
    }
    else{
        ?>
            <h1>Contraseña Invalida</h1>
            <a href="avance.php">
            <button class="btn btn-outline-danger" text-align="center" >Preione para Intentarlo de nuevo</button>
            </a> 
        <?php
    }


?>
</body>
</html>