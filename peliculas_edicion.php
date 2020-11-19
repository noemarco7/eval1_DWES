<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Película guardada</title>
</head>

<body>
<div class="alert alert-success" role="alert">
            <!-- INCLUIR CÓDIGO PHP -->
            <?php
            //funcion editar pelicula
            if (isset($_POST['btn_editar'])) {
                //Se verifica los campos que se envian 
                if (empty($_POST['nombre']) or empty($_POST['fecha']) or empty($_POST['duracion'])) {
                    //Si los campos estan vacios se vuelve a la pagina index
                    header("Location: ../eval1_dwes/index.html");
                } else {
                    //Si no se recoge los datos del formulario del array 
                    $array_datos = array(
                        'id' => $_POST['id'],
                        'titulo' => $_POST['nombre'],
                        'fecha' => $_POST['fecha'],
                        'duracion' => $_POST['duracion'],   
                        'foto' => $_POST['foto'],
                    );
                    //Se coge los valores del archivo.csv
                    $aLineas = file("./bbdd/peliculas.csv");
                    //Esta es la linea donde se ha de reemplazar
                    $linea = $aLineas[$array_datos['id'] -1];
                    //Esta es la nueva linea
                    $new_linea = $array_datos['id'] . "," . $array_datos['titulo'] . "," . $array_datos['fecha'] . ","
                            . $array_datos['duracion'] . "," . $array_datos['foto']."\n";
                    //fichero donde esta el contenido 
                    $file = file_get_contents('./bbdd/peliculas.csv');
                    //donde se reemplaza 
                    $resultado = str_replace($linea, $new_linea, $file); 
                    //Abrimos el archivo en modo escritura
                    $file = fopen("./bbdd/peliculas.csv", "w"); 
                    //Reescribimos el archivo con los nuevos datos
                    fwrite($file, $resultado); 
                    //Cerramos el archvo.
                    fclose($file); 
                    //Retrocedemos a la pagina para ver los cambios
                    //header("Location: ../eval1_dwes/peliculas.php");    
                    echo 'Los datos se han guardado con éxito';                
                }
            } else {
                header("Location: ../eval1_dwes/index.html");
            }
            ?>
            <br>
            <a href="index.html"  style='background-color:rgb(95, 191, 245);color:white;'>Volver al inicio </a>
</body>

</html>