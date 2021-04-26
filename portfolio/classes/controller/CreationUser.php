<?php
   
    require (__DIR__ . "/../includes/header.php");
    require_once  "../view/ViewUser.php" ;
    require_once  "../model/ModelUser.php";
    require_once  "../controller/UploadPhoto.php";

    
    if (isset($_POST['ajout']) && UploadPhoto::AjoutImage()) {
        
        ModelUser::ajoutUser($_POST['nom'], $_POST['prenom'],$_POST['mail'], $_POST['tel'], $_POST['adresse'], $_FILES['photo'], $_POST['description']);
            
?>
        <div class="alert alert-success" role="alert">
            Utilisateur Ajouté et Upload de l'image terminé !! 
        </div>
<?php
    } else {

        ViewUser::ajoutUser();
    }

    require (__DIR__ . "/../includes/footer.php");

?>

