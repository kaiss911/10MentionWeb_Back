<?php
require_once "../inc/functions.inc.php";
$users = aLLUsers();
if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_user'])) {
    
    if ($_GET['action']=='delete' && !empty($_GET['id_user'])) {
        $idUser = htmlentities($_GET['id_user']);
        deletUser($idUser);
        debug(deletUser($idUser));
    }
    
    if ($_GET['action']=='update' && !empty($_GET['id_user'])) {
        $idUser = htmlentities($_GET['id_user']);
        $user = showUser($idUser);
        
        if ($user['role'] == 'ROLE_ADMIN') {
            updateRole('ROLE_USER', $idUser);
            header("location:".RACINE_SITE."admin/users.php");
            
        } else {
            updateRole('ROLE_ADMIN', $idUser);
            header("location:".RACINE_SITE."admin/users.php");
        }
        
    }
}
//gestion de l'accessibilité des pages admin
if (empty($_SESSION['user'])) {
    header('location:'.RACINE_SITE.'authentification.php');
} else {
    if ($_SESSION['user']['role'] == 'ROLE_USER') {
        header('location:'.RACINE_SITE.'index.php');
    }
}



require_once "../inc/header.inc.php";
?>
<div class="d-flex flex-column m-auto mt-5 table-responsive">   
        <!-- tableau pour afficher toutles films avec des boutons de suppression et de modification -->
            <h2 class="text-center fw-bolder mb-5 text-danger">Liste des utilisateurs</h2>
            <table class="table  table-dark table-bordered mt-5">
                <thead>
                <tr>
                <!-- th*7 -->
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Civility</th>
                    <th>Address</th>
                    <th>Zip</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Rôle actuel</th>
                    <th>Supprimer</th>
                    <th>Modifier Le rôle</th>
                </tr>
                </thead>
            <tbody>

                <?php
                    foreach ($users as $key => $user) {

                ?>
                <tr>
                    <td><?= $user['id_user']?></td>
                    <td><?= $user['firstName']?></td>
                    <td><?= $user['lastName']?></td>
                    <td><?= $user['pseudo']?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['phone']?></td>
                    <td><?= $user['civility']?></td>
                    <td><?= $user['address']?></td>
                    <td><?= $user['zip']?></td>
                    <td><?= $user['city']?></td>
                    <td><?= $user['country']?></td>
                    <td><?= $user['role']?></td>
                    <td class="text-center"><a href="?action=delete&id_user=<?= $user['id_user']?>"><i class="bi bi-trash3-fill"></i></a></td>
                    <td class="text-center"><a href="?action=update&id_user=<?= $user['id_user']?>" class="btn btn-danger"><?=$user['role'] == 'ROLE_ADMIN' ?'ROLE_USER' : 'ROLE_ADMIN'?></a></td>
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