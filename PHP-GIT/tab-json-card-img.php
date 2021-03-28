<?php

// ex pour ce soir, il faut ajouter des champs photos dans le tab
//  faire un affichage responsive (pc, tablette, mobile) en utilisant le composant card

?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet" >

    <title>JSON PHP</title>
  </head>
  <body>
    <h1 class="h1 text-center">Produits</h1>

<div class="container">
  <div class="row">
 
<?php 

$jsonData=
'[
    {"nom":"Ballon","description":"un ballon","prix":25, "categ":"jouets", "photo":"1.png"},
    {"nom" : "PC", "description" :"un PC", "prix" : 1000, "categ" :"informatique",  "photo":"2.png"},
    {"nom" : "Tablette", "description" :"une tablette", "prix" : 120, "categ" :"téléphonie", "photo":"3.png"},
    {"nom" : "Aspirateur", "description" :"un aspirateur", "prix" : 200, "categ" :"électroménager",  "photo":"4.png"},
    {"nom" : "Vélo", "description" :"bleu", "prix" : 1200, "categ" :"Sport",  "photo":"5.png"},
    {"nom" : "Voiture", "description" :"une voiture", "prix" : 4200, "categ" :"Automobile",  "photo":"6.png"}
    
    
]';

$tab = json_decode($jsonData, true);
$len = count($tab) - 1 ;

  for($i = 0 ; $i <= $len ; $i++){

?>

    <div class="card col-md-4 col-lg-3 col-sm-6">
            <img class="card-img-fluid" alt="Card image cap" src="https://fakeimg.pl/250x100/<?php echo $tab[$i]["photo"] ; ?> "/>
              <div class="card-body"><h5 class="card-title"><?php echo $tab[$i]["nom"] ; ?></h5>
                 <h6 class="card-subtitle mb-2 ">'<?php echo $tab[$i]["categ"] ; ?></h6>
                   <p class="card-text"><?php echo $tab[$i]["description"] ; ?></p>
                      <a href="#" class="btn btn-primary"><?php echo $tab[$i]["prix"] ; ?></a></div></div> 
    
                   
}
?>

</div><!--row-->

</div><!--container-->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/jquery-3.5.1.js"></script>
    
  
  </body>
</html>

