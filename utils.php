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
    return $array_pelicula;
}

function detailPelicula($id_pelicula){
    $pelicula = getPeliculas();
    return $pelicula[$id_pelicula];
}



?>