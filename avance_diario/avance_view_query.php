</body>
</html>


<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo.css">
	<title>Proyectos</title>
</head>

<body>
    <header>
		<nav>
			<a  title="inicio" href="../index.php"><img src= "../imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="../levantamiento/levantamiento_view.php">Levantamiento</a>
			<a href="../reporte_final/proyectos.php">Reporte Final</a>
		</nav>
	</header>

    <?php
        session_start();
        include_once("C:/xampp/htdocs/instalaciones/conexion.php");
        $idproyect = $_REQUEST['id_proyect'];

        $sentence = 'select * from avance where id_proyecto = ' . $idproyect;
        $query = pg_query($conexion,$sentence );
        ?>
        
        <?php
            while ($row = pg_fetch_row($query)) {
                //echo "Ingeniero: $row[1]  Imagen: $row[2]  Hora: $row[3] Dia: $row[4]";
                ?>
                <table class="default" BORDER>
                    <tr>
                        <td><p ALIGN =center><?php echo $row[1];  echo " -> ";   echo $row[3];  echo " del dia: ";  echo $row[4];   ?> </p></td>
                    </tr>
                    
                    <tr>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $row[2];   ?>" ></td>
                    </tr>
                </table><br>
                <?php
                
            }?>    
</body>
</html>
