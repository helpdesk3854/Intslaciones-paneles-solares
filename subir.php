<?php
//https://codea.app/blog/subir-una-imagen-a-una-carpeta-interna-de-un-servidor-web

function subir_fichero($directorio_destino,$nombre_fichero)
{
    //$patch='images';
    $max_ancho = 1280;
    $max_alto = 900;

    $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
    //echo $tmp_name;
    if(is_dir($directorio_destino) && is_uploaded_file($tmp_name))
    {
        $img_file = $_FILES[$nombre_fichero]['name'];
        $img_type = $_FILES[$nombre_fichero]['type'];
        if(((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg") || strpos($img_type, "png")   )))
        {
            $medidasimagen = getimagesize($_FILES[$nombre_fichero]['tmp_name']);
            if($medidasimagen[0] < 1280 && $_FILES[$nombre_fichero]['size'] < 100000){
                if(move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file)){
                    //echo nl2br( "ARRIBA" . $directorio_destino . '/' . $img_file . "\n");
                    return $directorio_destino . '/' . $img_file;//retornamos la direccion donde se quedo guardada la imagen
                }
            }
            else {
                //echo "entramos";
                
                $nombrearchivo=$_FILES[$nombre_fichero]['name'];

                //Redimensionar
                $rtOriginal=$_FILES[$nombre_fichero]['tmp_name'];
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
                
                //imagedestroy($original);
                
                $cal=8;
    
                if($_FILES[$nombre_fichero]['type']=='image/jpeg'){
                    imagejpeg($lienzo,$directorio_destino."/".$nombrearchivo);
                }
                $link = $directorio_destino . "/" . $nombrearchivo;
                //echo nl2br("abajo" .$link . "\n");
                return $link;
    
            }
            
        }
    }
    return null;
}
?>