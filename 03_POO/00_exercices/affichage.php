<?php
require_once "Voiture.php";
require_once "Voiture_pompe.php";

$voiture = new Voiture(50 , 5);
$pompe = new Pompe (800,800);


// voiture
echo "<p> Le réservoire de la voiture : {$voiture->getTailleReservoir()} litres.";