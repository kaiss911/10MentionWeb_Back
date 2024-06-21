<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Cours">
    <meta name="author" content="kaïss">
    <title>PHP exo</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php" target="_blank">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php" target="_blank">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php" target="_blank">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <main>
        <div class="contactez-nous">
            <form action="#" method="post">
                <div>
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" placeholder="Martin" required>
                </div>
                <div>
                <label for="email">Votre e-mail</label>
                <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
                </div>
                <div>
                <label for="sujet">Quel est le sujet de votre message ?</label>
                <select name="sujet" id="sujet" required>
                <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
                <option value="probleme-compte">Problème avec mon compte</option>
                <option value="question-produit">Question à propos d'un produit</option>
                <option value="suivi-commande">Suivi de ma commande</option>
                <option value="autre">Autre...</option>
                </select>
                </div>
                <div>
                <label for="message">Votre message</label>
                <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
                </div>
                <div>
                <button type="submit">Envoyer mon message</button>
                </div>
            </form>
<?php
echo "<p class=\"bg-light text-black rounded\">";
var_dump($_POST);
echo "</p>";

?>
        </div>
        </main>
    <footer>
        <div class="d-flex justify-content-evenly align-items-center bg-dark text-light p-3">
            <a class="nav-link" target="_blank" href="https://www.php.net/manual/fr/">Documentation PHP</a>
            <a class="nav-link" target="_blank" href="https://devdocs.io/php/">DevDocs</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>