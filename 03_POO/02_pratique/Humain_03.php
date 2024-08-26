<?php
require_once "../inc/function.inc.php";

class Human{

    /**
     * Le prénom de l'humain
     *
     * @var string
     */
    private string $firstName;





    /**
     * Le nom de l'humain
     *
     * @var string
     */
    private string $lastName;

    /*
    Les propriétés étant 'private', il est nécessaire de passer par des méthodes 'publiques' pour pouvoir lire et écrire ces propriétés.
    On parle de Getter (lire / récupérer) et de Setter (écrire / définir) : ce sont des méthodes qui vont faire la médiation (l'intermédiaire) entre l'extérieur de la classe et ses attributs.
    */

    public function setPrenom($p){// Par convention, on appel la méthode avec le mot clé "set" 
        if(is_string($p)){
            $this->firstName = $p; // $this => pseudo-variable, va être remplacée par l'objet couramment utilisé 
            // $this est créée automatiquement et réprésente l'instance courante   
        }
    }

    public function getPrenom(){ // Méthode "public" => permet de récupérer le prénom à l'extérieur de la classe
        return $this->firstName; // Retourne la valeur du prénom dans la propriété de l'objet couramment utilisé
    }



    public function setnom($p){// Par convention, on appel la méthode avec le mot clé "set" 
        if(is_string($p)){
            $this->firstName = $p; // $this => pseudo-variable, va être remplacée par l'objet couramment utilisé 
            // $this est créée automatiquement et réprésente l'instance courante   
        }
    }

    public function getnom(){ // Méthode "public" => permet de récupérer le prénom à l'extérieur de la classe
        return $this->firstName; // Retourne la valeur du prénom dans la propriété de l'objet couramment utilisé
    }
}








































