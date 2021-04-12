<?php
   
    require "../includes/header.php";
    require_once  "../view/ViewUser.php" ;
    require_once  "../model/ModelUser.php";
    

    if (isset($_POST['ajout'])) {

        ModelUser::ajoutUser($_POST['nom'], $_POST['prenom'],$_POST['mail'], $_POST['tel'], $_POST['adresse'], $_POST['photo'], $_POST['description']);

    ?>
        <div class="alert alert-success" role="alert">
            simple Alert réussie !!
        </div>
    <?php
    } else {
        ViewUser::ajoutUser();
    }





    require "../includes/footer.php";

    ?>
