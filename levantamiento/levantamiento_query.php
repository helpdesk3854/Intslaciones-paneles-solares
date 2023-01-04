</body>
</html>


<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<title>Proyectos</title>
</head>

<body>
    <header>
		<nav>
			<a  title="inicio" href="../index.php"><img src= "../imagenes_vistas/black2.jpg" width="180" height="80"></a>
			<a href="levantamiento_view.php">Levantamiento</a>
            <a href="../avance_diario/avance_view.php">Reporte diario</a>
			<a href="../reporte_final/proyectos.php">Reporte Final</a>
		</nav>
	</header>

<?php
    error_reporting(0);
    session_start();
    include_once("C:/xampp/htdocs/instalaciones/conexion.php");
	$idproyect = $_REQUEST['id_proyect'];
    $_SESSION["idproyect"] = $idproyect;

    $sentence = 'select nombre_proyecto from proyecto where id = ' . $idproyect;
    $query = pg_query($conexion,$sentence );
    $arr = pg_fetch_array($query, 0, PGSQL_NUM);
?>

    <div class="page-header bg-dark text-white text-center">
		<span class="h4">Obra: <?php   echo $arr[0];   ?></span>
	</div>

    
    



    <br><br>

    <form action="ingeniero_add.php" method="POST" enctype="multipart/form-data" style="width:90%;margin:0 auto";>
        <fieldset>
        <div>
        <div>
                <legend class="text-center header text-success">Proyecto Levantamiento</legend>
                <table class=".table-responsive-sm" BORDER>
                        <?php
                            $sentence = 'select * from proyecto where id = ' . $idproyect;
                            $query = pg_query($conexion,$sentence );
                            $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                        ?>
                    <tr>
                        <td>Nombre de proyecto</td>
                        <td><?php   echo $arr[1];   ?></td>
                    </tr>
                    <tr>
                        <td>Domicilio</td>
                        <td><?php   echo $arr[4];   ?></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><?php   echo $arr[11];   ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php   echo $arr[12];   ?></td>    
                    </tr>
                    <tr>
                        <td>Fecha Anticipo</td>
                        <td><?php   echo $arr[14];   ?></td>
                    </tr>
                    <tr>
                        <td>Nombre de CFE</td>
                        <td><?php   echo $arr[2];   ?></td>
                    </tr>
                    <tr>
                        <td>RPU</td>
                        <td><?php   echo $arr[3];   ?></td>
                    </tr>

                    <tr>
                        <td>Tarifa</td>
                        <td><?php   echo $arr[3];   ?></td>
                    </tr>
                    
                    <tr>
                        <td>Cantidad de Modulos/Paneles</td>
                        <td><?php   echo $arr[5];   ?></td>
                    </tr>
                    <tr>
                        <td>Capacidad de panel Watts</td>
                        <td><?php   echo $arr[6];   ?></td>
                    </tr>
                    <tr>
                        <td>Capacidad Instalada Watts</td>
                        <td><?php   echo $arr[7];   ?></td>
                    </tr>
                    
                    <tr>
                        <td>Fecha de Inicio del proyecto</td>
                        <td><?php   echo $arr[8];   ?></td>
                    </tr>
                    <tr>
                        <td>Fecha de finalizacion del proyecto  </td>
                        <td><?php   echo $arr[9];   ?></td>
                    </tr>
                    <?php
                        $sentence = 'select * from ingeniero_levantamiento where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);

                        $sentence = 'select * from ingeniero where id = ' . $arr[1];
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Ingeniero a cargo del Levantamiento</td>
                        <td><?php   echo $arr[1];   ?></td>
                    </tr>

                </table>
                <br><br>   
            </div>

            <div>
                <legend class="text-center header text-success">Fachada</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from ingreso_lev where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Fachada 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Fachada 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Fachada 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>
            
            
            <div>
                <legend class="text-center header text-success">Area de Instalacion de Paneles</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from area_paneles where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Area de panel 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Area de panel 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Area de panel 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Panoramica</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[5];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Tipo de Superficiea</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from superficie_paneles where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Tipo de superficie</td>
                        <td><p alt=" "><?php   echo $arr[1];   ?> </p></td>
                    </tr>
                    <tr>
                        <td>Imagen 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Imagen 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Imagen 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[5];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Fotografias de los puntos Cardinales</legend>
                <table class="default" BORDER>
                    <?php
                        
                        $sentence = 'select * from puntos_cardinales where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        if($query){
                            $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                            ?>
                            <tr>
                                <td>Norte</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                            </tr>
                            <tr>
                                <td>Sur</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                            </tr>
                            <tr>
                                <td>Este</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                            </tr>
                            <tr>
                                <td>Oeste</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                            </tr>
                            <tr>
                                <td>Observaciones</td>
                                <td><p alt=" "><?php   echo $arr[5];   ?> </p></td>
                            </tr>
                        <?php
                        }
                        else{
                            ?>
                            <h3>No se requirio Obra civil(planta baja)</h3>
                            <?php
                        }
                        ?>
                        
                    
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Pretil</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from pretil where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Altura Maxima</td>
                        <td><p alt=" "><?php   echo $arr[5];   ?> </p></td>
                    </tr>
                    <tr>
                        <td>Altura Minima</td>
                        <td><p alt=" "><?php   echo $arr[6];   ?> </p></td>
                    </tr>
                    <tr>
                        <td>Foto 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Foto 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Foto 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Obstaculos</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from obstaculos where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Obstaculo 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Obstaculo 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Obstaculo 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Trayectoria o Canalizacion de paneles hacia caja combinadora o caja de fusibles</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from trayecto_panel_caja where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Trayecto 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 4</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 5</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[6];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Trayectoria de Caja de fusibles hacia inversor</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from trayecto_caja_inversor where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Trayecto 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 4</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 5</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[6];   ?> </p></td>
                    </tr>
                </table>
            </div>


            <div>
                <legend class="text-center header text-success">Lugar donde se colocara el Inversor</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from lugar_inversor where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Foto 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Foto 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Foto 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Trayectoria de Inversor a centro de carga</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from trayecto_inversor_centro where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Trayecto 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 4</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Trayecto 5</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[6];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Centro de Carga Existente</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from centroc_existente where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                        <tr>
                            <td>Foto de Fases</td>
                            <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                        </tr>
                        <tr>
                            <td>Foto 1</td>
                            <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                        </tr>
                        <tr>
                            <td>Foto 2</td>
                            <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                        </tr>
                        <tr>
                            <td>Foto 3</td>
                            <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                        </tr>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                        </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Medidor</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from medidor where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                        <tr>
                            <td>Tipo de Medidor</td>
                            <td><p alt=" "><?php   echo $arr[2];   ?> </p></td>
                        </tr>
                        <tr>
                            <td>Foto 1</td>
                            <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                        </tr>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $arr[3];   ?> </p></td>
                        </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Otros datos</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from medidor where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                        <tr>
                            <td>Calibre</td>
                            <td><p alt=" "><?php   echo $arr[1];   ?> </p></td>
                        </tr>
                        <tr>
                            <td>Longitud</td>
                            <td><p alt=" "><?php   echo $arr[2];   ?> </p></td>
                        </tr>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $arr[3];   ?> </p></td>
                        </tr>
                </table>
            </div>
            <br><br>
			
		</div>
            </fieldset>
        </form>



    </body>
</html>
