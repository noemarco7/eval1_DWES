<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas | Ficha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Listar Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
       <!-- INCLUIR CÓDIGO PHP -->
        <?php
        /*
            //Se busca el archivo para buscar la función que se necesita
            require_once './utils.php';
            //Se verifica que exista el id de la pelicula.
            if (isset($_GET['id']) && $_GET['id'] != "") {
                //Se asigna el valor nuevo a la id.
                $id_pelicula = $_GET['id'];
                //Se obtiene los datos a travez de la función 
                $datos_pelicula = detailPelicula($id_pelicula);
            } else {
                header("Location: http://localhost/eval1_dwes/peliculas.php");
            }
            */
            require_once 'utils.php';

                $peliculas = getPeliculas();
                echo '<p><b>Array de peliculas:</b></p>';
                print_r($peliculas);
                echo '<br>';
                
                $director = getDirector();
                echo '<p><b>Array de Directores:</b></p>';
                print_r($director);
                echo '<br>';

                $actor = getActor();
                echo '<p><b>Array de Actores:</b></p>';
                print_r($actor);    
                echo '<br>';
                
                $peliactor = get_peliActor();
                echo '<p><b>Array de pelicula_actor:</b></p>';
                print_r($peliactor); 
                echo '<br>';
                
                $pelidirector = get_pelidirector();
                echo '<p><b>Array de pelicula_actor:</b></p>';
                print_r($pelidirector); 

        ?>
        <!--
        <div class="row mx-auto">
            <div class="form-row">
                <div class="col col-md-6">
                
                    <form method="post" action="peliculas.php">
                        <table>
                            <tr>
                                <td><b><label>Titulo:</label></b></td>
                                <td><input class="form form-control" type="text" name="nombre" value="<?php //echo $datos_pelicula[1]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><b><label>Año:</label></b></td>
                                <td><input class="form form-control" type="text" name="fecha" value="<?php //echo $datos_pelicula[2]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><b><label>Duración:</label></b></td>
                                <td>
                                    <input class="form form-control" type="text" name="duracion" value="<?php //echo $datos_pelicula[3]; ?>">
                                </td>
                            </tr>
                           <tr>
                                <td><b><label>Director/es:</label></b></td>
                                <td>
                                    <input class="form form-control" type="text" name="director" value="<?php //echo $datos_pelicula[3]; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><b><label>Actores:</label></b></td>
                                <td>
                                    <input class="form form-control" type="text" name="actores" value="<?php //echo $datos_pelicula[3]; ?>">
                                </td>
                            </tr> 
                        </table>
                    </form>
                </div>
            </div>
        </div>-->
        
    </div>
</body>

