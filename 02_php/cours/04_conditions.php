<?php
$titre='Conditions';
$titreH1='Conditions en PHP';
$paragraphe='<p class="col-md-12 fs-4">Les conditions sont un chapitre clé en PHP comme dans les autres langages de programmation. Par exemple, lorsque l\'on fera une page de connexion, on aura la condition suivante : SI l\'adresse existe dans la BDD et SI le mdp correspond à l\'adresse, l\'utilisateur est connecté SINON il reste sur la page avec un message d\'erreur</p>';
include "inc/header.inc.php";
?>
    <!-- fin header -->
    <main class="container-fluid px-5">
        <div class="col-sm-12">
            <h2>Condition simple "if", "else"</h2>
            <?php
                $a = 10;
                $b = 5;
                $c = 2;

                if ($a > $b){ // Si la condition est vraie alors on exécute le code suivant
                    echo "<p class=\"alert alert-success\">\"a\" qui contient $a est strictement supérieur à \"b\" qui vaut $b</p>";
                } else{ // Sinon on exécute celui-ci
                    echo "<p class=\"alert alert-danger\">\"b\" qui contient $b est strictement supérieur à \"a\" qui vaut $a</p>";
                }

                if ($a > $c){ // Si la condition est vraie alors on exécute le code suivant
                    echo "<p class=\"alert alert-success\">\"a\" qui contient $a est strictement supérieur à \"c\" qui vaut $c</p>";
                } else{ // Sinon on exécute celui-ci
                    echo "<p class=\"alert alert-danger\">\"c\" qui contient $c est strictement supérieur à \"a\" qui vaut $a</p>";
                }
            ?>
            <h2>Condition simple "AND", "&&"</h2>
            <?php
                if ($a > $b && $b > $c){ // Si la condition est vraie alors on exécute le code suivant
                    echo "<p class=\"alert alert-success\">\"a\" qui contient $a est strictement supérieur à 'b' qui vaut $b et 'b' est strictement supérieur à \"c\" qui vaut $c</p>";
                } else{ // Sinon on exécute celui-ci
                    echo "<p class=\"alert alert-danger\">Une des deux conditions est fausse</p>";
                }
            ?>
            <p>Comme en JS, la conditon avec "<span>&&</span>" attend forcément que chaque condition soit "true". Si une des conditions est fausse alors le script continuera au "else" ou n'affichera rien.</p>
            <h2>Condition simple "OR", "||"</h2>
            <?php 
                if ($a == 9 || $b > $c){ // Si la condition est vraie alors on exécute le code suivant
                    echo "<p class=\"alert alert-success\">Une des deux conditions est vraie alors le code renvoie \"true\" et le \"if\" s'exécute.</p>";
                } else{ // Sinon on exécute celui-ci
                    echo "<p class=\"alert alert-danger\">Aucune des conditions n'est vraie.</p>";
                }
            ?>
            <p>Lorsque l'on utilise "<span>OR</span>" "<span>||</span>", on attend que seule une des deux conditions soit vraie.</p>
            <h2>Condition simple "XOR"</h2>
            <p>Alors que "<span>OR</span>" s'exécute si une des conditions est vraie, le "<span>XOR</span>" quand à lui ne s'exécute pas si les deux conditions sont bonnes ou si elles sont fausses. Seul une des conditions peut être "true".</p>
            <?php
                if ($a == 10 XOR $b == 5){ // Si la condition est vraie alors on exécute le code suivant
                    echo "<p class=\"alert alert-success\">Une des deux conditions est vraie alors le code renvoie \"true\" et le \"if\" s'exécute.</p>";
                } else{ // Sinon on exécute celui-ci
                    echo "<p class=\"alert alert-danger\">Aucune des conditions n'est vraie ou toutes conditions sont vraies alors le \"else\" s'exécute.</p>";
                }
            ?>
            <h2>Condition multiple "if", "else if", "else"</h2>
            <p>Grâce à une condition multiple, on peut vérifier si "a" est strictement égal à 8, dans un second temps si "a" est différent de 10 et enfin si aucune de ces conditions n'est vrai</p>
            <?php
                if ($a === 8){ // Si la condition est vraie alors on exécute le code suivant
                    echo "<p class=\"alert alert-danger\">\"a\" est égal à 8.</p>";
                } else if($a !== 10){ // Sinon si, on exécute celui-ci
                    echo "<p class=\"alert alert-danger\">\"a\" est différent de $a.</p>";
                } else{ // Sinon on exécute celui-ci
                    echo "<p class=\"alert alert-success\">\"a\" est égal à $a.</p>";
                }
            ?>
            <h2>Conditions ternaire</h2>
            <?php
                // la condtion ternaire est une autre syntaxe pour écrire un "if", "else"
                echo ($a === 10) ? "<p class=\"alert alert-success\">\"a\" est égal à $a</p>" : "<p class=\"alert alert-danger\">\"a\" est différent de 10</p>"; // Dans la ternaire le "?" remplace le "if" et le ":" remplace le "else".
            ?>
            <h2>Opérateurs "==", "==="</h2>
            <p>L'opérateur "<span>==</span>" permet de comparer une valeur égalité de valeur, alors que l'opérateur "<span>===</span>" permet de comparer de façon stricte (égalité de valeur et de type)</p>
            <?php
                $varA = 1; // INT
                $varB = '1'; // STRING
                // == 
                if ($varA == $varB){ // Condition vraie car 1 et '1' sont équivalents
                    echo "<p class=\"alert alert-success\">\"varA\" et \"varB\" sont de même valeur.</p>";
                } else{
                    echo "<p class=\"alert alert-danger\">\"varA\" et \"varB\" ne sont pas de même valeur.</p>";
                }
                // ===
                if ($varA === $varB){ // Condition fausse car 1 et '1' sont équivalents mais ne sont pas du même type
                    echo "<p class=\"alert alert-success\">\"varA\" et \"varB\" sont de même valeur.</p>";
                } else{
                    echo "<p class=\"alert alert-danger\">\"varA\" et \"varB\" ne sont pas de même type.</p>";
                }
            ?>
            <h2>Condition avec opérateur combiné "<=>"</h2>
            <?php
                $a = 11; 
                $b = 5;
                echo "<p class=\"alert alert-primary\">".'($a <=> $b) = '.($a <=> $b)."</p>"; // Affiche 1
                $b = 11;
                echo "<p class=\"alert alert-primary\">".'($a <=> $b) = '.($a <=> $b)."</p>"; // Affiche 0
                $b = 12;
                echo "<p class=\"alert alert-primary\">".'($a <=> $b) = '.($a <=> $b)."</p>"; // Affiche -1
                /* 
                * Ici l'opérateur combiné compare à la fois le "<", "=" et ">" en retournant respectivement la valeur 1, 0 et -1
                * "<" ==> -1 si a < b 
                * "=" ==> 0 si a = b
                * ">" ==> 1 si a > b 
                */
                $a = 50;
                $b = 29;
                if(($a <=> $b) == 1){
                    echo "<p class=\"alert alert-primary\">\"a\" est supérieur à \"b\". ".'($a <=> $b) = '.($a <=> $b)."</p>";
                } else if(($a <=> $b) == 0){
                    echo "<p class=\"alert alert-primary\">\"a\" est égal à \"b\". ".'($a <=> $b) = '.($a <=> $b)."</p>";
                } else if(($a <=> $b) == -1){
                    echo "<p class=\"alert alert-primary\">\"a\" est inférieur à \"b\". ".'($a <=> $b) = '.($a <=> $b)."</p>";
                }
            ?>
            <h2>Condition avec "switch"</h2>
            <?php 
                // La condition switch est une autre syntaxe pour écrire un if else if else quand on veut comparer une variable à une multitude de valeurs 
                $langue = 'chinois';
                switch ($langue) {
                    case 'français':
                        echo "<p class=\"alert alert-primary\">Bonjour ! (langue = $langue)</p>";
                        break;
                    case 'italien':
                        echo "<p class=\"alert alert-primary\">Ciao ! (langue = $langue)</p>";
                        break;
                    case 'espagnol':
                        echo "<p class=\"alert alert-primary\">Hola ! (langue = $langue)</p>";
                        break;
                    default:
                        echo "<p class=\"alert alert-primary\">Nǐ hǎo ! (langue = $langue)</p>";
                        break;
                }
                // switch avec l'opérateur de combinaison

                switch ($a <=> $b) {
                    case -1 :  
                        echo 'a est plus petit que b';
                    break; // "break" est obligatoire pour quitter le witcgh une fois un "case " est exécuté
                     case 0 :
                         echo 'a est égal à b' ;
                    break;
                    case 1 :
                         echo 'a est plus grand que b';
                    break;
                
              }
            ?>
        </div>
    </main>
    <footer>
        <div class="d-flex justify-content-evenly align-items-center bg-dark text-light p-3">
            <a class="nav-link" target="_blank" href="https://www.php.net/manual/fr/">Documentation PHP</a>
            <a class="nav-link" href="01_index.php" target="_blank"><img src="assets/img/logo.png" alt="Logo PHP"></a>
            <a class="nav-link" target="_blank" href="https://devdocs.io/php/">DevDocs</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>