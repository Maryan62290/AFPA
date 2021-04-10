<?php



function connexion(){

    $username = "root";
    $servername ="localhost";
    $password ="root";
    $dbname = "afpa";

    try{
        $conn = new PDO("mysql:hostname=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
       
        echo "Connexion effectuée";
    
    }catch(PDOexeption $e){
    
        echo $sql."<br/>".$e->getMessage();
        
    }
}




?>

