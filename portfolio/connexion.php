<?php 

  function connexion() { 

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname= "portfolio";

    try{
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
      echo "Connexion effectuée";
      return $conn;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
        return FALSE;
      exit();
    }
} 
           
          

     






?>