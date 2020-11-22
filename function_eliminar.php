<?php

//Inicilizamos las sesiones para mostrar mensajes
session_start();
//Buscamos el archivo para obtener la pelicula
require_once './utils.php';

#Verificamos que exista el id de la pelicula
if (isset($_GET['id']) && $_GET['id'] != "") {
    #Reasignamos el valor del id
    $id_pelicula = $_GET['id'];
    //Obtenemos losdatos de lapelicula por medio de la funcion
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
    header("Location: peliculas_borrado.php");
    
   
} else {
    header("Location: peliculas.php");
}
?>
