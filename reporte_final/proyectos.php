<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Fortius</title>
</head>

<body>
    <header>
		<nav>
			<a  title="inicio" href="../index.php"><img src= "../imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="../levantamiento/levantamiento_view.php">Levantamiento</a>
            <a href="../avance_diario/avance_view.php">Reporte diario</a>
			<a href="proyectos.php">Reporte Final</a>
		</nav>
	</header>

    <form action="proyectos_query.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;">

        <fieldset>

            <div class="form-group">
                <br><br>
                <select  name="id_proyect" id="seleccion">
                    <option value="0" required>Seleccione el nombre de la obra</option>
                <?php
                    include_once("C:/xampp/htdocs/instalaciones/conexion.php");
                    $query = pg_query($conexion, 'select id, nombre_proyecto from proyecto ');
                    while ($datos= pg_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $datos['id']?>"><?php echo 
                        $datos['nombre_proyecto']?></option>
                        <?php
                    }
                ?>
                </select>
            </div>

			<br><br>
			<input type="submit" class="btn btn-secondary form-control" name="submit" value="Ver"/>
			
        </fieldset>
    </form>
    
</html>