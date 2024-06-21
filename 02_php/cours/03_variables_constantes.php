<?php
   $titre='Variables et Constantes';
   $titreH1='Variables et Constantes en PHP';
   include "inc/header.inc.php";
   ?>
  <header class="p-5 m-4 bg-light rounded-3 border">
    <section class="container py-5">
        <?php
        
        echo "<h1 class=\"display-5 fw-bold\">Les variables et les constantes en PHP</h1>";
        
        ?>
    </section>
  </header>
  <main class="container-fluid px-5">
        <?php

        echo "<h2>Les variables utilisateurs / affectation / concaténation</h2>";
        $number = 127; // On déclare une variable $number et on lui affecte la valeur 127
        echo 'Ma variable $number vaut : '. $number . '<br>'; //je concaténe avec le point(.)

        //Je peux voir le type d'une variable avec la fonction prédéfinie gettype()
        echo 'Le type de ma variable $number est : ' . gettype($number) . '<br>';// ici c'est integer

        ###########################
        $double = 1.5;
        echo 'Ma variable $bouble vaut : '. $double . '<br>';
        echo 'Le type de ma variable $bouble est : ' . gettype($double) . '<br>';// ici il s'agit d'un double

        ############################
        $chaine = 'Une chaine de caractère entre simple quotes';
        echo 'Ma variable $chaine vaut : ' .$chaine. '<br>';
        echo 'Le type de ma variable $chaine est : ' . gettype($chaine) . '<br>';// ici il s'agit d'un string

        ######################################
        $chaine1 = "Une chaine de caractère entre double quotes";
        echo 'Ma variable $chaine1 vaut : ' .$chaine1. '<br>';
        echo 'Le type de ma variable $chaine1 est  : ' . gettype($chaine1) . '<br>';// ici il s'agit d'un string

        ###########################
        $chaine2 = "127";
        echo 'Ma variable $chaine2 vaut : ' .$chaine2. '<br>';
        echo 'Le type de ma variable $chaine2 est  : ' . gettype($chaine2) . '<br>';// ici il s'agit d'un string

        #########################
        $chaine3 = `Une chaine de caractère entre deux backquotes`;
        echo 'Ma variable $chaine3 vaut : ' .$chaine3. '<br>';
        echo 'Le type de ma variable $chaine3 est : ' . gettype($chaine3) . '<br>'; 

        ########################
        $boolean = true;// ou false // Mon navigateur associer true à 1 et false à vide qui correspond à 0
        echo 'Ma variable $boolean vaut : ' .$boolean. '<br>';
        echo 'Le type de ma variable $boolean est : ' . gettype($boolean) . '<br>'; // ici il s'agit d'un boolean : permet de savoir si quelque chose est vrai ou faux

        //Concaténation, affectation et affectaation combiner avec l'operateur ".=" pour les chaines de caractères
        $prenom = 'Paul';
        $prenom .= ' Thomas'; // on ajoute la valeur de "Thomas" à la valeur "Paul" SANS la remplacer grâce a l'operateur'.='
        echo $prenom;
        echo '<p> Bonjour' .$prenom. '</p>';
        echo "<p> Bonjour $prenom </p>";


        #######################
        // déclare une chaine de caractère qui contient des apostrophes ex : aujourd'hui
        //échappement des apostrophes
        $message = 'aujourd\'hui';// ici on échappe les apostrophes quand on écrit dans les simples quotes avec "\"
        $message = "aujourd'hui";
        
        
        // Créer un drapeau français Bleu Blanc Rouge avec le mot "bleu blanc rouge" à l'interieur de chaque couleur
        
                $bleu = '<p style=\' color : blue; \'> Texte </p>';
                $blanc = '<p style=\' color : green; \'> Texte </p>';
                $rouge = '<p style=\' color : red; \'> Texte </p>';
        
                echo $bleu.$blanc.$rouge;

        // Marc
        echo '<div class="container bg-black p-5 col-6 mx-auto">
                <div class="row">
                    <div class="col bg-primary">Bleu</div>
                    <div class="col bg-info">Blanc</div>
                    <div class="col bg-danger">Rouge</div>
                </div>
            </div>';

        // Axel
        $bleu1 = "Bleu - ";
        $vert1 = "Vert - ";
        $rouge1 = "Rouge";
        echo "<p class='bg-dark fw-bold col-3 p-4 mt-3'><span class='bg-primary py-3'>$bleu1</span><span class='bg-white py-3'>$vert1</span><span class='bg-danger py-3'>$rouge1</span></p>";

        // Correction
        $bleu2 = "blue";
        $blanc2 = "white";
        $rouge2 = "red";

    echo "<div class='d-flex justify-content-center bg-dark p-5 m-auto m-5 rounded' style='width: 40%;'>
              <div class='bg-primary text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                  $bleu2
              </div>
              <div class='bg-$blanc2 text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                  $blanc2
              </div>
              <div class='bg-danger text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                  $rouge2
              </div>
          </div>";

    echo '<h2 class="mt-5">Opérateurs numériques</h2>';
    $a = 10;
    $b = 2;

    echo '$a + $b = ' . $a + $b . '<br>'; // affiche 12
    echo '$a - $b = ' . $a - $b . '<br>'; // affiche 8
    echo '$a * $b = ' . $a * $b . '<br>'; // affiche 20
    echo '$a / $b = ' . $a / $b . '<br>'; // affiche 5
    echo '$a % $b = ' . $a % $b . '<br>'; // affiche 0

    // Les opérateurs d'afféctation combiné pour les valeurs numériques
    $a -= $b; 
    echo $a;

    echo '<br>';

    $a += $b;
    echo $a;

    echo '<br>';

    //Incrementation et décrémentation
    $i = 0;
    $i++;
    echo $i;
    echo '<br>';

    $i--;
    echo $i;
    echo '<br>';

    /////
    
    $maj = '<input></input>';
    echo $maj;

    if ($maj >= 18) {
      echo 'vous etes majeur';
    } else {
      echo 'vous etes mineur';
    }

    /**
   * Si je veux afficher les contenu d'une variable et qu'elle soit collé à une chaine de caractère; ex: je veux afficher :
   * Aujourd'hui il fait 32°c !!
   *  ici le 32 et °c sont collés pour le faire en utilisant le mécanisme de substitution des variables il faut mettre  la variable entre accolades
   */
   $degre = 32;
   $phrase = '<p> Aujourd\'hui il fait ' . $degre . '°C !! </p>';
   echo $phrase;
   $phrase2 = "<p> Aujourd'hui il fait {$degre}°C !! </p>";
   echo $phrase2;

   echo '<h2 class"mt-5">Transtypage des variables</h2>';
   $string1 = (int)'100';
   var_dump($string1);

   $string2 = (float)'12.5';
   var_dump($string2);

   $string3 = (int)'12.5';
   var_dump($string3);

   echo '<br>';

   echo '<h2 class="mt-5"> Constante utilisateurs</h2>';

   #Avec la fonction prédefini define()

   define('CHAINE','la valeur de la constante CHAINE');
   echo CHAINE . '<br>';

   define('ENTIER', 30);
   echo "j'ai ".ENTIER. '<br>';

   echo gettype(ENTIER);
   echo '<br>';

   #Constante avec le mot const
   const SEMAINE = 52;
   const HEBDOMADAIRE = 35;
   const MOIS = 12;

   const HEURE = SEMAINE/MOIS*HEBDOMADAIRE;
   echo HEURE;


   echo '<h2 class="mt-5">Les variables prédéfinies : super-globale</h2>';

   echo $_SERVER["HTTP_HOST"];
   echo '<br>';

   $salaire=['semi','lkm','ghjk'];
   var_dump($salaire);
   echo '<br>';
   echo $salaire[0];

   function dump ($tableau){
    echo '<pre>';
    var_dump($tableau);
    echo '</pre>';
   }



        













        ?>
  </main>
  <?php
   include "inc/footer.inc.php";
   ?>