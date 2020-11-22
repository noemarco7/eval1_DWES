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
    <div class="alert alert-secondary d-flex">
        <a href="../clases/peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
        <?php
        
        if (isset($_SESSION['mensaje'])) {
            
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensaje'] . '</div>';
        }
        ?>
        <div class="row mx-auto">
            <!-- INCLUIR CÓDIGO PHP -->
            <div class="form-row">

                <?php
                session_start();

                require_once 'getPeliculas.php';

                $peliculas = getPeliculas();

                if (isset($peliculas[1])) {
                    foreach ($peliculas as $key => $value) {
                        $post = $peliculas[$key][0];
                        ?>
                        <div class="col col-md-3">
                            <center>
                                <img alt='imagen html pelicula' src='./imgs/peliculas/<?php echo $peliculas[$key][4]; ?>' width='275' height='500'>
                                <b><?php echo $peliculas[$key][1]; ?></b><br>
                                
                                <a href="<?php echo 'function_eliminar.php?id=' . $post; ?>" class='btn btn-dark' style='background-color:rgb(255,0,0);color:white;' value='Borrar'>Borrar</a>
                            </center>
                        </div>
                        <?php
                    }
                }

               
                if (isset($_SESSION['mensaje'])) {
                   
                    unset($_SESSION['mensaje']);
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>