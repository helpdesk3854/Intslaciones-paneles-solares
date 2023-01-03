<!DOCTYPE html>
<html lang="Es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Avance diario</title>
</head>	

<body>
        
    <header>
		<nav>
			<img src= "../imagenes_vistas/black2.jpg" width="180" height="80">
            <a href="avance.php">Avance diario</a>
		</nav>
	</header>
    <br><br>

    <form  name="formulario" action="avance_query.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;" name="formulario" onsubmit="document.forms['formulario']['enviar'].disabled=true;" >

        <fieldset>

            <legend class="text-center header text-success">Reporte diario</legend>

                <div class="form-group">
                    <select  name="id_proyecto" id="seleccion">
                        <option value="0" required>Seleccione el nombre del proyecto</option>
                    <?php
                        include_once("../conexion.php");
                        $query = pg_query($conexion, 'select id, nombre_proyecto from proyecto where activo = true');
                        while ($datos= pg_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $datos['id']?>"><?php echo 
                            $datos['nombre_proyecto']?></option>
                            <?php
                        }
                    ?>
                    </select>
                </div>

                <div class="form-group">
                <select  name="id_ingeniero" id2="seleccion">
                    <option value="0" required>Seleccione su nombre</option>
                <?php
                    include_once("../conexion.php");
                    $query = pg_query($conexion, 'select id, nombre_ingeniero from ingeniero');
                    while ($datos= pg_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $datos['id']?>"><?php echo 
                        $datos['nombre_ingeniero']?></option>
                        <?php
                    }
                ?>
                </select>
                </div>
                
                <div>
                    <label><input type="radio" name="horario"  value="inicio">Inicio del dia</label>
                    <br>
                    <label><input type="radio" name="horario"  value="fin">Fin del dia</label>    
                </div>
                <br><br><br>

                <div id="davidlpls">
                    
                    <div>
                        <span>Imagen</span><input type="file" name="imagen"  />
                    </div>
                </div>

                
                <br><br>
                
                <input type="submit" name="enviar" value="Siguiente">
                
                
            </fieldset>
        </form>
        <script src="js/dom.js"></script> <!-- para agregar mas imagenes -->
        <script src="js/codigo.js"></script> <!-- para agregar mas imagenes -->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src ="global.js"> </script>
</body> 
</html>