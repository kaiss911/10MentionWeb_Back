<?php
    require_once("../inc/function.inc.php");

    // CONSTRUCTOR // 

    class VideoGame{
        private string $nomduJeu;
        private string $console;
        private float $price;

        /* Le constructeur est une méthode spéciale dans une classe, définie avec le nom __construct().
     * Elle est utilisée pour initialiser les propriétés de l'objet lors de sa création.
     * En PHP, il s'agit d'une méthode magique, ce qui signifie qu'elle est automatiquement appelée lors de l'instanciation de la classe.
     * Il est important de noter qu'une classe ne peut avoir qu'un seul constructeur en PHP.*/

        public function __construct(string $n, string $c, float $p){ // Méthode "magique" avec 3 paramètres qui vont être remplacés avec les arguments fournis lors de l'instanciation de la classe
            $this->nomduJeu = $n;
            $this->console= $c;
            $this->price = $p;
        }



        public function getNomduJeu(): string{
            return $this->nomduJeu;
        }

        public function getconsole(): string{
            return $this->console;
        }

        public function getprice(): float{
            return $this->price;
        }




        public function affichedetails(){
            return "Jeu : {$this->nomduJeu}, console : {$this->console}, prix : {$this->price}€";
        }
    }
    $game_1 = new VideoGame("GTA 4", "PS5", 40); 
    debug($game_1);
    $game_2 = new VideoGame("AfterImage", "PC", 40);
    debug($game_2);
?>