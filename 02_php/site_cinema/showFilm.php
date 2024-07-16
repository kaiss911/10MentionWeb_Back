<?php
require_once "inc/functions.inc.php";
require_once "inc/header.inc.php";




if (isset($_GET) && isset($_GET['id_film']) && !empty($_GET['id_film'] )) {

        
    $idfilm = htmlentities($_GET['id_film']);

    if(is_numeric($idfilm)) { 

        $film  = showFilmViaId($idfilm);
                
        if (!$film) {

            header('location:index.php');
        }

    
     } else{
         header('location:index.php');
     }
   
}


debug($film);
?>


<?php
require_once "inc/footer.inc.php";
?>