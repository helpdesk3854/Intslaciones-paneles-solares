<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Personal de Campo</title>
</head>	
<body>
<header>
		<nav>
            <img src= "../imagenes_vistas/black2.jpg" width="180" height="80">
		</nav>
	</header>
    <div class="page-header bg-dark text-white text-center">
		<span class="h4">Reporte Final</span>
	</div>
    <br><br>

    <form  action="query10.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;">

        <fieldset>

            <legend class="text-center header text-danger">Fotografias extras</legend>
                <h4>Evitar el uso de zoom</h4><br><br>
                <label>Medidor Antiguo(OBLIGATORIO)</label>
                <input type="file" name="medidor" id="medidor" required>
                <br><br>
                <label>Extras 1</label>
                <input type="file" name="extra1" id="extra1" >
                <br><br>
                <label>Extras 2</label>
                <input type="file" name="extra2" id="extra2" >
                <br><br>
                <label>Extras 3</label>
                <input type="file" name="extra3" id="extra3" >
                <br><br>
                <label>Extras 4</label>
                <input type="file" name="extra4" id="extra4" >
                <br><br>
                <label>Extras 5</label>
                <input type="file" name="extra5" id="extra5" >
                <br><br>
                <input type="reset" value="Borrar" >
                <br><br>
                
                
                <input type="submit" class="btn btn-secondary form-control" value="Siguiente" name="enviar" class="btn btn-success form-control">

            </fieldset>
        </form>
    
</body>
</html>