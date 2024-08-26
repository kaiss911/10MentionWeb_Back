<?php

require_once "../inc/function.inc.php";

/** 
 * En programmation, Une classe permet de regrouper des données (attributs) et des comportements (méthodes).
 * Pour obtenir un objet, il faut demander au langage de le créer et de nous le donner pour qu’on puisse le manipuler. Pour faire ça, on précise au langage le nom de l’élément que l’on veut manipuler, c’est-à-dire la classe.
 * Une classe permet de produire plusieurs objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE.
 * La classe représente un modèle de données qui définit la structure commune à tous les objets créés à partir de celle-ci. La classe constitue donc une sorte de moule à travers lequel plusieurs objets du même type et de même structure peuvent être créés.
 * Une classe représente une entité (le modèle qu'elle doit suivre) ; elle a ses services (= méthodes : ce qu'elle propose et ce qu'elle permet de faire) et elle a les attributs (= propriétés : ses spécificités).
 * 
 * Pour en savoir plus : 
 * - https://blog.hubspot.fr/website/programmation-orientee-objet#:~:text=La%20programmation%20orient%C3%A9e%20objet%2C%20ou,des%20instances%20individuelles%20d'objets.
 * 
 * Pour définir et créer une classe, on utilise le mot-clé class suivi du nom de la classe (avec une lettre majuscule au début et à chaque début d'un nouveau mot dans le nom de la classe).
 *////////////////////////////////////

// Classe representant un panier d'article

class Panier{


    // une propriété (ou attribut) => une variable appartenant à une classe 
    // une méthode => une fonction appartenant à une classe

    // les annotations sont très utiles pour les outils de développement et les environnements de développement intégré (IDE), elles ne sont pas obligatoires en PHP.
    // En programmation, un docblock ou DocBlock est un commentaire spécialement formaté spécifié dans le code source qui est utilisé pour documenter un segment de code spécifique

    // L'annotation @var est utilisée dans les commentaires de documentation (DocBlock) en PHP pour indiquer le type de donnée associé à une variable. Elle est souvent utilisée pour documenter les propriétés d'une classe, les variables dans des fonctions ou méthodes, ou même des variables dans le code, afin de clarifier le type attendu ou utilisé.

    /**
     *  @var int Nombre de produit dans le panier
     */

    public int $nbrProduits; // c'est une propriété dans la classe Panier




    /**
     * @return string
     */
public function ajouterArticle(){
    return "l'article a été ajouté";
}


    /**
     * @return string
     */
public function suprimerArticle(){
    return "l'article a été retirer";
}



/**
 * @param int $nbr
 * @return string
 */


 // L'annotation @param est utilisée dans les commentaires de documentation (DocBlock) en PHP pour décrire les paramètres d'une fonction ou d'une méthode,  on y trouve : le type, le nom et une brève description (facultatif) du rôle de chaque paramètre attendu par la fonction ou la méthode

    // L'annotation @return est utilisée dans les commentaires de documentation (DocBlock) en PHP pour indiquer le type de valeur qu'une fonction ou une méthode renvoie.


//On peut déclarer des méthodes avec des paramétres
public function nombreArticle($nbr){// nombreArticle retourne par défaut un message avec 10 article si aucun parametre n'est passer
    return"il y a $nbr article dans le panier";
}

}

$panier_1 = new Panier(); // instanciation de la classe : on instancie ou on crée une instance de notre classe Panier , on la stock dans un objet, cela permet de passer d'une classe à l'objet 
// Panier c'est le modele, $panier_1 est une version concrète de ce modèle 
// new : mot-clee permettant d'effectuer une instanciation
debug(get_class_methods($panier_1)); // cette methode permet d'obtenir une liste des methodes d'une classe donner. Elle renvoie un tableau contenant les noms de toutes les méthodes publiques de la classe specifiée, compris celles hériter des classe parentes



$panier_1 -> nbrProduits = 5; // on accede à la propriete $nbrproduit gràce à la fleche  appeler operateur objet 

echo "<p> Il y a $panier_1->nbrProduits article dans le panier </p>";

echo $panier_1 -> ajouterArticle();



///////////////////////

$panier_2 = new Panier();
unset($panier_1); // pour détruire un objet

// on instancie un troisième objet et on le stock dans la variable $panier_3
$panier_3 = new Panier();

/**
 * Une fois créés, les objets sont indépendants et ont chacun leurs propriétés ; ils ont tous accès aux méthodes déclarées dans la classe.
 * Toutes les informations déclarées publiques dans une classe seront accessibles depuis l'extérieur de cette classe.
 */