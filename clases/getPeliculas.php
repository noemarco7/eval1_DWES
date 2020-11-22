<?php

function getPeliculas() {
    $file = fopen('bbdd/peliculas.csv', 'r');
    $cont = 1;
    while (($line = fgetcsv($file)) !== FALSE) {
        //$line is an array of the csv elements
        $array_pelicula[$cont] = $line;
        $cont++;
    }
    fclose($file);
    if (isset($array_pelicula)) {
        return $array_pelicula;
    }else{
        echo "No hay peliculas para mostrar...";
    }
}

function detailPelicula($id_pelicula) {
    $pelicula = getPeliculas();
    return $pelicula[$id_pelicula];
}


//http://localhost:82/evaluable/eval1_DWES/peliculas.php



?>