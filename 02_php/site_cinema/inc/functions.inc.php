<!-- fichier qui contient les fonctions php à utiliser dans notre site  -->
 <?php


    function debug($var){
        echo '<pre class="border border-dark bg-light text-primary w-50 p-3">';
            var_dump($var);
        echo'</pre>';
    }
        // On vas utiliser l'extension PHP Data Objects (PDO), elle définit une excellente interface pour accéder à une base de données depuis PHP et d'exécuter des requêtes SQL .
               // Pour se connecter à la BDD avec PDO il faut créer une instance de cet Objet (PDO) qui représente une connexion à la base,  pour cela il faut se servir du constructeur de la classe
               // Ce constructeur demande certains paramètres:
// On déclare des constantes d'environnement qui vont contenir les information à la connexion à la BDD


    // constante du serveur => localhost
    define("DBHOST", "localhost");
    // constante utilisateur de la BDD (serveur local) => root
    define("DBUSER", "root");
     // constante mot de passe (serveur local) => empty
    define("DBPASS","");
    // constante nom BDD 
    define("DBNAME","cinema"); 

    function connexionBdd(){
        $dsn = "mysql:host=".DBHOST.";dbname=".DBNAME.";charset=utf8";
    
    //Grâce à PDO on peut lever une exception (une erreur) si la connexion à la BDD ne se réalise pas(exp: suite à une faute au niveau du nom de la BDD) et par la suite si elle cette erreur est capté on lui demande d'afficher une erreur

    try {// dans le try on vas instancier PDO, c'est créer un objet de la classe PDO (un élment de PDO)
                              // avec la variable dsn les constantes d'environnement
        $pdo = new PDO($dsn , DBUSER , DBPASS);
        echo "c'est connecter";

        
    } catch (PDOException $e){// PDOException est une classe qui représente une erreur émise par PDO et $e c'est l'objetde la clase en question qui vas stocker cette erreur
        die("Erreur : " . $e->getMessage());// die d'arrêter le PHP et d'afficher une erreur en utilisant la méthode getmessage de l'objet $e
    }

    //le catch sera exécuter dès lors on aura un problème dans le try

    return $pdo;//ici on utilise un return car on récupère l'objet de la fonction que l'on vas appelé  dans plusieurs autre fonctions
    }
    connexionBdd();

    
    function createTableCategories(){

        $cnx = connexionBdd();
        $sql = "CREATE TABLE IF NOT EXISTS categories(
            id_category INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            name VARCHAR(50) NOT NULL, 
            description TEXT NULL)";
        $request = $cnx->exec($sql);
    }
    createTableCategories();


    function createTableFilms(){

        $cnx = connexionBdd();
        $sql = " CREATE TABLE IF NOT EXISTS films (
             id_film INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
             category_id INT NOT NULL,
             title VARCHAR(100) NOT NULL,
             director VARCHAR(100) NOT NULL,
             actors VARCHAR(100) NOT NULL,
             ageLimit VARCHAR(5) NULL,
             duration TIME NOT NULL,
             synopsis text NOT NULL,
             date DATE NOT NULL,
             image VARCHAR(250) NOT NULL,
             price Float NOT NULL,
             stock BIGINT NOT NULL
             )";
        $request = $cnx->exec($sql);
   }
   createTableFilms();


   function createTableUsers(){

        $cnx = connexionBdd();
        $sql = " CREATE TABLE IF NOT EXISTS users (
            id_user INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            firstName VARCHAR(50),
            lastName VARCHAR(50) NOT NULL,
            pseudo VARCHAR(50) NOT NULL,
            mdp VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            civility ENUM('f', 'h') NOT NULL,
            birthday date NOT NULL,
            address VARCHAR(50) NOT NULL,
            zip VARCHAR(50) NOT NULL,
            city VARCHAR(50) NOT NULL,
            country VARCHAR(50),
            role ENUM('ROLE_USER','ROLE_ADMIN') DEFAULT 'ROLE_USER' 
            )";
        $request = $cnx->exec($sql);
    }

createTableUsers();


###############################Création des clés etrangères ###############################

//$tableF table ou on va crée la clé etrangère
//$tableP table à partir de laquelle on récupère la clé primaire
//$keyF la clé étrangère 
//$keyP la clé primaire 

function foreignKey(string $tableF, string $keyF, string $tableP, string $keyP){
    $cnx = connexionBdd();
    $sql = "ALTER TABLE $tableF ADD CONSTRAINT FOREIGN KEY ($keyF) REFERENCES $tableP ($keyP)";
    $request = $cnx->exec($sql);
}

//Creation de la table étrangère dans la table films

// foreignKey('films' , 'category_id' , 'categories' , 'id_category');

############################### Fonction du CRUD pour les utilisateurs#####################

//Insription

function inscriptionUsers(string $lastName ,string $firstName ,string $pseudo ,string $email ,string $phone ,string $mdp ,string $civility ,string $birthday ,string $address ,string $zip ,string $city ,string $country){

    /* Les requêtes préparer sont préconisées si vous exécutez plusieurs fois la même requête. Ainsi vous évitez au SGBD de répéter toutes les phases analyse/ interpretation / exécution de la requête (gain de performance). Les requêtes préparées sont aussi utilisées pour nettoyer les données et se prémunir des injections de type SQL.

        1-On prépare la rêquete
        2-On lie le marqueur à la requête
        3- On exécute la requête
    */
        
    $cnx = connexionBdd();
    $sql = "INSERT INTO users 
    ( lastName, firstName, pseudo, email, phone, mdp, civility, birthday, address , zip , city, country) VALUES (:lastName, :firstName, :pseudo, :email, :phone, :mdp, :civility, :birthday, :address , :zip , :city, :country)";
     $request = $cnx->prepare($sql);
     //prepare() est une méthode qui permet de préparer la requête sans l'exécuter. Elle contient un marqueur :nom qui est vide et attend une valeur.
                    //$requet est à cette ligne  encore un objet PDOstatement .
    $request->execute(array(
        ":lastName"=>$lastName,
        ":firstName"=>$firstName,
        ":pseudo"=>$pseudo, 
        ":email"=>$email, 
        ":phone"=>$phone, 
        ":mdp"=>$mdp, 
        ":civility"=>$civility,
        ":birthday"=>$birthday,
        ":address"=>$address, 
        ":zip"=>$zip, 
        ":city"=>$city, 
        ":country"=>$country
    ));
}
 ?>