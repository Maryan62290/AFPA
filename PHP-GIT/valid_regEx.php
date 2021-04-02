<?php

/* 1- valider un mot de passe avec les conditions suivantes :<br/>
doit commencer par une maj, suivie par min, ensuite un ensemble de lettres et chiffres et il finit par un caractere special (&$%!?)<br/>
2- valider une adresse mail<br/>
3- valider une adresse postale<br/>
caracteres autorises : lettres, chiffres, . (point), - (tiret de 6), (_) tiret de 8<br/>
4- valider un code postal en France (5 chiffres)<br/>
5- remplacer les num de téléphones (succession de chiffres avec ou sans espace, tiret de 6  (-), tiret de 8 (_) ) par la chaine "non autorisé" <br/>
(utiliser l'une des fonctions regex) chacun dans une fonction à part */




function valid_mdp()
{
  $password = htmlspecialchars($_POST['password']);
	if(isset($password)){
    if(preg_match("/^[a-zA-Z0-9&$%!?]{8,20}$/", $password)){
      echo "Bravo Mot de pass Correct ! <br/> Votre Mot de passe est : ".$password . "<br/>";
    }
    else{
    echo "Format mot de pass incorrect <br/>";
    }
  }else{
    echo "Mot de passe Absent <br/>";
  }    
}




function valid_mail(){
  $email = htmlspecialchars($_POST['email']);
  if(isset($email)){
    if(preg_match("/^[._a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/", $email)){
      echo "Bravo Email correct ! <br/> Votre Email est : " . $email . "<br/>";
    }else{
      echo "Format Email incorrect <br/>" ;
    }
  }else{
    echo "Email Absent <br/>";
  }  
}


function valid_adresse(){
  $adresse = htmlspecialchars($_POST['adresse']);
   
  if(isset($adresse)){
    if(preg_match("/^[A-Za-z0-9 -.éè]+$/", $adresse)){
      echo "Bravo Adresse correct ! <br/> Votre Adresse est : " . $adresse . "<br/>";
    }else{
      echo "Format Adresse incorrect <br/>" ;
    }
  }else{
    echo "Adresse Absent <br/>";
  }  
}




function valid_code(){
  $postale = htmlspecialchars($_POST['postale']);
  
  if(isset($postale)){

    if(preg_match("/^[0-9A-Za-z]{5}$/", $postale)){

      echo "Bravo Code Postale correct ! <br/> Votre Code Postale est : " . $postale . "<br/>";
    }else{
      echo "Format Code Postale incorrect <br/>" ;
    }
  }else{
    echo "Code Postale Absent <br/>";
  }  
}


function valid_phone(){
  
  
  $phone = htmlspecialchars($_POST['phone']);
  $t = preg_replace("/[-_0-9]+/", "non autorisé", $phone) ;
  if(isset($phone)){
    
    if( 1== 1){
        echo "Bravo Téléphone correct ! <br/> Votre Téléphone est : " .  $t . "<br/>";
    }else{
        echo "Format Téléphone incorrect <br/>" ;
    }
  }else{
    echo "Téléphone Absent <br/>";
  }  
}


?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet" >
    <link href="../css/style.css" rel="stylesheet" >

    <title>MDP PHP</title>
  </head>
  <body>
<header>
  <h1 class="box-logo box-title text-center text-light">RegEx expréssion réguliére</h1>
</header>
<div class="container">
  <div class="row">
    <div class="col-2 mx-auto pt-2">
  <form class="box text-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    
    <input type="text" class="box-input" name="password" placeholder="Mot de passe"  /><br/>
    <input type="" class="box-input" name="email" placeholder="Email"  /><br/>
    <input type="text" class="box-input" name="adresse" placeholder="Adresse"  /><br/>
    <input type="number" class="box-input" name="postale" placeholder="Code Postale"  /><br/>
    <input type="text" class="box-input" name="phone" placeholder="Numero Mobile"  /><br/>
    <input type="submit" class="box-button" name="submit" value="Envoyer"  /><input type="reset" class="box-button" name="reset" value="Reset"  />
   
   
</form>
</div><!--col-->
</div><!--row-->


</div><!--container-->
  <?php
  if(isset($_POST["submit"])){
    echo '<div class="container bg-dark text-light p-4">
    <div class="row">' ; valid_mdp(); valid_code() ;valid_phone(); valid_adresse(); valid_mail() ; '</div></div>' ;
  }
  ?>

<p>

</p>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/jquery-3.5.1.js"></script>
    
  
  </body>
</html>
