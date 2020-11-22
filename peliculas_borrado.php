<?php //session_start();?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Borrar película</title>
</head>
<body>
<div class="alert alert-success" role="alert">
<?php
/*        //Se verifica si existe un mensaje para el usuario
        if (isset($_SESSION['mensaje'])) {
            //Se muestra el mensaje por pantalla
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensaje'] . '</div>';
        }



        //Eliminamos los mensaje al usuario...
                if (isset($_SESSION['mensaje'])) {
                    //Destruimos la variable de session...
                    unset($_SESSION['mensaje']);
                }

        // Finalmente, destruir la sesión.
        session_destroy();       */ 
        
        
          echo "Se ha borrado la pelicula con éxito";        

?>

 <br>
     <a href="index.html"  style='background-color:rgb(95, 191, 245);color:white;'>Volver al inicio </a>


    
</body>
</html>