<?php
require_once "../inc/functions.inc.php";
$cat = allcat();

if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_category'])) {
    
    $idcat = htmlentities($_GET['id_category']);

    if ($_GET['action']=='delete' && !empty($_GET['id_category'])) {

        deletcat($idcat);
        header("location:".RACINE_SITE."admin/categories.php");
    }

    if ($_GET['action']=='update' && !empty($_GET['id_category'])) {
        
        $category = showCatviaID($idcat);
        // die();
    }
}




#################################"Ajout categories
if (isset($_POST) && isset($_POST['name']) && isset($_POST['description'])) {
    
    if (!empty($_POST['name']) && !empty($_POST['description'] )) {
        
        $catname = trim($_POST['name']);
        $catdesc = trim($_POST['description']);
        addCategories($catname , $catdesc);
        header("location:".RACINE_SITE."admin/categories.php");
    }
}

if (empty($_SESSION['user'])) {
    header('location:'.RACINE_SITE.'authentification.php');
} else {
    if ($_SESSION['user']['role'] == 'ROLE_USER') {
        header('location:'.RACINE_SITE.'index.php');
    }
}


#####################################Ajout categories 2 eme facon
$info="";
if (!empty($_POST)) {//si le formulaire est envoyer 

    // On vérifie si un champ est vide
    $verif = true;
    foreach ($_POST as $key => $value) {

        if(empty( trim($value) )) {
            $verif = false;
        }
    }

    if($verif == false){
        $info = alert("Veuillez renseigner tout les champs", "danger");
    }else {
        $catname = trim($_POST['name']);
        $catdesc = trim($_POST['description']);

        if (!isset($catname) || strlen($catname) < 3 || preg_match('/[0-9]/', $catname)) {
            $info = alert("Le champs nom de la categories n'est pas valide", "danger");
        }

        if (!isset($catdesc) || strlen($catdesc) < 20) {
            $info = alert("Le champs description de la categories n'est pas valide", "danger");
        }

        elseif (empty($info)) {
            $catname = strtolower($catname);
            $catname = htmlentities($catname);
            $catBdd = showCat($catname);
            if ($catBdd) {
                $info = alert("la categorie existe deja", "danger");
            }else {
                $catdesc = htmlentities($catdesc);
                
                if ($_GET['action']=='update' && !empty($_GET['id_category'])) {

                    $idcat = htmlentities($_GET['id_category']);
                    update($idcat, $catname, $catdesc);
                    
                }else {
                    addCategories($catname , $catdesc);
                }
                header("location:".RACINE_SITE."admin/categories.php");

            }
        }
    }}

require_once "../inc/header.inc.php";
?>
<div class="row mt-5" style="padding-top: 8rem;">
    <div class="col-sm-12 col-md-6 mt-5">
        <h2 class="text-center fw-bolder mb-5 text-danger">Gestion des catégories</h2>
        <?=$info?>
       
        <form action="" method="post" class="back">

            <div class="row">
                <div class="col-md-8 mb-5">
                    <label for="name">Nom de la catégorie</label>
                    <!-- <input type="text" id="name" name="name" class="form-control" value="<? //isset($category) ? $category['name']:'' ?>"> -->
                    <input type="text" id="name" name="name" class="form-control" value="<?= $category['name'] ?? '' ?>">

                </div>
                <div class="col-md-12 mb-5">
                    <label for="description">Description</label>
                    <textarea id="description"  name="description" class="form-control" rows="10"><?= isset($category) ? $category['description']:'' ?></textarea>
                </div>

            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-danger p-3"><?= isset($category) ? 'Modifier une categories':'Ajouter une catègories' ?></button>
            </div>
        </form>
    </div>

    <div class="col-sm-12 col-md-6 d-flex flex-column mt-5 pe-3">  
        <!-- tableau pour afficher toute les catégories avec des boutons de suppression et de modification -->
        <h2 class="text-center fw-bolder mb-5 text-danger">Liste des catégories</h2>

        <table class="table table-dark table-bordered mt-5 " >
            <thead>
                    <tr>
                    <!-- th*7 -->
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
            </thead>
            <tbody> 
                        <?php
                            foreach ($cat as $key => $cats) {
                        ?>
                        <tr>
                            <td><?= $cats['id_category']?></td>
                            <td><?= html_entity_decode(ucfirst($cats['name']))?></td>
                            <td><?= html_entity_decode($cats['description'])?></td>
                            <td><a href="?action=delete&id_category=<?= $cats['id_category']?>"><i class="bi bi-trash3-fill"></i></a></td>
                            <td><a href="?action=update&id_category=<?= $cats['id_category']?>"><i class="bi bi-pen-fill"></i></a></td>
                        </tr>
                        <?php        
                            }
                        ?>
            </tbody>
        </table>
</div>
<?php
require_once "../inc/footer.inc.php";
?>