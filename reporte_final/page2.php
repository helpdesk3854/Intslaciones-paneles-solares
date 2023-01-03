<!DOCTYPE html>
<html lang="es">
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

    <form action="query2.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;">

        <fieldset>

            <legend class="text-center header text-danger">Inversor</legend>
            <h4>Evitar el uso de zoom</h4><br><br>
                <label>Foto del Inversor COMPLETO</label>
                <input type="file" name="inversor" id="inversor" required>
                <br><br>
                <label>Foto de etiqueta del Inversor LEGIBLE</label> 
                <input type="file" name="etiqueta" id="etiqueta" required>
                <br><br>
                <label>Foto del cableado del Inversor</label>
                <input type="file" name="cableado" id="cableado" required>
                <br><br>
                <label>Foto de cuanto esta generando el Inversor</label>
                <input type="file" name="generando" id="generando" required>
                <br><br>
                <label>Foto del cableado del inversor CON GUSANO</label>
                <input type="file" name="gusano" id="gusano" required>
                <br><br>
                <textarea name="observaciones" id="observaciones" cols="35" rows="5" placeholder="Observaciones"></textarea>
                <br><br>
                <input type="reset" value="Borrar" >
                <br><br>
                <input type="submit"class="btn btn-secondary form-control"  value="Siguiente" name="enviar" class="btn btn-success form-control" >

            </fieldset>
        </form>
    
</body>
</html>