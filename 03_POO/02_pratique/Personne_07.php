<?php
class Personne{

    protected string $nom;

    public function __construct($n){
        $this->nom = $n;
    }
    protected function afficheNom(){
        return "Nom : {$this->nom}";
    }

}

class Etudiant extends Personne{

    private int $age;

    public function __construct($nom,$age){

        parent::__construct($nom);
        $this->age = $age;
    }

    public function afficheInfo(){
        return $this->afficheNom(). " âge : " . $this->age;
    }
}

$etudiant1 = new Etudiant("Joe", 29);

echo $etudiant1->afficheInfo();













