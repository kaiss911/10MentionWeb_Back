<?php
class Pompe{

    /**
     * La taille du réservoir de la pompe litres
     *
     * @var integer
     */
    private int $tailleReservoirPompe;

    /**
     * quantiter d'essence actuellement dans le réservoir de la pompe
     *
     * @var float
     */
    private  float $nbrLitresEssencePompe;

    /**
     * constructeur de la classe Pompe
     *
     * @param integer $t
     * @param float $l
     */
    public function __construct(int $t, float $l){
        $this->setTaillePompe($t);
        $this->setNbrLitreEssence($l);
    }

     /**
     * définir la quantité d'essence dans le réservoir de la pompe
     *
     * @param float $quantite
     * @return void
     */
    public function setNbrLitreEssence(float $quantite) : void{
        $this->nbrLitresEssencePompe= $quantite;
    }

    /**
     * définir la taille du réservoir de la pompe
     *
     * @param int $taille
     * @return void
     */
    public function setTaillePompe(int $taille) : void{
        $this->nbrLitresEssencePompe= $taille;
    }




    /**
     * methode pour recuperer la taille du reservoir de la pompe
     *
     * @return integer
     */
    public function getTailleReservoir(): int{
       return $this->tailleReservoirPompe;
    }

    /**
     * Methode pour récuperer la quantité d'essence dans le réservoir de la pompe
     *
     * @return float
     */
    public function getNbrlitreEssence(): float{
        return $this->nbrLitresEssencePompe;
    }

    public function delivrerEssence(Voiture $v){
        $quantite_a_delivrer = $v->getTailleReservoir() - $v->getNbrlitreEssence();
        // Si la quantiter à delivrer est supperieur à ce que la pompe a , ajuste la quantiter a ce qui reste

        if ($quantite_a_delivrer > $this->getNbrlitreEssence()) {
            $quantite_a_delivrer = $this->getNbrlitreEssence();
        }


        // Mettre à jour la quantiter d'essence dans la voiture
        $v->setNbrLitreEssence($v->getNbrlitreEssence() + $quantite_a_delivrer);

        // Mettre à jour la quantité d'essence restante dans la pompe
        $this->setNbrLitreEssence($this->getNbrlitreEssence() - $quantite_a_delivrer);

        return "<p> Je vien de délivrer $quantite_a_delivrer litre d'essence </p>";
    }
}