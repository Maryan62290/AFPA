<?php 

class Voiture{

    public $marque;
    public $modele;
    public $couleur;
    public $nbrRoue;


    function set_marque($marque){
        $this->marque = $marque;
    }
    function set_modele($modele){
        $this->modéle = $modele;
    }
    function set_couleur($couleur){
        $this->couleur = $couleur;
    }
    function set_nbrRoue($nbrRoue){
        $this->nbrRoue = $nbrRoue;
    }

    function get_marque(){
        return $this->marque ;
    }
    function get_modele(){
        return $this->modéle;
    }
    function get_couleur(){
        return $this->couleur;
    }
    function get_nbrRoue(){
        return $this->nbrRoue;
    }
}

$toyota = new Voiture();
$yaris = new Voiture();
$rouge = new Voiture();
$quatre = new Voiture();

$toyota->set_marque('toyota');
$yaris->set_modele('yaris');
$rouge->set_couleur('rouge');
$quatre->set_nbrRoue(4);

echo $toyota->get_marque();
echo '<br/>';
echo $yaris->get_modele();
echo '<br/>';
echo $rouge->get_couleur();
echo '<br/>';
echo $quatre->get_nbrRoue();




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