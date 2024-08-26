<?php
class Animal{

    protected string $nom;

    public function __construct($n){
        $this->nom = $n;
    }
    protected function description(){
        return "Ceci est un animal nommé {$this->nom}";
    }
    public function getNom(){
        return $this->nom;
    }

}

/**
 * Classe Dog qui herite de la classe Animal
 */
class Dog extends Animal{// Elle étend la classe animal et hérite de ses propriété et métodes protégées

    public function affichage(){
        return $this->nom."dit whoofffff". $this->description();
    }

}
$chien = new Dog("pipoudou");
echo $chien->affichage();