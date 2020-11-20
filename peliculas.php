<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <style type="text/css">
        .boton.editar { 
            background-color: DodgerBlue;
            color: #ffffff !important;
            border: 2px solid #00c69f;
            border-radius: 7px;
        }
        .boton.borrar { 
            background-color: rgb(255,0,0);
            color: #ffffff !important;
            border: 2px solid #00c69f;
            border-radius: 7px;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <?php// session_start();?>

    <div class="alert alert-secondary d-flex">
        <a href="./peliculas_ficha.php" class="btn btn-dark">Listar Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
        <?php
        //Se verifica si existe un mensaje para el usuario
//        if (isset($_SESSION['mensaje'])) {
            //Se muestra el mensaje por pantalla
//            echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensaje'] . '</div>';
//        }
        ?>

        <div class="row mx-auto">
            <!--
            <table border-spacing='15px'>
                    <tr>
                        <td><a href='https://www.filmaffinity.com/es/film809297.html' id='1' title='El Padrino'><img alt='imagen html pelicula' src='./imgs/peliculas/1.jpg' width='275' height='500' border='5' style='border:2px solid #337AB7'></a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href='https://www.filmaffinity.com/es/film730528.html' id='2' title='El Padrino 2'><img alt='imagen html pelicula' src='./imgs/peliculas/2.jpg' width='275' height='500'border='5' style='border:2px solid #337AB7'></a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href='https://www.filmaffinity.com/es/film448956.html' id='3' title='El Senderos de gloria'><img src='./imgs/peliculas/3.jpg' width='275' height='500'border='5' style='border:2px solid #337AB7'></a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href='https://www.filmaffinity.com/es/film159596.html' id='4' title='Primera Plana'><img src='./imgs/peliculas/4.jpg' width='275' height='500' border='5' style='border:2px solid #337AB7' ></a></td> 
                    </tr>
                    <tr>
                        <td><center><b>El Padrino</b></center></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><center><b>El Padrino 2</b></center></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><center><b>Senderos de gloria</b></center></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><center><b>Primera Plana</b></center></td>
                    </tr> 
                    <tr>
                        <td><center><a href='./peliculas_form.php' class='btn btn-dark' type='submit' style='background-color:DodgerBlue;color:white;'value='Editar'>Editar</a>&nbsp&nbsp<a href='./peliculas_borrado.php' class='btn btn-dark' type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a></center></td>
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td><center><a href='./peliculas_form.php' class='btn btn-dark' type='submit' style='background-color:DodgerBlue;color:white;'value='Editar'>Editar</a>&nbsp&nbsp<a href='./peliculas_borrado.php' class='btn btn-dark' type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a></center></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td><center><a href='./peliculas_form.php' class='btn btn-dark' type='submit' style='background-color:DodgerBlue;color:white;'value='Editar'>Editar</a>&nbsp&nbsp<a href='./peliculas_borrado.php' class='btn btn-dark' type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a></center></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td><center><a href='./peliculas_form.php' class='btn btn-dark' type='submit' style='background-color:DodgerBlue;color:white;'value='Editar'>Editar</a>&nbsp&nbsp<a href='./peliculas_borrado.php' class='btn btn-dark' type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a></center></td>  
                    </tr> 
                </table>--> 
                    <div class="row mx-auto">
                        <!-- INCLUIR CÓDIGO PHP -->
                        <div class="form-row">
                            <!--verificará si el archivo ya ha sido incluido-->
                            <?php 
                            require_once 'utils.php'; ?>
                            <?php
                            //llama a la función getpeliculas(); del fichero utils.php para poder leer el fichero peliculas.csv
                            $peliculas = getPeliculas();
                            //Si existe la pelicula entra en el foreach y añade su valor que es la imagen, luego el nombre y luego sus botones.
                            if (isset($peliculas[1])) {
                                foreach ($peliculas as $key => $value) {
                                    ?>
                                    <div class="col col-md-3">
                                        <center>
                                            <img alt='imagen html pelicula' src='./imgs/peliculas/<?php echo $peliculas[$key][0].".jpg" ?>' width='275' height='500'>
                                            <b><?php echo $peliculas[$key][1]; ?></b><br>
                                            <a href="<?php echo 'peliculas_form.php?id=' . $peliculas[$key][0]; ?>" class='btn btn-dark' style='background-color:DodgerBlue;color:white;'value='Editar'>Editar</a>
                                            <a href="<?php echo 'function_borrar.php?id=' . $peliculas[$key][0]; ?>" class='btn btn-dark' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a>
                                        </center>
                                    </div>
                                    <?php
                                }
                            }
                            //Eliminamos los mensaje al usuario
 //                           if (isset($_SESSION['mensaje'])) {
                                //borro la variable de session
 //                               unset($_SESSION['mensaje']);
 //                           }    
                            ?>
                        </div>
                    </div>
        </div>
    </div>
</body>

</html>