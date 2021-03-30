<?php 



class Voiture{

    public $marque;
    public $modele;
    public $couleur;
    public $nbrRoue;

    function __construct() {
        
      }
     
    function set_marque($marque){
        $this->marque = $marque;
        return $this;
    }
    function set_modele($modele){
        $this->modele = $modele;
        return $this;
    }
    function set_couleur($couleur){
        $this->couleur = $couleur;
        return $this;
    }
    function set_nbrRoue($nbrRoue){
        $this->nbrRoue = $nbrRoue;
        return $this;
    }

    function get_marque(){
        return $this->marque ;
    }
    function get_modele(){
        return $this->modele;
    }
    function get_couleur(){
        return $this->couleur;
    }
    function get_nbrRoue(){
        return $this->nbrRoue;
    }
}



$toyota = new Voiture();


$toyota->set_marque('toyota')->set_modele('yaris')->set_couleur('rouge')->set_nbrRoue(4);

echo $toyota->get_marque();
echo '<br/>';
echo $toyota->get_modele();
echo '<br/>';
echo $toyota->get_couleur();
echo '<br/>';
echo $toyota->get_nbrRoue();



?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet" >

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>POO</h1>



    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/jquery-3.5.1.js"></script>
    
  
  </body>
</html>
