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
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
        <div class="row mx-auto">
            <!-- INCLUIR CÓDIGO PHP -->
            <?php
            echo "<table border-spacing='15px'>";
                echo "<tr>";
                    echo "<td><a href='https://www.filmaffinity.com/es/film809297.html' title='El Padrino'><img alt='imagen html pelicula' src='./imgs/peliculas/1.jpg' width='275' height='500' border='5' style='border:2px solid #337AB7'></a></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><a href='https://www.filmaffinity.com/es/film730528.html' title='El Padrino 2'><img alt='imagen html pelicula' src='./imgs/peliculas/2.jpg' width='275' height='500'border='5' style='border:2px solid #337AB7'></a></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><a href='https://www.filmaffinity.com/es/film448956.html' title='El Senderos de gloria'><img src='./imgs/peliculas/3.jpg' width='275' height='500'border='5' style='border:2px solid #337AB7'></a></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><a href='https://www.filmaffinity.com/es/film159596.html' title='Primera Plana'><img src='./imgs/peliculas/4.jpg' width='275' height='500'border='5' style='border:2px solid #337AB7' ></a></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><center><b>El Padrino</b></center></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><center><b>El Padrino 2</b></center></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><center><b>Senderos de gloria</b></center></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><center><b>Primera Plana</b></center></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><center><input type='submit' style='background-color:DodgerBlue;color:white;' value='Editar'/>&nbsp&nbsp<input type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'/></center></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><center><input type='submit' style='background-color:DodgerBlue;color:white;' value='Editar'/>&nbsp&nbsp<input type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'/></center></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><center><input type='submit' style='background-color:DodgerBlue;color:white;' value='Editar'/>&nbsp&nbsp<input type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'/></center></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><center><input type='submit' style='background-color:DodgerBlue;color:white;' value='Editar'/>&nbsp&nbsp<input type='submit' style='background-color:rgb(255,0,0);color:white;' value='Borrar'/></center></td>";
                echo "</tr>";
           echo "</table>";
            ?>
        </div>
    </div>
</body>

</html>