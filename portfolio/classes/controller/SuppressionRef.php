<?php
require_once "../model/ModelRef.php";
require_once "../view/ViewTemplates.php";

ViewTemplates::menu();

if (isset($_GET['id']))
{
  if (ModelRef::getRef($_GET['id']))
  {
    ModelRef::suppRef($_GET['id']);
    ViewTemplates::alert("L'utilsateur a été supprimé avec succès.", "success", "ListeRef.php");
  }
  else
  {
    ViewTemplates::alert("L'utilisateur n'existe pas.", "danger", "ListeRef.php");
  }
}
else
{
ViewTemplates::alert("Aucune donnée n'a été transmise.", "danger", "ListeRef.php");
}

ViewTemplates::footer();

 ?>
