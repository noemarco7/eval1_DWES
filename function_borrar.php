<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Funcion Borrar película</title>
</head>
<body>
<div class="alert alert-success" role="alert">
            <!-- INCLUIR CÓDIGO PHP -->
            <?php

            //Se verifica si existe un mensaje para el usuario
          if (isset($_SESSION['mensaje'])) {
                //Se muestra el mensaje por pantalla
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensaje'] . '</div>';
            }
           //Inicializamos la sesion para mostrar mensajes 
            session_start();
            //Buscamos el archivo para obtener la pelicula
            require_once './utils.php';

            //Verificamos que exista el id de la pelicula
            if (isset($_GET['id']) && $_GET['id'] != "") {
                #Reasignamos el valor del id...
                $id_pelicula = $_GET['id'];
                //Obtenemos lo sdatos de la pelicula por medio de la funcion
                $datos_pelicula = detailPelicula($id_pelicula);

                // Inicializamos nuestras variables
                $i = 0; //contador de línea que se está leyendo
                $numlinea = $id_pelicula + 1; //linea que se desea borrar -1 para tomar el indice principal, aignamos el id
                $aux = array();

            // Abrimos el archivo
                $file = './bbdd/peliculas.csv';
                $borrar = $datos_pelicula[0] . "," . $datos_pelicula[1] . "," . $datos_pelicula[2] . "," . $datos_pelicula[3] . "," . $datos_pelicula[4];
                $file = file_get_contents('./bbdd/peliculas.csv');
                $new_linea = trim("");
                $resultado = str_replace($borrar, $new_linea, $file);

                //Abrimos el archivo en modo escritura
                $file = fopen("./bbdd/peliculas.csv", "w");

                //Reescribimos el archivo con los nuevos datos
                fwrite($file, $resultado);

                //Cerramos el archvo
                fclose($file);
                
                $handle = fopen("./bbdd/peliculas.csv", "r");
                if ($handle) {
                    $text = "";
                    while (!feof($handle)) {
                        $txt = trim(fgets($handle));
                        if (!empty($txt)) {
                            $text .= $txt . "\n";
                        }
                    }
                }
                fclose($handle);
                
                //Abrimos el archivo en modo escritura
                $file = fopen("./bbdd/peliculas.csv", "w");

                //Reescribimos el archivo con los nuevos datos
                fwrite($file, $text);

                //Cerramos el archvo
                fclose($file);

                //Retrocedemos a la vista peliculas con mensaje
                $_SESSION['mensaje'] = "Se ha eliminado la pelicula " . $datos_pelicula[1];
                header("Location: ../eval1_DWES/peliculas_borrado.php");

            
            } else {
                header("Location: ./eval1_DWES/peliculas.php");
            }

            ?>


            <br>
            <a href="index.html"  style='background-color:rgb(95, 191, 245);color:white;'>Volver al inicio </a>


    
</body>
</html>