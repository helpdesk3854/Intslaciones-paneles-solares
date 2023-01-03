<!DOCTYPE html>
<html lang="en">
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

    <form action="query5.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;">

        <fieldset>

            <legend class="text-center header text-success">Tuberia</legend>
            <h4>Evitar el uso de zoom</h4><br><br>
                <label>Foto de la fijacion de tuberia</label>
                <input type="file" name="fijacion_tuberia" id="fijacion_tuberia"  required>
                <br><br>
                <label>Foto de las  Abrazaderas</label>
                <input type="file" name="abrazadera" id="abrazadera" required>
                <br><br>
                <label>Fotografia del Unicanal</label>
                <input type="file" name="unicanal" id="unicanal" required>
                <br><br>
                <label>Foto del Condulet</label>
                <input type="file" name="condulet" id="condulet" required>
                <br><br>
                <label>Foto de las Glandulas</label>
                <input type="file" name="glandulas" id="glandulas" required>
                <br><br>
                <label>Foto de Cruce Muro(En caso de haber realizado)</label>
                <input type="file" name="muro" id="muro">
                <br><br>
                <label>Foto de Cruce Bobeda(En caso de haber realizado)</label>
                <input type="file" name="bobeda" id="bobeda">
                <br><br>
                <textarea name="observaciones" id="observaciones" cols="35" rows="5" placeholder="Observaciones"></textarea>
                <br><br>
                <input type="reset" value="Borrar" >
                <br><br>
                <input type="submit" value="Siguiente" name="enviar" class="btn btn-success form-control">

            </fieldset>
        </form>
    
</body>
</html>