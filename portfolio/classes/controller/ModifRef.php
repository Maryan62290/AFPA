<?php

require_once "../model/ModelRef.php";
require_once "../view/ViewTemplateUser.php";

ViewTemplate::menu();

if (isset($_GET['id'])) {

        if (ModelReference::getReferenceById($_GET['id'])) {
            ViewReference::modifReference($_GET['id']);
        } else {
            ViewTemplate::alert("La référence n'existe pas.", "danger", "ListeRef.php");
        }
    } else {
        if (isset($_POST['modif'])) {
            if (isset($_POST['id']) && ModelReference::getReferenceById($_POST['id'])) {
                ModelReference::modifReference($_POST['id'], $_POST['type_ref_id'], $_POST['nom'], $_POST['techno'], $_POST['contributeurs'], $_POST['lien']);
                ViewTemplate::alert("Modif faite avec succès.", "success", "ListeRef.php");
            } else {
                ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeRef.php");
            }
        } else
            ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeRef.php");
    }

ViewTemplate::footer();

?>
