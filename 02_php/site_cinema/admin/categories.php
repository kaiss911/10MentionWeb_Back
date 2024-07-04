<?php
require_once "../inc/functions.inc.php";
require_once "../inc/header.inc.php";
$cat = allcat();

if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_category'])) {

    if ($_GET['action']=='delete' && !empty($_GET['id_category'])) {
        $idcat = htmlentities($_GET['id_category']);
        deletcat($idcat);
        header("location:".RACINE_SITE."admin/categories.php");
    }
}

if (isset($_POST) && isset($_POST['name']) && isset($_POST['description'])) {
    
    if (!empty($_POST['name']) && !empty($_POST['description'] )) {
        
        $catname = $_POST['name'];
        $catdesc = $_POST['description'];
        addCategories($catname , $catdesc);
        header("location:".RACINE_SITE."admin/categories.php");
    }
}


?>
<div class="row mt-5">
    <div class="col-sm-12 col-md-6 ">
        <h2 class="text-center fw-bolder text-danger">Gestion des catégories</h2>
        <form action="" method="post" class="back">
            <div class="row">
                <div class="col-md-8 mb-5">
                    <label for="name" class="text-light">Nom de la catégorie</label>
                    <input type="text" id="name" name="name" class="form-control" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5">
                    <label for="description" class="text-light">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" id="description" class="btn btn-danger p-2">Ajouter</button>
            </div>
        </form>
    </div>
    <div class="col-sm-12 col-md-6 ">  
        <!-- tableau pour afficher toutes les catégories avec des boutons de suppression et de modification -->
        <h2 class="text-center fw-bolder mb-5 text-danger">Liste des catégories</h2>
        <table class="table  table-dark table-bordered mt-5">
                <thead>
                <tr>
                <!-- th*7 -->
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                </thead>
            <tbody>

                <?php
                    foreach ($cat as $key => $cats) {
                ?>
                <tr>
                    <td><?= $cats['id_category']?></td>
                    <td><?= $cats['name']?></td>
                    <td><?= $cats['description']?></td>
                    <td><a href="?action=delete&id_category=<?= $cats['id_category']?>"><i class="bi bi-trash3-fill"></i></a></td>
                </tr>
                <?php        
                    }
                ?>
            </tbody>
        </table>
<?php
require_once "../inc/footer.inc.php";
?>