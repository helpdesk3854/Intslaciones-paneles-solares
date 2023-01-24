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
                <a href="avance_view.php">Reporte diario</a>
                <a href="../reporte_final/proyectos.php">Reporte Final</a>
            </nav>
        </header>

        <div class="page-header bg-dark text-white text-center">
            <?php
            session_start();
            include_once("../conexion.php");
            $idproyect = $_REQUEST['id_proyect'];

            $sentence = 'select nombre_proyecto from proyecto where id = ' . $idproyect;
            $query = pg_query($conexion,$sentence );
            $arr = pg_fetch_array($query, 0, PGSQL_NUM);
            ?>
                <span class="h4">Reporte Diario: <?php   echo $arr[0];   ?></span>
        </div><br><br>

        <div class="container">
            <?php
            $sentence = 'select * from avance where id_proyecto = ' . $idproyect;
            $query = pg_query($conexion,$sentence );

                while ($row = pg_fetch_row($query)) {
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
                    
                }
            ?>
        </div>

        <div class="go-top-container">
            <div class="go-top-button">
                <i class="fas fa-chevron-up"></i>
            </div>
        </div>

        <script src="../js/boton.js"></script>
    </body>
</html>
