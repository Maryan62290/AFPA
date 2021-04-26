<?php
require_once "../model/ModelTypeRef.php";
require_once "../view/ViewTemplateUser.php";

ViewTemplate::menu();
if (isset($_GET['id'])) {
      if (ModelTypeRef::getTypeRef($_GET['id'])) {
          ModelTypeRef::SuppTypeRef($_GET['id']);

          ViewTemplate::alert("Le type de référence a été supprimé avec succès.", "success", "ListeTypeRef.php");
      } else {
          ViewTemplate::alert("Le type de référence n'existe pas.", "danger", "ListeTypeRef.php");
      }
  } else {
      ViewTemplate::alert("Aucune donnée n'a été transmise.", "danger", "ListeTypeRef.php");
  }
    ViewTemplate::footer();
?>
