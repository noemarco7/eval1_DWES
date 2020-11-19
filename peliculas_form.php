<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edición de películas</title>
</head>

<body>

    <div class="container">
        <h1>Edición de películas</h1>
		 <!-- INCLUIR CÓDIGO PHP -->
         <?php
            //Se busca el archivo para buscar la función que se necesita
            require_once './utils.php';

            //Se verifica que exista el id de la pelicula...
            if (isset($_GET['id']) && $_GET['id'] != "") {
                //Se asigna el valor nuevo a la id...
                $id_pelicula = $_GET['id'];
                //Se obtiene los datos a travez de la función 
                $datos_pelicula = detailPelicula($id_pelicula);
            } else {
                header("Location: http://localhost/eval1_dwes/peliculas.php");
            }
        ?>
        <div class="row mx-auto">
            <div class="form-row">
                <div class="col col-md-6">
                    <center>
                        <img alt='imagen html pelicula' src='./imgs/peliculas/<?php echo $datos_pelicula[0].".jpg"; ?>' width="50%">
                    </center>
                </div>
                <div class="col col-md-6">
                    <form method="post" action="peliculas_edicion.php">
                        <table>
                            <input type="hidden" name="id" value="<?php echo $datos_pelicula[0]; ?>">
                            <input type="hidden" name="foto" value="<?php echo $datos_pelicula[0]; ?>">
                            <tr>
                                <td><label>Titulo:</label></td>
                                <td><input class="form form-control" type="text" name="nombre" value="<?php echo $datos_pelicula[1]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><label>Fecha:</label></td>
                                <td><input class="form form-control" type="text" name="fecha" value="<?php echo $datos_pelicula[2]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><label>Duración:</label></td>
                                <td>
                                    <input class="form form-control" type="text" name="duracion" value="<?php echo $datos_pelicula[3]; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="btn_editar" class='btn btn-dark' style='background-color:DodgerBlue;color:white;'value='Editar'>Guardar</button>
                                </td>
                                <td>
                                    <a href="peliculas.php" class='btn btn-dark' style='background-color:rgb(255,0,0);color:white;'>Cancelar</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>