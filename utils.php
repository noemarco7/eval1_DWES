<?php
    //Función para que lea el csv de peliculas.csv
    function getPeliculas() {
        //Ruta para abrir el fichero
        $file = fopen('bbdd/peliculas.csv', 'r');
        //contador
        $cont = 1;
        //mientras
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            $array_pelicula[$cont] = $line;
            $cont++;
        }
        //cerrar el archivo
        fclose($file);
        return $array_pelicula;
    }


    //Función para obtener los detalles de cada pelicula a traves de su ID
    function detailPelicula($id_pelicula){
        $pelicula = getPeliculas();
        return $pelicula[$id_pelicula];
    }



    //funcion que lea un csv 
                //Funcion lee el fichero
     /*           function leer_fichero($nombre)
                {
                    $archivo = fopen($nombre, "r"); //abrimos el archivo
                    if ($archivo != false) {
                        $linea = fgets($archivo); //Leemos una linea del texto
                         while ($linea != null) {
                            echo $linea;
                            echo "<br>";
                            $linea = fgets($archivo);
                        } //guardamos el contenido del archivo en $linea
                    }
                    fclose($archivo); //Cerramos el archivo
                }
            
                // Obtener cada línea en un array:
                $aLineas = file("./bbdd/peliculas.csv");
                print_r($aLineas);






    //función guarde los datos de una película editada en el fichero peliculas.csv,teniendo en cuanta que no se pueden borrar el resto de datos   
    
    

    
    //funcion que se encargara de borrar la pelicula seleccionada
    function borrar_pelicula(){

    }



    //Una función que obtenga los directores de una película
    function obtener_directores(){

    }



    //Una función que obtenga los actores de una película
    function obtener_actores(){

    }
*/





?>