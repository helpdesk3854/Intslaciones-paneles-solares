<?php
//https://codea.app/blog/subir-una-imagen-a-una-carpeta-interna-de-un-servidor-web

function subir_fichero($directorio_destino,$nombre_fichero)
{
    echo nl2br("nombre_fichero: " .$nombre_fichero . "\n");
    $max_ancho = 1280;
    $max_alto = 900;

    $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
    echo nl2br("tmp_name: " .$tmp_name . "\n");

    if(is_dir($directorio_destino) && is_uploaded_file($tmp_name))
    {
        $img_file = $_FILES[$nombre_fichero]['name'];
        echo nl2br("img_file: " .$img_file . "\n");
        $img_type = $_FILES[$nombre_fichero]['type'];
        echo nl2br("img_type: " .$img_type . "\n");

        if(((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg") || strpos($img_type, "png")   )))
        {
            $medidasimagen = getimagesize($_FILES[$nombre_fichero]['tmp_name']);
            if($medidasimagen[0] < 1280 && $_FILES[$nombre_fichero]['size'] < 100000){
                if(move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file)){
                    //echo nl2br(  $directorio_destino . '/' . $img_file . "\n");
                    return $directorio_destino . '/' . $img_file;//retornamos la direccion donde se quedo guardada la imagen
                }
            }
            else {                
                $nombrearchivo=$_FILES[$nombre_fichero]['name'];
                echo nl2br("nombrearchivo: " .$nombrearchivo . "\n");
                //Redimensionar
                $rtOriginal=$_FILES[$nombre_fichero]['tmp_name'];
                echo nl2br("rtOriginal: " .$rtOriginal . "\n");
                if($_FILES[$nombre_fichero]['type']=='image/jpeg'){
                    $original = imagecreatefromjpeg($rtOriginal);
                }
                
                list($ancho,$alto)=getimagesize($rtOriginal);
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
                $cal=8;
                if($_FILES[$nombre_fichero]['type']=='image/jpeg'){
                    imagejpeg($lienzo,$directorio_destino."/".$nombrearchivo);
                }
                $link = $directorio_destino . "/" . $nombrearchivo;
                //echo nl2br("link" .$link . "\n");
                return $link;
            }
            
        }
    }
    return null;
}
?>