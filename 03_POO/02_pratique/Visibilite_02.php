<?php
require_once "../inc/function.inc.php";

class Vehicle{
    /**
     * marque du vehicule
     *
     * @var string
     */
    public string $brand;// propriété "public"
    


    /**
     * couleur du vehicule
     *
     * @var string
     */
    private string $color;// propriété "private"
}

$vehicle_1 = new Vehicle();
$vehicle_1->brand = "BMW";
echo "<p>".$vehicle_1->brand."</p>";

$vehicle_1->color= "bleu";
echo "<p>".$vehicle_1->color."</p>";