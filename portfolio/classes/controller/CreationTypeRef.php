<?php
require_once "../view/ViewTypeRef.php";
require_once "../view/ViewTemplateUser.php";

ViewTemplate::menu();


if (isset($_POST['ajout'])) {
        ModelTypeRef::ajoutTypeRef($_POST['type_ref'], $_POST['support']);
        ViewTemplate::alert("Les données sont insérées avec succès", "success", "ListeTypeRef.php");
    } else {
        ViewTypeRef::ajoutTypeRef();
    }



ViewTemplate::footer();


?>
