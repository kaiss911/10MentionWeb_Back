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
    <title>PHP Cours - Importation des fichiers</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Logo PHP"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"><?php
            $statut = 'connecté';
  ?>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img class="w-25 img-fluid" src="../cours_Sahar/assets/img/logo.png" alt="logo php"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Accueil</a>
          </li>
          <?php 
          if($statut == 'connecté'){
            ?>
            <li class="nav-item">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>
          <?php 
        }else{ 
          ?>
          <li class="nav-item">
            <a class="nav-link" href="inscription.php">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexion.php">Connexion</a>
          </li>
          <?php 
        }
         ?>
          
        </ul>
            </div>
        </div>
    </nav>
    <!-- fin navbar -->
        <main>
            <?php
            $items = [
                [
                    "titre" => "piano",
                    "description" => "Ceci est un piano",
                    "photo" => "logo.png"
                ],
                [
                    "titre" => "pomme",
                    "description" => "Ceci est une pomme",
                    "photo" => "logo.png"
                ],
                [
                    "titre" => "stylo",
                    "description" => "Ceci est un stylo",
                    "photo" => "logo.png"
                ]
            ];
            foreach ($items as $item) {
                echo '<div class="card">';
                echo '<h3>' .$item['titre']. '</h3>';
                echo '<p class="text-black">' .$item['description'].'</p>';
                echo '<img src="assets/img/' . $item['photo'] .'">';
                echo '</div>';
            };
            
            ?>
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