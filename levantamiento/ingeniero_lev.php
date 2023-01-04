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
            <a  title="inicio" href="../obra.php"><img src= "../imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="ingeniero_lev.php">Crear un Levantamiento</a>
			<a href="../avance_diario/avance.php">Reporte diario</a>
			<a href="../reporte_final/ingeniero.php">Crear un reporte final</a>
		</nav>
	</header>

    <div class="page-header bg-danger text-white text-center">
		<span class="h4">Levantamiento</span>
	</div>
    
    <br><br>
    <form action="query_ingeniero_lev.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto;">

        <fieldset>
            <div class="form-group">
                <label for="">Nombre del proyecto</label>
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
                <label for="">Nombre del Encargado</label>
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

            <div class="form-group">
                <label>Contraseña
                    <input type="password" name="password" required />
                </label>
			</div>
            <br><br>

            <br><br>
                <input type="reset" value="Borrar" >
            <br><br>
            
			<br><br>
			<input type="submit" class="btn btn-secondary form-control" name="submit" value="Siguiente"/>
			

		</div>

            </fieldset>
        </form>
    
</body>
</html>