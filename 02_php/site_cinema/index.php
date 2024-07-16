<?php
require_once "inc/functions.inc.php";

if (isset($_GET) && !empty($_GET)) {

    if (isset($_GET['id_category']) && !empty($_GET['id_category'])) {
      

        $idCategory = htmlentities($_GET['id_category']);

    if (is_numeric($idCategory)) {
       

        $v = filmbycategory($idCategory);

    }else {

       header('location:index.php');
    }

 }elseif(isset($_GET['action']) && $_GET['action'] == 'voirplus' ) {

    $v = allfilm();
 }

    

}else {

    $v = filmBydate();
}



require_once "inc/header.inc.php";

?>

<div class="films">
    <h2 class="fw-bolder fs-1 mx-5 text-center"></h2>
    <div class="row">
        <?php
        foreach ($v as $key => $value) {
        ?>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
            <div class="card">
                <img src="<?=RACINE_SITE?>assets/<?=$value['image']?>" alt="" >
                <div class="card-body">
                    <h3><?=$value['title']?></h3>     
                    <h4><?=$value['director']?></h4>
                    <p><span class="fw-bolder"><?=substr($value['synopsis'], 0,90). '...'?></span></p>
                    <a href="<?=RACINE_SITE?>showFilm.php?id_film=<?=$value['id_film']?>"class="btn">Voir plus</a>                            
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="col-sm-12 col-md-6">
            <a href="<?=RACINE_SITE?>?action=voirplus" class="btn fs-3">Afficher tous les films</a>                           
        </div>
    </div>
</div>
<?php
require_once "inc/footer.inc.php";
?>