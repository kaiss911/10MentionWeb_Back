# ******* Qu'est-ce qu'une injection SQL ? ********
Une injection SQL est une technique malveillante où un attaquant insère ou "injecte" des requêtes SQL malveillantes dans des entrées prévues pour être des données. Cela peut compromettre la base de données en permettant l'accès non autorisé, la modification ou la suppression de données.

# ******* Comment les requêtes préparées aident-elles ? *******
Les requêtes préparées séparent la logique de la requête (la commande SQL elle-même) des données. Les paramètres sont traités comme des données brutes, non des parties de la commande SQL.
En utilisant des paramètres nommés ou positionnels, les valeurs sont automatiquement échappées et mises en guillemets, rendant impossible pour un attaquant de manipuler la requête SQL en injectant du code SQL malveillant.

# ******* Qu'est-ce qu'une requête préparée ? ***********
Une requête préparée est une requête SQL où le serveur de base de données précompile la commande SQL sans les données, ce qui permet de la réutiliser efficacement avec différentes données.

######
## Types de XSS

    1 - XSS Réfléchi (Reflected XSS) :

Description : Se produit lorsque le script malveillant est reflété sur le serveur, puis renvoyé à l'utilisateur dans la réponse HTTP immédiate.
Exemple : L'attaquant envoie un lien contenant le script malveillant à la victime. Lorsque la victime clique sur le lien, le script est exécuté dans le navigateur de la victime.


        <form action="search.php" method="get">
        <input type="text" name="query">
        <input type="submit" value="Search">
        </form>

Si search.php renvoie simplement la requête sans échapper les caractères spéciaux :

        <?php echo $_GET['query']; ?>
L'attaquant pourrait envoyer une URL comme :

        http://example.com/search.php?query=<script>alert('XSS');</script>
Lorsque l'utilisateur clique sur ce lien, une boîte de dialogue d'alerte s'affiche.

    2 - XSS Persistant (Stored XSS) :

Description : Le script malveillant est stocké sur le serveur (par exemple, dans une base de données) et est servi à plusieurs utilisateurs.
Exemple : L'attaquant injecte le script malveillant dans un champ de formulaire (comme un commentaire ou un message de forum) qui est ensuite affiché à tous les utilisateurs qui visitent cette page.

L'attaquant soumet un commentaire avec un script malveillant :

    <script>alert('XSS');</script>
Ce commentaire est stocké dans la base de données et affiché chaque fois que la page est chargée, exécutant ainsi le script pour chaque utilisateur qui visite la page.

    3 - XSS DOM-based :

Description : Se produit lorsque le script malveillant est exécuté en manipulant le Document Object Model (DOM) dans le navigateur, sans interaction avec le serveur.
Exemple : Le script malveillant est injecté directement dans la page via le DOM, souvent en modifiant l'URL ou d'autres propriétés du navigateur.

Si un site a du JavaScript qui lit la valeur d'un paramètre de la requête et l'insère dans la page sans échapper les caractères spéciaux :

    document.write(location.href.split('name=')[1]);

Un attaquant pourrait envoyer un lien comme :

    http://example.com/page.html?name=<script>alert('XSS');</script>
Lorsque la victime visite ce lien, le script est exécuté.

## Conséquences des Attaques XSS
Les attaques XSS peuvent avoir de graves conséquences, notamment :

- Vol de cookies et d'informations de session : L'attaquant peut voler des cookies, ce qui peut permettre de détourner des sessions utilisateur.

- Défiguration de site : L'attaquant peut injecter du contenu malveillant ou offensant dans le site.

- Phishing : L'attaquant peut rediriger les utilisateurs vers des sites de phishing ou afficher des formulaires de connexion factices pour voler des informations d'identification.

- Distribution de malware : L'attaquant peut utiliser XSS pour distribuer des logiciels malveillants aux utilisateurs du site.

## Protection Contre les Attaques XSS
Pour protéger votre application contre les attaques XSS, suivez ces pratiques :

1 - Échapper les données en sortie : Utilisez des fonctions comme htmlspecialchars en PHP pour échapper les caractères spéciaux dans les données utilisateur avant de les afficher.

    echo htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
2 - Valider et assainir les entrées utilisateur : Assurez-vous que les données utilisateur sont valides et ne contiennent pas de scripts malveillants.

3 - Utiliser des en-têtes de sécurité HTTP :
- Content Security Policy (CSP) : Limitez les sources de scripts qui peuvent être exécutés sur votre site.

        Content-Security-Policy: default-src 'self';

4 - Utiliser des bibliothèques de modèles sécurisées : Utilisez des bibliothèques de modèles qui échappent automatiquement les données insérées dans les vues.

5 - Limiter l'utilisation de l'attribut eval : Évitez d'utiliser des méthodes JavaScript dangereuses comme eval qui peuvent exécuter du code arbitraire.

# Conclusion

XSS est une vulnérabilité sérieuse, mais en suivant les bonnes pratiques de sécurité et en utilisant les outils et techniques appropriés, vous pouvez protéger votre application contre ces attaques.
Markdown
Informations
Cet extrait a été créé le 4 juil. 2024 à 14:30:54

Cet extrait expire le 3 août 2024 à 14:30:54

Langage : markdown

Logo markdown

Link
Voici votre URL de partage : https://sharemycode.io/c/1e362c4
Ce code a été partagé avec Share on ShareMyCode.io pour VSCode
