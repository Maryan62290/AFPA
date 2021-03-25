<?php



function JSONToArray() {

    $tab=["nom"=>"produit phare","description" => "Le produite phare de notre site", "prix" => 1000, "categ" => "PC"];

    $obj = json_decode($tab, true);

    foreach($obj as $key => $value) {
        echo $key . " => " . $value . "<br>";
      }

     
    
   }

   JSONToArray () ;

?>


