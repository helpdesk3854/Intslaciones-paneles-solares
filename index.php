<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Fortius</title>
</head>

<body >
	<header>
		<nav>
			<a  title="inicio" href="index.php"><img src= "imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="levantamiento/levantamiento_view.php">Levantamiento</a>
			<a href="avance_diario/avance_view.php">Reporte diario</a>
			<a href="reporte_final/proyectos.php">Reporte Final</a>
		</nav>
	</header>
	<div class="page-header bg-dark text-white text-center">
		<span class="h4">Inicio</span>
	</div>
	<br><br>

	<form action="index_add.php" method="POST" style="width:70%;margin:0 auto;">
		
		<fieldset>
			<br><br>
			<legend class="text-center header text-primary">Cliente</legend>
			<div class="form-group">
				<label for="nomProyect">Nombre del proyecto</label>
				<input type="text" class="form-control" name="nombre_proyecto" required>
			</div>
			<h4>Direccion</h4>
			<div class="form-group">
				<label for="">Calle</label>
				<input type="text" class="form-control" name="calle" required>
			</div>
			<div class="form-group">
				<label for="">Numero</label>
				<input type="text" class="form-control" name="numero" required>
			</div>
			<div class="form-group">
				<label for="">Colonia</label>
				<input type="text" class="form-control" name="colonia" required>
			</div>
			<div class="form-group">
				<label for="">Codigo Postal</label>
				<input type="text" class="form-control" name="cp" required>
			</div>
			<div class="form-group">
				<label for="">Ciudad</label>
				<input type="text" class="form-control" name="ciudad" required>
			</div>
			<div class="form-group">
				<label for="">Estado</label>
				<input type="text" class="form-control" name="estado" required>
			</div>
		</fieldset>


			<legend class="text-center header text-primary">Contacto</legend>
			<div class="form-group">
				<label for="">Telefono</label>
				<input type="text" class="form-control" name="telefono" required>
			</div>
			<div class="form-group">
				<label for="">email</label>
				<input type="email" class="form-control" name="email" required>
			</div>

			<div class="form-group">
                <label>Fecha de Anticipo:
                    <input type="date" name="fecha_anticipo" required value="<?php echo date("Y-m-d");?>"/>
                </label>
			</div>



			<legend class="text-center header text-primary">Proyecto</legend>

			<div class="form-group">
				<label for="">Nombre CFE</label>
				<input type="text" class="form-control" name="nombre_cfe" required>
				
			</div>

			<div class="form-group">
				<label for="">RPU</label>
				<input type="text" class="form-control" name="rpu" required>
			</div>

			<div class="form-group">
				<label for="">Tarifa</label>
				<input type="text" class="form-control" name="tarifa" required>
			</div>
			

			<div class="form-group">
				<label for="">Cantidad de Modulos/Paneles</label>
				<input type="text" class="form-control" name="cantidad_paneles" required>
			</div>

			<div class="form-group">
				<label for="">Capacidad de panel Watts</label>
				<input type="text" class="form-control" name="capacidad_panel" required>
			</div>

			<div class="form-group">|
				<label for="">Capacidad instalada Watts</label>
				<input type="text" class="form-control" name="capacidad_instalada" required>
			</div>

			<div class="form-group">
                <label>Fecha de Inicio:
                    <input type="date" name="inicio" required value="<?php echo date("Y-m-d");?>"/>
                </label>
			</div>

			<div class="form-group">
                <label>Fecha de fin:
                    <input type="date" name="termino" required value="<?php echo date("Y-m-d");?>"/>
                </label>
			</div>

			<label><input type="checkbox" name="check"  value="1"> Sub-Estructura</label>

			<div class="form-group">
				<input type="submit" class="btn btn-secondary form-control" name="registrar">
			</div>

		</fieldset>
	
	</form>

</html>