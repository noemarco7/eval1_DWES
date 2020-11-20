<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Directores | Ficha</title>
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
    <?php require_once 'utils.php'; ?>
    <?php                
            //Se verifica que exista el id de la pelicula.
            if (isset($_GET['id']) && $_GET['id'] != "") {
                //Se asigna el valor nuevo a la id.
                $id_pelicula = $_GET['id'];
                //Se obtiene los datos a travez de la función 
                $datos_peliculaA = detailPelicula($id_pelicula);
            } else {
                header("Location: http://localhost/eval1_dwes/peliculas.php");
            }
            
            //Se verifica que exista el id de la pelicula.
            if (isset($_GET['id']) && $_GET['id'] != "") {
                //Se asigna el valor nuevo a la id.
                $id_actores = $_GET['id'];
                //Se obtiene los datos a travez de la función 
                $datos_actores = detailActor($id_actores);
            } else {
                header("Location: http://localhost/eval1_dwes/peliculas.php");
            }
 ?>



    <div class="row mx-auto">
            <div class="form-row">
                <div class="col col-md-6">
                <!--FORMULARIO-->
                           
                    <form method="post" action="peliculas.php">
                        <table>
                            <tr>
                                <td><b><label>Titulo de pélicula:</label></b></td>
                                <td><input class="form form-control" type="text" name="nombre" value="<?php echo $datos_peliculaA[1]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><b><label>Fecha de estreno:</label></b></td>
                                <td><input class="form form-control" type="text" name="fecha" value="<?php echo $datos_peliculaA[2]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><b><label>Duración:</label></b></td>
                                <td>
                                    <input class="form form-control" type="text" name="duracion" value="<?php echo $datos_peliculaA[3]; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><b><label>Nombres de actores:</label></b></td>
                                <td><input class="form form-control" type="text" name="nombre" value="<?php echo $datos_actores[1]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><b><label>Año:</label></b></td>
                                <td><input class="form form-control" type="text" name="fecha" value="<?php echo $datos_actores[2]; ?>"> </td>
                            </tr>
                            <tr>
                                <td><b><label>País:</label></b></td>
                                <td>
                                    <input class="form form-control" type="text" name="duracion" value="<?php echo $datos_actores[3]; ?>">
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