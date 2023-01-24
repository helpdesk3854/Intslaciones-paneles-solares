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
                <a href="../levantamiento/levantamiento_view.php">Levantamiento</a>
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

                $sentence = 'select nombre_proyecto from proyecto where id = ' . $idproyect;
                $query = pg_query($conexion,$sentence );
                $arr = pg_fetch_array($query, 0, PGSQL_NUM);
            ?>
            <span class="h4">Reporte Final: <?php   echo $arr[0];   ?></span>
        </div>
        
        
        <div class="container">

            <div class="idc-box">
                <p class="idc-titulo">Indice</p>
                <ul class="idc-lista">
                    <li><a href="#proyecto">Proyecto</a></li>
                    <li><a href="#fachada">Fachada</a></li>
                    <li><a href="#inversor">Inversor</a></li>
                    <li><a href="#centrocarga">Centro de Carga</a></li>
                    <li><a href="#plantaBaja">Obra Civil(Planta Baja)</a></li>
                    <li><a href="#tuberia">Tuberia</a></li>
                    <li><a href="#cajagabinete">Caja combinadora / Gabinete himel</a></li>
                    <li><a href="#estructPaneles">Estructura de Paneles</a></li>
                    <li><a href="#paneles">Paneles</a></li>
                    <li><a href="#mc4">Mc4</a></li>
                    <li><a href="#cinchCableado">Cinchado del cableado</a></li>
                    <li><a href="#plantaAlta">Obra Civil(Planta Alta)</a></li>
                    <li><a href="#extras">Extras</a></li>
                </ul>
            </div>


            <div>
                <legend id ="proyecto" class="text-center header text-success">Proyecto</legend>
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
                </table><br><br>
            </div>

            <div>
                <legend id="fachada" class="text-center header text-success">Fachada</legend>
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
                <legend id="inversor" class="text-center header text-success">Inversor</legend>
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
                <legend id="centrocarga" class="text-center header text-success">Centro de Carga</legend>
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
                <legend id="plantaBaja" class="text-center header text-success">Obra civil(Planta Baja)</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from obra_civil_plantabaja where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        if($query){
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
                <legend id="tuberia" class="text-center header text-success">Tuberia</legend>
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
                <legend id="cajagabinete" class="text-center header text-success">Caja combinadora / Gabinete himel</legend>
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
                <legend id="estructPaneles" class="text-center header text-success">Estructura de Paneles</legend>
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
                <legend id="paneles" class="text-center header text-success">Paneles</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from paneles where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence);
                        $band=0;
                        while ($row = pg_fetch_row($query)) {
                            if($band==0){
                                ?>
                                <tr>
                                    <td>Cantidad de paneles</td>
                                    <td><p alt=" "><?php   echo $row[1];   ?> </p></td>
                                </tr>
                                <?php
                                $band=1;
                            }
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
            </div>


            <div>
                <legend id="mc4" class="text-center header text-success">MC4</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from mc4 where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
                        if($query){
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
                <legend id="cinchCableado" class="text-center header text-success">Cinchado del cableado</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from cinchado_cableado where id_proyecto = ' . $idproyect;
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
            </div>
            

            <div>
                <legend id="plantaAlta" class="text-center header text-success">Obra Civil(Planta Alta)</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from obra_civil_plantalta where id_proyecto = ' . $idproyect;
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
            </div>

            <div>
                <legend id="extras" class="text-center header text-success">Extras</legend>
                <table class="default" BORDER>
                    <?php
                        $observacion ="";
                        $sentence = 'select * from extras where id_proyecto = ' . $idproyect;
                        $query = pg_query($conexion,$sentence );
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