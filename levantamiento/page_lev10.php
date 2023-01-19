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
    <div class="page-header bg-danger text-white text-center">
		<span class="h4">Levantamiento</span>
	</div>
    <br><br>

    <form  name="formulario" action="query_lev10.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;" >
        <fieldset>

            <legend class="text-center header text-danger">Fotos trayectoria de inversor a centro de carga</legend>
            <div id="davidlpls">
                <div>
                    <div>
                        <span>Imagen</span><input type="file" name="imagenes[]" required/>
                    </div>
                </div>
            </div><br>
            
            <div>
                <textarea name="observaciones" id="observaciones" cols="35" rows="5" placeholder="Observaciones"></textarea>
                <br><br>
            </div>
            <input type="button" value="Agregar otra imagen" id="agregar">
            <br><br>
            <input type="reset" value="Borrar" >
            <br><br>
            <input type="submit" class="btn btn-secondary form-control" name="enviar" value="Siguiente">
            
            
        </fieldset>
    </form>
    <script src="../js/dom.js"></script> <!-- para agregar mas imagenes -->
    <script src="../js/codigo.js"></script> <!-- para agregar mas imagenes -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </body> 
</html>