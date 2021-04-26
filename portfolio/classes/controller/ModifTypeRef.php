<?php
require_once "../model/ModelTypeRef.php";
require_once "../view/ViewTemplateUser.php";
require_once "../view/ViewTypeRef.php";

ViewTemplate::menu();

if (isset($_GET['id'])) {
        if (ModelTypeRef::getTypeRef($_GET['id'])) {
            ViewTypeRef::modifTypeRef($_GET['id']);
        } else {
            ViewTemplate::alert("Aucun Type Ref existe.", "danger", "ListeTypeRef.php");
        }
    } else {
        if (isset($_POST['modif'])) {
            if (isset($_POST['id']) && ModelTypeRef::getTypeRef($_POST['id'])) {
                ModelTypeRef::modifTypeRef($_POST['id'], $_POST['type_ref'], $_POST['support']);
                ViewTemplate::alert("La modif a été faite", "success", "ListeTypeRef.php");
            } else {
                ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeRef.php");
            }
        } else {
            ViewTemplate::alert("Aucune donnée .", "danger", "ListeTypeRef.php");
        }
    }

ViewTemplate::footer();
?>
