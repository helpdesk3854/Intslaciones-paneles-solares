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
		<span class="h4">Levantamiento</span>
	</div>
    <br><br>

    <form  name="formulario" action="query_lev12.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;" >

        <fieldset>

            <legend class="text-center header text-success">Medidor</legend>
                <h4>Evitar el uso de zoom</h4><br><br>
                <label>Fotografia del medidor</label>
                <input type="file" name="medidor"  >
                <br><br>
                <label>Tipo</label>
                <select name="tipo">
                    <option value="monofasico">Monofasico</option>
                    <option value="bifasico">Bifasico</option>
                    <option value="trifasico">Trifasico</option>
                </select>
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