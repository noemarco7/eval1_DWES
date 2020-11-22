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
        <?php       //MISMO PROCEDIMIENTO QUE CON ACTORES FICHA
        require_once './utils.php';
        //Se verifica que exista el id de la pelicula.
        if (isset($_GET['id']) && $_GET['id'] != "") {
            //Se asigna el valor nuevo a la id.
            $id_pelicula = $_GET['id'];
            //Se obtiene los datos a travez de la función 
            $datos_pelicula = detailPelicula($id_pelicula);
            //Se obtiene los actores de esta pelicula
            $director = lista_director($_GET['id']);
            //Se obtiene los espacios del arreglo +1 
            $n_arreglo = count($director);
            //bucle for
            for ($i = 1; $i < $n_arreglo + 1; $i++) {
                //Se almacena en un arreglo las posiciones de los director
                $array_position[$i] = $director[$i][1];
            }
            //Se obtiene todos los directores
            $lineas = file('./bbdd/directores.csv');
            //Se busca los directores respecto a las lineas obtenidas
            for ($i = 1; $i < $n_arreglo + 1; $i++) {
                $linea_director = $array_position[$i];
                //se almacena los datos de los actores en un arreglo menos uno ya que el arreglo
                //de actores empieza desde el espacio 0
                $lista_director[$i] = $lineas[$linea_director - 1];
            }
        } else {
            header("Location: http://localhost/eval1_dwes/peliculas.php");
        }
        ?>
        <!--Como se imprime los datos por pantalla -->
        <div class="col col-md-3">
            <h4><strong>"<?php echo $datos_pelicula[1]; ?>"</strong></h4>
            <center>
                <table border="2">
                    <tr>
                        <td colspan="<?php echo $n_arreglo; ?>"> <!-- Imagen de la pelicula que se va ha obtener la información -->
                            <img alt='imagen html pelicula' src='./imgs/peliculas/<?php echo $datos_pelicula[0] . ".jpg" ?>' width='250' height='250'>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-dark text-white"><strong>Titulo:</strong></td> <!-- Etiqueta donde está la información -->
                        <td colspan="3"><?php echo $datos_pelicula[1]; ?></td> <!-- salida de datos -->
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
                <tr>   <!--Directores -->
                    <td class="bg-dark text-white" colspan="<?php echo $n_arreglo; ?>"><strong>Directores:</strong></td>
                </tr>
                <?php
                for ($i = 1; $i < $n_arreglo + 1; $i++) {
                    if (isset($array_position[$i]) && $array_position[$i] != "") {
                        $linea_director = $array_position[$i];
                        //Se imprime los directores
                        echo "<td>" . $lineas[$linea_director - 1] . "</td>";
                    }else{
                        echo "<td>No se han encontrado director</td>";
                    }
                }
                ?>
            </table>
        </div>
        <br>
    </div>
</body>

</html>