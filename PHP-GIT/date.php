
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet" >
    <link href="../css/style.css" rel="stylesheet" >

    <title>PHP</title>
  </head>
  <body>
<header>
<div class="container d-flex h-100"><div class="row align-self-center mx-auto">
  <h1 class="box-logo box-title text-center text-light">Date PHP</h1>
  </div></div>
</header>

<div class="container">

<?php

/*ex1-  afficher les dates des weekends du mois en cours
(samedi et dimanche)*/
date_default_timezone_set ("Europe/Paris");

$deb=strtotime("first Saturday of this Month");
$dim=strtotime("first Sunday of this Month");
$fin=strtotime("last day of this Month", $deb);

while ($deb < $fin) {
  echo '<div class="container bg-dark text-light p-4"><div class="row">';
      echo date("d M Y", $deb) . "<br>";
      echo date("d M Y", $dim) . "<br>";
      $deb = strtotime("+1 week", $deb);
      $dim = strtotime("+1 week", $dim);
    echo '</div></div>';

  }


?>

</div><!--container-->

<p>

</p>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/jquery-3.5.1.js"></script>
  </body>
</html>