<?php 



class Voiture{

    private $marque;
    private $modele;
    public $couleur;
    public $nbrRoue;

    function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
      }
      
    
    
   // SETTER
    function set_couleur($couleur){
        $this->couleur = $couleur;
        return $this;
    }
    function set_nbrRoue($nbrRoue){
        $this->nbrRoue = $nbrRoue;
        return $this;
    }

    // GETTER
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



$toyota = new Voiture("Audi", "A3");
$toyota->set_couleur('rouge')->set_nbrRoue(4);
var_dump($toyota);
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