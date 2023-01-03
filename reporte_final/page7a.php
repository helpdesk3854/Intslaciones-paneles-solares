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

    <form  action="query7a.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;">

        <fieldset>

            <legend class="text-center header text-danger">Paneles</legend>
                <h4>Evitar el uso de zoom</h4><br><br>
                <label>Cantidad de Paneles</label>
                <input type="text" class="form-control" name="cantidad" required>
                <br><br>
                <label>Foto VISIBLE de la capacidad de los paneles   </label>
                <input type="file" name="capacidad" id="capacidad" required>
                <br><br>
                <label>Fotografia 1 de los paneles</label>
                <input type="file" name="paneles1" id="paneles1" required>
                <br><br>
                <label>Fotografia 2 de los paneles</label>
                <input type="file" name="paneles2" id="paneles2" required>
                <br><br>
                <label>Fotografia 3 de los paneles</label>
                <input type="file" name="paneles3" id="paneles3" required>
                <br><br>
                <label>Fotografia 4 de los paneles</label>
                <input type="file" name="paneles4" id="paneles4" required>
                <br><br>
                <label>Foto panoramica de los paneles</label>
                <input type="file" name="panoramica" id="panoramica" required>
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