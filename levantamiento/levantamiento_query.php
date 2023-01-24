<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="../boton.css">
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

        <div class="page-header bg-dark text-white text-center">
            <?php
                error_reporting(0);
                session_start();
                include_once("../conexion.php");
                $idproyect = $_REQUEST['id_proyect'];
                $_SESSION["idproyect"] = $idproyect;

                $sentence = 'select nombre_proyecto from proyecto where id = ' . $idproyect;
                $query = pg_query($conexion,$sentence );
                $arr = pg_fetch_array($query, 0, PGSQL_NUM);
            ?>
            <span class="h4">Levantamiento: <?php   echo $arr[0];   ?></span>
        </div>
        <br><br>


        <div class="container">

            <div class="idc-box">
                <p class="idc-titulo">Indice</p>
                <ul class="idc-lista">
                    <li><a href="#levproyecto">Proyecto</a></li>
                    <li><a href="#levfachada">Fachada</a></li>
                    <li><a href="#levAreaPaneles">Area de Instalacion de Paneles</a></li>
                    <li><a href="#levTipSup">Tipo de Superficiea</a></li>
                    <li><a href="#levPuntosCardinales">Fotografias de los puntos Cardinales</a></li>
                    <li><a href="#levPretil">Pretil</a></li>
                    <li><a href="#levObstaculos">Obstaculos</a></li>
                    <li><a href="#levPanleCc">Trayectoria o Canalizacion de paneles hacia caja combinadora o caja de fusibles</a></li>
                    <li><a href="#levCcInversor">Trayectoria de Caja de fusibles hacia inversor</a></li>
                    <li><a href="#levLugarInversor">Lugar donde se colocara el Inversor</a></li>
                    <li><a href="#levInversorCc">Trayectoria de Inversor a centro de carga</a></li>
                    <li><a href="#levCcExistente">Centro de Carga Existente</a></li>
                    <li><a href="#levMedidor">Medidor</a></li>
                    <li><a href="#levOtrsoDatos">Otros datos</a></li>
                    
                </ul>
            </div>

            <div>
                <legend id="levproyecto" class="text-center header text-success">Proyecto Levantamiento</legend>
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
            </div><br><br>  

            <div>
                <legend id="levfachada" class="text-center header text-success">Fachada</legend>
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
            </div><br>
            
            <div>
                <legend id="levAreaPaneles" class="text-center header text-success">Area de Instalacion de Paneles</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from area_paneles where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[2];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                    
                </table>
            </div><br>

            <div>
                <legend id="levTipSup" class="text-center header text-success">Tipo de Superficiea</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from superficie_paneles where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[2];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[3];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                    
                </table>
            </div><br>

            <div>
                <legend id="levPuntosCardinales" class="text-center header text-success">Fotografias de los puntos Cardinales</legend>
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
            </div><br>

            <div>
                <legend id="levPretil" class="text-center header text-success">Pretil</legend>
                <table class="default" BORDER>

                    <?php
                        $observacion ="";
                        $maxima="";
                        $minima="";
                        $sentence = 'select * from pretil where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[4];
                            $maxima = $row[2];
                            $minima = $row[3];
                        }
                        ?>
                        <tr>
                            <td>Maxima</td>
                            <td><p alt=" "><?php   echo $maxima;   ?> </p></td>
                        </tr>
                        <tr>
                            <td>Minima</td>
                            <td><p alt=" "><?php   echo $minima;   ?> </p></td>
                        </tr>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                </table>
            </div><br>

            <div>
                <legend id="levObstaculos" class="text-center header text-success">Obstaculos</legend>
                <table class="default" BORDER>
                <?php
                        $observacion ="";
                        $sentence = 'select * from obstaculos where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[2];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                </table>
            </div><br>

            <div>
                <legend id="levPanleCc" class="text-center header text-success">Trayectoria o Canalizacion de paneles hacia caja combinadora o caja de fusibles</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from trayecto_panel_caja where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[2];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                </table>
            </div><br>

            <div>
                <legend id="levCcInversor" class="text-center header text-success">Trayectoria de Caja de fusibles hacia inversor</legend>
                <table class="default" BORDER>
                <?php
                        $observacion ="";
                        $sentence = 'select * from trayecto_caja_inversor where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[2];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                </table>
            </div><br>

            <div>
                <legend id="levLugarInversor" class="text-center header text-success">Lugar donde se colocara el Inversor</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from lugar_inversor where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[2];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                </table>
            </div><br>

            <div>
                <legend id="levInversorCc" class="text-center header text-success">Trayectoria de Inversor a centro de carga</legend>
                <table class="default" BORDER>
                <?php
                        $observacion ="";
                        $sentence = 'select * from trayecto_inversor_centro where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[2];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                </table>
            </div><br>

            <div>
                <legend id="levCcExistente" class="text-center header text-success">Centro de Carga Existente</legend>
                <table class="default" BORDER>
                <?php
                        $observacion ="";
                        $sentence = 'select * from centroc_existente where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        while ($row = pg_fetch_row($query)) {
                            ?>
                            <tr>
                                <td>Imagen</td>
                                <td><img class="img-fluid" alt=" " src= "<?php   echo $row[1];   ?>" ></td>
                            </tr>
                            <?php
                            $observacion = $row[2];
                        }
                        ?>
                        <tr>
                            <td>Observaciones</td>
                            <td><p alt=" "><?php   echo $observacion;   ?> </p></td>
                        </tr>
                </table>
            </div><br>

            <div>
                <legend id="levMedidor" class="text-center header text-success">Medidor</legend>
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
            </div><br>

            <div>
                <legend id="levOtrsoDatos" class="text-center header text-success">Otros datos</legend>
                <table class="default" BORDER>
                    <?php
                        $sentence = 'select * from tipo where id_proyecto = ' . $idproyect;
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

        <div class="go-top-container">
            <div class="go-top-button">
                <i class="fas fa-chevron-up"></i>
            </div>
        </div>

        <script src="../js/boton.js"></script>
    </body>
</html>