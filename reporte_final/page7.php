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
    <div class="page-header bg-danger text-white text-center">
		<span class="h4">Reporte Final</span>
	</div>
    <br><br>

    <form action="query7.php" action="query7.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;">

        <fieldset>

            <legend class="text-center header text-danger">Estructura de los paneles</legend>
            <h4>Evitar el uso de zoom</h4><br><br>
                
                <label>Foto de la Fijacion de los modulos</label>
                <input type="file" name="fijacion_modulos" id="fijacion_modulos" required>
                <br><br>
                <label>Foto de los entrepaneles</label>
                <input type="file" name="entrepaneles" id="entrepaneles" required>
                <br><br>
                <label>Foto de las orillas</label>
                <input type="file" name="orillas" id="orillas" required>
                <br><br>
                <label>Foto de la Sub-estructura(ACERO)</label>
                <input type="file" name="subestructura" id="subestructura" required>
                <br><br>
                <label>Foto de la fijacion de la estructura(Aluminio)</label>
                <input type="file" name="fijacion_estructura" id="fijacion_estructura" required>
                <br><br>
                <textarea name="observaciones" id="observaciones" cols="35" rows="5" placeholder="Observaciones"></textarea>
                <br><br>
                <input type="reset" value="Borrar" >
                <br><br>
                
                
                <input type="submit" class="btn btn-secondary form-control" value="Siguiente" name="enviar" class="btn btn-success form-control">

            </fieldset>
        </form>
    
</body>
</html>