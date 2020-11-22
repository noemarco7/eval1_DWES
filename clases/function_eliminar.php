<?php


session_start();

require_once './getPeliculas.php';


if (isset($_GET['id']) && $_GET['id'] != "") {
   
    $id_pelicula = $_GET['id'];
    
    $datos_pelicula = detailPelicula($id_pelicula);

    // Inicializamos nuestras variables
    $i = 0; //contador de línea que se está leyendo
    $numlinea = $id_pelicula + 1; //linea que se desea borrar -1 para tomar el indice principal, aignamos el id
    $aux = array();

// Abrimos el archivo
    $file = 'bbdd/peliculas.csv';
    $borrar = $datos_pelicula[0] . "," . $datos_pelicula[1] . "," . $datos_pelicula[2] . "," . $datos_pelicula[3] . "," . $datos_pelicula[4];
    $file = file_get_contents('bbdd/peliculas.csv');
    $new_linea = trim("");
    $resultado = str_replace($borrar, $new_linea, $file);

     
    $file = fopen("bbdd/peliculas.csv", "w");

    
    fwrite($file, $resultado);

.
    fclose($file);
    
    $handle = fopen("bbdd/peliculas.csv", "r");
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
    
    
    $file = fopen("bbdd/peliculas.csv", "w");

    
    fwrite($file, $text);

   
    fclose($file);

   
    $_SESSION['mensaje'] = "Se haeliminado la pelicula " . $datos_pelicula[1];
    header("Location: peliculas_borrado.php");
    
   
} else {
    header("Location: ../clases/peliculas.php");
}
?>
