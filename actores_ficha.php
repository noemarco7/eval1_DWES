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
        <?php
        require_once './utils.php';
        //Se verifica que exista el id de la pelicula.
        if (isset($_GET['id']) && $_GET['id'] != "") {
            //Se asigna el valor nuevo a la id.
            $id_pelicula = $_GET['id'];
            //Se obtiene los datos a travez de la función 
            $datos_pelicula = detailPelicula($id_pelicula);
            /* echo "<h1>Datos Pelicula</h1>";
              print_r($datos_pelicula); */

            #Obtenemos los actores de esta pelicula...
            $actores = lista_actores($_GET['id']);

            #Obtenemos los espacios del arreglo +1 
            $n_arreglo = count($actores);


            for ($i = 1; $i < $n_arreglo + 1; $i++) {
                #Almacenamos en un arreglo las posiciones de los actores...
                $array_position[$i] = $actores[$i][1];
            }

            #Obtenemos todos los actores...
            $lineas = file('./bbdd/actores.csv');

            #Buscamos los actores respcto a las lineas obteneidas...
            for ($i = 1; $i < $n_arreglo + 1; $i++) {
                $linea_actor = $array_position[$i];
                #Almacenamos los datos de los actores en un arreglo menos uno ya que el arreglo
                #de actores empieza desde el espacio 0...
                $lista_actores[$i] = $lineas[$linea_actor - 1];
            }
        } else {
            header("Location: http://localhost/eval1_dwes/peliculas.php");
        }
        ?>

        <div class="col col-md-3">
            <h4><strong>"<?php echo $datos_pelicula[1]; ?>"</strong></h4>
            <center>
                <table border="2">
                    <tr>
                        <td colspan="<?php echo $n_arreglo; ?>">
                            <img alt='imagen html pelicula' src='./imgs/peliculas/<?php echo $datos_pelicula[0] . ".jpg" ?>' width='250' height='250'>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-dark text-white"><strong>Titulo:</strong></td>
                        <td colspan="3"><?php echo $datos_pelicula[1]; ?></td>
                    </tr>
                    <tr>
                        <td class="bg-dark text-white"><strong>Año:</strong></td>
                        <td colspan="3"><?php echo $datos_pelicula[2]; ?></td>
                    </tr>
                    <tr>
                        <td class="bg-dark text-white"><strong>Reproducciones:</strong></td>
                        <td colspan="3"><?php echo $datos_pelicula[3]; ?></td>
                    </tr>
                </table>
            </center>
            <br>
            <table border="2">
                <tr>
                    <td class="bg-dark text-white" colspan="<?php echo $n_arreglo; ?>"><strong>Actores:</strong></td>
                </tr>
                <?php
                for ($i = 1; $i < $n_arreglo + 1; $i++) {
                    if (isset($array_position[$i]) && $array_position[$i] != "") {
                        $linea_actor = $array_position[$i];
                        #Imprimimos los actores...
                        echo "<td>" . $lineas[$linea_actor - 1] . "</td>";
                    }else{
                        echo "<td>No se han encontrado actores</td>";
                    }
                }
                ?>
            </table>
        </div>
        <br>
    </div>
</body>

</html>