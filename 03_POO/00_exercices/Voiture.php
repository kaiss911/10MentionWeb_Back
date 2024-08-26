<?php
class Voiture{

    /**
     * La taille du réservoir de la voiture en litres
     *
     * @var integer
     */
    private int $tailleReservoirVoiture;


    /**
     * quantiter d'essence actuellement dans le réservoir de la voiture
     *
     * @var float
     */
    private  float $nbrLitresEssenceVoiture;


    /**
     * constructeur de la classe Voiture
     *
     * @param integer $t
     * @param float $l
     */
    public function __construct(int $t, float $l){
        $this->setTailleReservoir($t);
        $this->setNbrLitreEssence($l);
    }


    /**
     * définir la quantité d'essence dans le réservoir de la voiture
     *
     * @param float $quantite
     * @return void
     */
    public function setNbrLitreEssence(float $quantite) : void{
        $this->nbrLitresEssenceVoiture= $quantite;
    }

    /**
     * définir la taille du réservoir de la voiture
     *
     * @param int $taille
     * @return void
     */
    public function setTailleReservoir(int $taille) : void{
        $this->tailleReservoirVoiture= $taille;
    }


    /**
     * methode pour recuperer la taille du reservoir de la voiture
     *
     * @return integer
     */
    public function getTailleReservoir(): int{
       return $this->tailleReservoirVoiture;
    }

    /**
     * Methode pour récuperer la quantité d'essence dans le réservoir de la voiture
     *
     * @return float
     */
    public function getNbrlitreEssence(): float{
        return $this->nbrLitresEssenceVoiture;
    }
}