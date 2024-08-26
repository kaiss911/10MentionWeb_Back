<?php
require_once "../inc/function.inc.php";


class Membre{

    /**
     * pseudo membre
     * 
     * @var string
     */
    private string $pseudo;

    /**
     * MDP membre
     * 
     * @var string
     */
    private string $mdp;



    public function __construct(string $p, string $m){
        $this->setPseudo($p);
        $this->mdp= $m;
    }

    public function setPseudo(string $p){
        if (!ctype_alpha($p) && (strlen($p) < 1 || strlen($p) > 15)) {
            $this->pseudo = "pas valide";
        }else {
            $this->pseudo = $p;
        }
    }


    public function getPseudo():string{
        return $this->pseudo;
    }

    public function getMdp():string{
        return $this->mdp;
    }


}

