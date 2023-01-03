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
			<a href="../levantamiento/levantamiento_view.php">Levantamiento</a>
            <a href="../avance_diario/avance_view.php">Reporte diario</a>
			<a href="../reporte_final/proyectos.php">Reporte Final</a>
		</nav>
	</header>
    <div class="page-header bg-dark text-white text-center">
		<span class="h4">Reporte Final</span>
	</div>
<?php
    session_start();
    include_once("C:/xampp/htdocs/instalaciones/conexion.php");
	$idproyect = $_REQUEST['id_proyect'];
    //$_SESSION["idproyect"] = $idproyect;

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
                <legend class="text-center header text-success">Proyecto</legend>
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
                        <td>Fecha de finalizacion del proyecto</td>
                        <td><?php   echo $arr[9];   ?></td>
                    </tr>
                    <?php
                        $sentence = 'select * from ingeniero_proyect where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);

                        $sentence = 'select * from ingeniero where id = ' . $arr[1];
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Ingeniero a cargo del Proyecto</td>
                        <td><?php   echo $arr[1];   ?></td>
                    </tr>

                </table>
                <br><br>
            </div>
            <div>
                <legend class="text-center header text-success">Fachada</legend>
                <table class="default" BORDER>  
                    <?php
                        $sentence = 'select * from ingreso where id_proyecto = ' . $idproyect;
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
                <legend class="text-center header text-success">Inversor</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from inversor where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Inversor</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Etiqueta</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Cableado</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Generando</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Cableado de Gusano</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[6];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Centro de Carga</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from centro_carga where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Centro de Carga</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>ITM(Interruptor Termo Magnetico)</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Cableado</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Obra civil(Planta Baja)</legend>
                <table class="default" BORDER>
                    <?php
                        
                        $sentence = 'select * from obra_civil_plantabaja where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        if($query){
                            $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                            ?>
                            <tr>
                                <td>Planta baja 1</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                            </tr>
                            <tr>
                                <td>Planta baja 2</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                            </tr>
                            <tr>
                                <td>Planta baja 3</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                            </tr>
                            <tr>
                                <td>Observaciones</td>
                                <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
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
                <legend class="text-center header text-success">Tuberia</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from tuberia where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Fijacion de Tuberia</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Abrazadera</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Unicanal</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Condulet</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Glandulas   </td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Cruce de Muro</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[6];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Cruce de Bobeda</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[7];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[8];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Caja combinadora / Gabinete himel</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from caja_gabinete where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Caja combinadora / Gabinete himel</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Fusibles</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Peinado de cables</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Estructura de Paneles</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from estructura where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Fijacion de los Modulos</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Entrepaneles</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Orillas</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Sub-Estructura</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Fijacion Estructura</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[6];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Paneles</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from paneles where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Cantidad</td>
                        <td><p alt=" "><?php   echo $arr[2];   ?> </td>
                    </tr>
                    <tr>
                        <td>Capacidad</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Paneles 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Paneles 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Paneles 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Paneles 4</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[6];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Panoramica</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[7];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[8];   ?> </p></td>
                    </tr>
                </table>
            </div>


            <div>
                <legend class="text-center header text-success">MC4</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from mc4 where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>MC4 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>MC4 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>MC4 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Cinchado del cableado</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from cinchado_cableado where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Cinchado 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Cinchado 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Cinchado 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                    </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Obra Civil(Planta Alta)</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from obra_civil_plantalta where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                        <tr>
                                    <td>Planta baja 1</td>
                                    <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Planta baja 2</td>
                                    <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Planta baja 3</td>
                                    <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Observaciones</td>
                                    <td><p alt=" "><?php   echo $arr[4];   ?> </p></td>
                                </tr>
                </table>
            </div>

            <div>
                <legend class="text-center header text-success">Extras</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from extras where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        $arr = pg_fetch_array($query, 0, PGSQL_NUM);
                    ?>
                    <tr>
                        <td>Medidor Antiguo</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[1];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Extra 1</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[2];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Extra 2</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[3];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Extra 3</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[4];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Extra 4</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[5];   ?>" ></td>
                    </tr>
                    <tr>
                        <td>Extra 5</td>
                        <td><img class="img-fluid" alt=" " src= "<?php   echo $arr[6];   ?>" ></td>
                    </tr>
                </table>
            </div>
			
		</div>

            </fieldset>
        </form>
</body>
</html>
