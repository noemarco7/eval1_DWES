<?php
    //Función para que lea el csv de peliculas.csv
    function getPeliculas() {
        //Ruta para abrir el fichero
        $file = fopen('./bbdd/peliculas.csv', 'r');
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


   //Función lista actores
   function lista_actores($id_pelicula) {
     //Ruta para abrir el fichero
        $file = fopen('./bbdd/pelicula_actor.csv', 'r');
        //contador
        $cont = 1;
        //mientras
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            if($line[0] == $id_pelicula){
                $array_actores[$cont] = $line;
            $cont++;
            }
        }
        //cerrar el archivo
        fclose($file);
        return $array_actores;
    }



    //Función lista actores
   function lista_director($id_pelicula) {
     //Ruta para abrir el fichero
        $file = fopen('./bbdd/pelicula_director.csv', 'r');
        //contador
        $cont = 1;
        //mientras
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            if($line[0] == $id_pelicula){
                $array_director[$cont] = $line;
            $cont++;
            }
        }
        //cerrar el archivo
        fclose($file);
        return $array_director;
    }
























    //Una función que obtenga los directores de una película
    //Función para que lea el csv de directores.csv
    function getDirector() {
        //Ruta para abrir el fichero
        $file = fopen('./bbdd/directores.csv', 'r');
        //contador
        $cont = 1;
        //mientras
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            $array_directores[$cont] = $line;
            $cont++;
        }
        //cerrar el archivo
        fclose($file);
        return $array_directores;
    }

    //Función para obtener los detalles de cada director a traves de su ID
    function detailDirector($id_director){
        $director = getDirector();
        return $director[$id_director];
    }





    //Una función que obtenga los actores de una película
    //Función para que lea el csv de directores.csv
    function getActor() {
        //Ruta para abrir el fichero
        $file = fopen('./bbdd/actores.csv', 'r');
        //contador
        $cont = 1;
        //mientras
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            $array_actores[$cont] = $line;
            $cont++;
        }
        //cerrar el archivo
        fclose($file);
        return $array_actores;
    }

    //Función para obtener los detalles de cada director a traves de su ID
    function detailActor($id_director){
        $actor = getActor();
        return $actor[$id_director];
    }


    //Una función que obtenga datos de pelicula_actor de una película
    function get_peliActor() {
        //Ruta para abrir el fichero
        $file = fopen('./bbdd/pelicula_actor.csv', 'r');
        //contador
        $cont = 1;
        //mientras
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            $array_actores[$cont] = $line;
            $cont++;
        }
        //cerrar el archivo
        fclose($file);
        return $array_actores;
    }

    //Función para obtener los detalles de cada director a traves de su ID
    function detailPeliActor($id_peliactor){
        $peliactor = get_peliActor();
        return $peliactor[$id_peliactor];
    }
  
    

     //Una función que obtenga datos de pelicula_actor de una película
    function get_pelidirector() {
        //Ruta para abrir el fichero
        $file = fopen('./bbdd/pelicula_director.csv', 'r');
        //contador
        $cont = 1;
        //mientras
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            $array_actores[$cont] = $line;
            $cont++;
        }
        //cerrar el archivo
        fclose($file);
        return $array_actores;
    }

    //Función para obtener los detalles de cada director a traves de su ID
    function detailPelidirector($id_pelidirector){
        $pelidirector = get_pelidirector();
        return $peliactor[$id_pelidirector];
    }
  

    //Arrays asociativos con toda la información
    /*    $pelis = array(
                         array( "id" =>"1","nombre" =>"Francis Ford Coppola","anyo" =>"1939","pais" => "Estados Unidos"), 
                         array( "id" =>"1","nombre" =>"Marlon Brandon, Al Pacino,  Robert Duvall, James Cann, Diane Keaton","anyo" =>"1924, 1940, 1931, 1940, 1946","pais" => "Estados Unidos, Estados Unidos, Estados Unidos, Estados Unidos, Estados Unidos"),
                         array( "id" =>"2","nombre" =>"Francis Ford Coppola","anyo" =>"1939","pais" => "Estados Unidos"), 
                         array( "id" =>"2","nombre" =>"Marlon Brandon, Al Pacino,  Robert Duvall, James Cann, Diane Keaton, Robert de Niro ","anyo" =>"1924, 1940, 1931, 1940, 1946, 1943","pais" => "Estados Unidos, Estados Unidos, Estados Unidos, Estados Unidos, Estados Unidos, Estados Unidos"),
                         array( "id" =>"3","nombre" =>"Stanley Kubrick","anyo" =>"1928","pais" => "Estados Unidos"), 
                         array( "id" =>"3","nombre" =>"Kirk Douglas, Ralph Meeker,  Adolphe Menjou","anyo" =>"1916, 1920, 1890","pais" => "Estados Unidos, Estados Unidos, Estados Unidos"),
                         array( "id" =>"4","nombre" =>"Billy Wilder","anyo" =>"1906","pais" => "Polonia"), 
                         array( "id" =>"4","nombre" =>"Jack Lemmon, Walter Matthau,  Susan Sarandon","anyo" =>"1925, 1920, 1931, 1946","pais" => "Estados Unidos, Estados Unidos, Estados Unidos"));
  
       //Recorrer el array                         
                foreach($pelis as $pelis => $detalles){
                    echo "<h1> $pelis </h1>"; 
                    foreach($detalles as $indice => $valor) {
                        echo "<p> $indice:$valor </p>";
                    }
                }


    funcion que se encargara de borrar la pelicula seleccionada   ---- FUNCION INDIVIDUAL FUNCTION BORRAR
    
    funcion que lea un csv 
                //Funcion lee el fichero
               function leer_fichero($nombre)
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
*/
?>