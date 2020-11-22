<?php session_start();?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas_ficha.php" class="btn btn-dark">Listar Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
        <?php
        //Verificamos si existe un mensaje para el usuario
        if (isset($_SESSION['mensaje'])) {
            //mostramos el mensaje
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensaje'] . '</div>';
        }
        ?>
        <div class="row mx-auto">
                    <div class="row mx-auto">
                        <!-- INCLUIR CÓDIGO PHP -->
                        <div class="form-row">
                            <!--verificará si el archivo ya ha sido incluido-->
                            <?php
                            //session_start();
                            require_once 'utils.php'; ?>
                            <?php
                            //llama a la función getpeliculas(); del fichero utils.php para poder leer el fichero peliculas.csv
                            $peliculas = getPeliculas();;
                            //Si existe la pelicula entra en el foreach y añade su valor que es la imagen, luego el nombre y luego sus botones.
                            if (isset($peliculas[1])) {
                                foreach ($peliculas as $key => $value) {
                                    $post = $peliculas[$key][0];
                                    ?>
                                    <div class="col col-md-3">
                                        <center>
                                            <img alt='imagen html pelicula' src='./imgs/peliculas/<?php echo $peliculas[$key][0].".jpg" ?>' width='275' height='500'>
                                            <b><?php echo $peliculas[$key][1]; ?></b><br>
                                            <a href="<?php echo 'peliculas_form.php?id=' . $peliculas[$key][0]; ?>" class='btn btn-dark' style='background-color:DodgerBlue;color:white;'value='Editar'>Editar</a>
                                            <a href="<?php echo 'function_borrar.php?id=' . $peliculas[$key][0]; ?>" class='btn btn-dark' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a>
                                           <!-- <a href="<?php //echo 'function_eliminar.php?id=' . $post; ?>" class='btn btn-dark' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a>--> 
                                            <a href="<?php echo 'actores_ficha.php?id=' . $peliculas[$key][0]; ?>" class='btn btn-dark' style='background-color:DodgerBlue;color:white; value='Actores'>Actores</a>
                                            <a href="<?php echo 'directores_ficha.php?id=' . $peliculas[$key][0]; ?>" class='btn btn-dark' style='background-color:DodgerBlue;color:white; value='Director'>Director</a>
                                        </center>
                                    </div>
                                    <?php
                                }
                            }

                            //Eliminamos los mensaje al usuario
                            if (isset($_SESSION['mensaje'])) {
                                //Destruimos la variable de session
                                unset($_SESSION['mensaje']);
                            }
                               
                            ?>
                        </div>
                    </div>
        </div>
    </div>
</body>

</html>