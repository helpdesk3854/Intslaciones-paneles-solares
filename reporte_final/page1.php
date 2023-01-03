<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Personal de Campo</title>
    
</head>	
<body>
        
    <div class="page-header bg-primary text-white text-center">
		<span class="h4">Fortius</span>
	</div>
    <br><br>

    <form  name="formulario" action="query1.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;" >

        <fieldset>

            <legend class="text-center header text-success">Imagenes de la fachada</legend>
                <h4>Evitar el uso de zoom</h4><br><br>
                <label>Fotografia del Frente de la casa COMPLETA</label>
                <input type="file" name="fachada1" id="fachada1" required>
                <br><br>
                <label>Fotografia del Lateral Derecho de la casa</label>
                <input type="file" name="fachada2" id="fachada2" required>
                <br><br>
                <label>Fotografia del Lateral Izquierdo de la casa</label>
                <input type="file" name="fachada3" id="fachada3"required>
                <br><br>
                <textarea name="observaciones" id="observaciones" cols="35" rows="5" placeholder="Observaciones"></textarea>
                <br><br>
                <input type="reset" value="Borrar" >
                <br><br>
                <input type="submit" name="enviar" value="Siguiente">
                
                
            </fieldset>
        </form>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src ="global.js"> </script>
</body> 
</html>