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
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
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
                $datos_peliculaD = detailPelicula($id_pelicula);
            } else {
                header("Location: http://localhost/eval1_dwes/peliculas.php");
            }


            //Se verifica que exista el id de directores.
            if (isset($_GET['id']) && $_GET['id'] != "") {
                //Se asigna el valor nuevo a la id.
                $id_director = $_GET['id'];
                //Se obtiene los datos a travez de la función 
                $datos_director = detailDirector($id_director);
            } else {
                header("Location: http://localhost/eval1_dwes/peliculas.php");
            } 

            
           // print_r($pelis);

    ?>


    <div class="row mx-auto">
            <div class="form-row">
                <div class="col col-md-6">
                <!--FORMULARIO-->
                    <form method="post" action="peliculas.php">
                       <fieldset>
                            
                                <b><label>Titulo de la Pélicula:</label></b>
                                <input class="form form-control" type="text" name="titulo" value="<?php echo $datos_peliculaD[1]; ?>"> 
                            
                                <b><label>Fecha de Estreno:</label></b>
                                <input class="form form-control" type="text" name="fecha" value="<?php echo $datos_peliculaD[2]; ?>"> 
                            
                                <b><label>Duración de la pélicula:</label></b>
                                <input class="form form-control" type="text" name="duracion" value="<?php echo $datos_peliculaD[3]; ?>"> 
                            
                                <b><label>Nombre de director:</label></b>
                                <input class="form form-control" type="text" name="nombre" value="<?php echo $datos_director[1]; ?>"> 
                            
                                <b><label>Año de nacimiento:</label></b>
                                <input class="form form-control" type="text" name="anyo" value="<?php echo $datos_director[2]; ?>"> 
                            
                                <b><label>País:</label></b>
                                <input class="form form-control" type="text" name="pais" value="<?php echo $datos_director[3]; ?>">
                           
                       </fieldset>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>

</html>