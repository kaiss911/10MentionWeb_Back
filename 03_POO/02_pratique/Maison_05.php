<?php
require_once "../inc/function.inc.php";

//--------------------------Méthodes et propriétés STATIQUE ------------------//

/*
     
    -- Le mot static pour définir et préciser que la propriété ou la méthode appartient  seulement à la classe dans laquelle elle a été définie ( => ne vont pas appartenir à une instance de classe et par la suite à un objet qui stocke cette instance).
    -- Les méthodes et les propriétés STATIQUES vont avoir la même définition et la même valeur pour toutes les instances d'une classe .
    -- On peut  accéder  à ces éléments sans avoir besoin d'instancier la classe .
    -- Depuis un objet il est impossible d'accéder à une propriété statique.
     On utilise les propriété et méthode statique quand on a pas besoin d'instnacier la classe plusieurs fois et stocker cette instanciation dans des objets différents
     cela nous permettre de partager de données communes entre toutes les instances d'une classe, optimiser des ressources et économiser de la mémoire quand les données changent pas et qui  doivent être partagées entre toutes les instances
     Exemple l'utilisation de la connexion à la BDD     
     
 */


 class Maison {

    /**
     * La surface du terrain
     *
     * @var string
     */
    public static string $espaceTerrain =  '500m';

    /**
     * La couleur de la maison 
     *
     * @var string
     */
    public string $couleur = 'blanc';

    
    /**
     * Hauteur de la maison
     * 
     * @var string
     */
    const HAUTEUR = "10m";


    /**
     * nombre de piece dans la maison
     * 
     * @var integer
     */
    private static $nbrPiece = 7;


    /**
     * Nombre de porte dans la maison
     *
     * @var integer
     */
    private int $nbrPorte = 10;





    /**
     * le nombre de piece dans la maison
     *
     * @return int
     */
    public static function getnbrPiece(){
        // Utilisation de self:: pour accéder à une propriété statique, il fait référence à la classe, contrairement à $this, qui fait référence à l'instance de l'objet.
          // Pour accéder au propriétés statique on utilise l'opérateur
          //Les méthodes statiques peuvent accéder aux propriétés statiques via le mot-clé self.
        return self::$nbrPiece; //lors d'un self:: il faut mettre le $ devant la propriété appelé 'opérateur de résolution de portée'
    }



    /**
     * le nombre de porte dans la maison
     *
     * @return int
     */
    public function getnbrPorte(){
        return $this->nbrPorte;
    }

 }

 // Appel à la proprieter $espaceTerrain de la classe maison 


// $maison1 = new Maison();  // l'instanciation de la class n'est pas obligatoire
 echo " espaceTerrain :" .Maison::$espaceTerrain. "<hr>"; //Appel d'une propriete statique par la classe

 echo " Nombre de piece :" .Maison::getnbrPiece(). "<hr>"; 
 
 
 
 /** Création d'une instance de la classe Maison */
 $maison2 = new Maison();

 //Apel à la propriété couleur 
 echo " espaceTerrain :" .$maison2->couleur . "<hr>";

 //affichage du nombre de porte dans la maison
 echo "nbrPorte : ".$maison2->getnbrPorte(). "<hr>";

 //Appel de la constante HAUTEUR de la classe maison
 echo "Hauteur : ". Maison::HAUTEUR. "<hr>";

// Les exemple ci dessous contienne des erreurs
//echo Maison::$couleur;   //erreur : on ne peut pas appeler une propriété non static (public) avec la classe.
//echo Maison::getnbrPorte;   //erreur : on ne peut pas appeler une propriété non static (public) avec la classe.
echo $maison2->getnbrPiece()."<hr>"; //On ne devrait pas pouvoir appeler une méthode statique par un objet, mais PHP permet cette action.Cependant , il est preferable d'eviter cela pour de bonne pratique 



//Example d'utilisation de la propriété static 

class Compteur{

    /**
     * Total 
     * 
     * @var integer
     */
    public static $totalCount = 0;

    public function __construct(){
        self::$totalCount++;
    }
}

echo Compteur::$totalCount;
$objet1 = new Compteur();


//Exemple de configuration de BDD
class ConfigurationBDD{
    public static $dbName = "nomBdd";
    public static $dbUser = "user";
    public static $dbPassword = "mdp";
}

echo ConfigurationBDD::$dbName;