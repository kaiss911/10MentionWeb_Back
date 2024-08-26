<?php
require_once "../inc/function.inc.php";


class calc {

    /**
     * @param int 
     * @return int
     */
    public function addition($nbr , $nbr2){
       $brb = $nbr + $nbr2;
       return $brb;
       
    }







    /**
     * @param int 
     * @return float
     * 
     */
    public function diviser($nbr , $nbr2){

        if ($nbr2 == 0) {
            return false;
        }else{
            return $nbr / $nbr2;
        }
        
     }
    
}


$calc = new calc();

echo $calc->addition(5,5);
echo "<br>";
echo $calc->diviser(5,0);
debug($calc->diviser(5,0));
