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
            require_once 'utils.php';

                $peliculas = getPeliculas();
                echo '<p><b>Array de peliculas:</b></p>';
                print_r($peliculas);
                echo '<br>';
            /*    
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
            */
        ?>
        
        
    </div>
</body>

