<?php

class Media {
    protected $titre;
    protected $auteur;

    public function __construct($titre, $auteur) {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }

    protected function afficherDetails() {
        return "Titre : $this->titre, Auteur : $this->auteur";
    }
}

class Livre extends Media {
    private $nbPages;

    public function __construct($titre, $auteur, $nbPages) {
        parent::__construct($titre, $auteur);
        $this->nbPages = $nbPages;
    }

    public function afficherInfos() {
        return $this->afficherDetails() . ", Nombre de pages : $this->nbPages";
    }
}

class DVD extends Media {
    private $duree;

    public function __construct($titre, $auteur, $duree) {
        parent::__construct($titre, $auteur);
        $this->duree = $duree;
    }

    public function afficherInfos() {
        return $this->afficherDetails() . ", Durée : $this->duree minutes";
    }
}