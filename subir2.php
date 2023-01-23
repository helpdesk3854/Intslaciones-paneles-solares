<?php

function subir_fichero($carpeta, $opcion, $array){
    $max_ancho = 1280;
    $max_alto = 900;
    if (isset($_FILES["imagenes"])) {
        $tot = count($_FILES["imagenes"]["name"]);

        for ($i = 0; $i < $tot; $i++){  
            $link="";                                
            if(is_dir($carpeta) &&is_uploaded_file($_FILES["imagenes"]["tmp_name"][$i])){
                $name = $_FILES["imagenes"]["name"][$i];
                $tmp_name = $_FILES["imagenes"]["tmp_name"][$i];
                $tamano = $_FILES["imagenes"]["size"][$i];
                $tipo = $_FILES["imagenes"]["type"][$i]; 
                if (((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") ||strpos($tipo, "png")))) {
                    $medidasimagen = getimagesize($tmp_name);
                    if($medidasimagen[0] < 1280 && $tamano < 100000){
                        if(move_uploaded_file($tmp_name, $carpeta . '/' . $name)){
                            $link = $carpeta . '/' . $name;//retornamos la direccion donde se quedo guardada la imagen
                        }
                    }
                    else {
                        if($tipo=='image/jpeg'){
                            $original = imagecreatefromjpeg($tmp_name);
                        }
                        
                        list($ancho,$alto)=getimagesize($tmp_name);
                        $x_ratio = $max_ancho / $ancho;
                        $y_ratio = $max_alto / $alto;
                        if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){
                            $ancho_final = $ancho;
                            $alto_final = $alto;
                        }elseif (($x_ratio * $alto) < $max_alto){
                            $alto_final = ceil($x_ratio * $alto);
                            $ancho_final = $max_ancho;
                        }else{
                            $ancho_final = ceil($y_ratio * $ancho);
                            $alto_final = $max_alto;
                        }
                        $lienzo=imagecreatetruecolor($ancho_final,$alto_final); 
                        imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
                        if($tipo=='image/jpeg'){
                            imagejpeg($lienzo,$carpeta."/".$name);
                        }
                        $link = $carpeta . "/" . $name;
                    }
                }
            }
            seleccionInsert($opcion, $array, $link);
            
        }//for
    } 
}


function seleccionInsert($opcion, array $datos, $link){
    include("conexion.php");
    switch ($opcion) {
        case "avance":
            $query = ("INSERT INTO avance(id_proyecto,nombre_ingeniero,imagen,hora,dia)
            VALUES('$datos[0]','$datos[1]','$link','$datos[2]','$datos[3]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "obraCivilBaja":
            $query = ("INSERT INTO obra_civil_plantabaja(id_proyecto,imagen,observaciones)
            VALUES('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            
            break;

        case "mc4":
            $query = ("INSERT INTO mc4(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')");
            $consulta=pg_query($conexion,$query);
            break;

        case "cinchado":
            $query = ("INSERT INTO cinchado_cableado(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "extras":
            $query = ("INSERT INTO extras(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "obraCivilAlta":
            $query = ("INSERT INTO obra_civil_plantalta(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;
        
        case "areaPaneles":
            $query = ("INSERT INTO area_paneles(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "superficiePaneles":
            $query = ("INSERT INTO superficie_paneles(id_proyecto,tipo_superficie,imagen,observaciones)
            values('$datos[0]','$datos[1]','$link','$datos[2]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "paneles":
                $query = ("INSERT INTO paneles(id_proyecto,cantidad,imagen,observaciones)
                values('$datos[0]','$datos[1]','$link','$datos[2]')");
                $consulta=pg_query($conexion,$query);
            break;

        case "pretil":
            $query = ("INSERT INTO pretil(id_proyecto,imagen,maxima,minima,observaciones)
            values('$datos[0]','$link','$datos[1]','$datos[2]','$datos[3]')");  
            $consulta=pg_query($conexion,$query);
            break;

        case "obstaculos":
            $query = ("INSERT INTO obstaculos(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "panelCc":
            $query = ("INSERT INTO trayecto_panel_caja(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "cFusiblesInversor":
            $query = ("INSERT INTO trayecto_caja_inversor(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;

        case "lugarInversor":
            $query = ("INSERT INTO lugar_inversor(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
            break;
        
        case "inversorCc":
            $query = ("INSERT INTO trayecto_inversor_centro(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')");             
            $consulta=pg_query($conexion,$query);
            break;

        case "cCExistente":
            $query = ("INSERT INTO centroc_existente(id_proyecto,imagen,observaciones)
            values('$datos[0]','$link','$datos[1]')"); 
            $consulta=pg_query($conexion,$query);
        break;

        default:
        echo "Opcion no valida";
    }
}
?>