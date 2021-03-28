<?php /*
 ///numero phone
$numero = $_POST['numero'];
if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $numero)) {
    echo "Le numéro de téléphone entré est correct.";
    // On peut ajouter le numéro à la base de donnée
} else {
    echo "Le numéro de téléphone entré est incorrect.";
    // On ne peut pas ajouter le numéro à la base de donnée
} */



$phone = $_POST['phone'];

$submit =  $_POST['submit'];


function valid_mdp()
{
  $password = htmlspecialchars($_POST['password']);
	if(!empty($password)){
    if(preg_match("/^[A-Z]{1}[a-z]{1}[a-z0-9]+[&$%!?]$/", $password)){
      echo "Bravo Mot de pass Correct ! <br/> Votre Mot de passe est : ".$password . "<br/>";
    }
    else{
    echo "Format mot de pass incorrect <br/>";
    }
  }else{
    echo "Mot de passe Absent <br/>";
  }    
}
valid_mdp();


function valid_mail(){
  $email = htmlspecialchars($_POST['email']);
  if(!empty($email)){
    if(preg_match("/^[_.a-z0-9-]+@[_.a-z0-9-]{1,}\.[a-z]{2,4}$/", $email)){
      echo "Bravo Email correct ! <br/> Votre Email est : " .$email . "<br/>";
    }else{
      echo "Format Email incorrect <br/>" ;
    }
  }else{
    echo "Email Absent <br/>";
  }  
}
valid_mail();

function valid_adresse(){
  $adresse = htmlspecialchars($_POST['adresse']);
  setlocale(LC_CTYPE, 'fr_FR','fra');
  $accent = preg_quote("ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ", "^") ;

  if(!empty($adresse)){
    if(preg_match("/^[0-9]+[ -_.]?[a-z\w]{1,}[ -_.]?[a-z\w]{1,}[ -_.]?[a-z\w]{1,}$/", $adresse)){
      
      for($i=0;$i<strlen($accent);$i++){
        echo $accent[$i]."*";
      }
      echo "Bravo Adresse correct ! <br/> Votre Adresse est : " .$adresse . "<br/>";
    }else{
      echo "Format Adresse incorrect <br/>" ;
    }
  }else{
    echo "Adresse Absent <br/>";
  }  
}
valid_adresse();

function valid_code(){
  $postale = htmlspecialchars($_POST['postale']);
  
  if(!empty($postale)){
    if(preg_match("/^[0-9]{5}$/", $postale)){
      echo "Bravo Code Postale correct ! <br/> Votre Code Postale est : " .$postale . "<br/>";
    }else{
      echo "Format Code Postale incorrect <br/>" ;
    }
  }else{
    echo "Code Postale Absent <br/>";
  }  
}
valid_code();


?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet" >

    <title>MDP PHP</title>
  </head>
  <body>
  <h1 class="box-logo box-title text-center">EXO PHP Valid_Form</h1>

<div class="container">
  <div class="row">
 
  <form class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    
    <input type="text" class="box-input" name="password" placeholder="Mot de passe"  /><br/>
    <input type="" class="box-input" name="email" placeholder="Email"  /><br/>
    <input type="text" class="box-input" name="adresse" placeholder="Adresse"  /><br/>
    <input type="number" class="box-input" name="postale" placeholder="Code Postale"  /><br/>
    <input type="number" class="box-input" name="phone" placeholder="Numero Mobile"  /><br/>
    <input type="submit" class="box-button" name="submit" value="Envoyer"  /><input type="reset" class="box-button" name="reset" value="Reset"  />
    <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button>
   
</form>

</div><!--row-->

</div><!--container-->
<p>
*/1- valider un mot de passe avec les conditions suivantes :<br/>
doit commencer par une maj, suivie par min, ensuite un ensemble de lettres et chiffres et il finit par un caractere special (&$%!?)<br/>
2- valider une adresse mail<br/>
3- valider une adresse postale<br/>
caracteres autorises : lettres, chiffres, . (point), - (tiret de 6), (_) tiret de 8<br/>
4- valider un code postal en France (5 chiffres)<br/>
5- remplacer les num de téléphones (succession de chiffres avec ou sans espace, tiret de 6  (-), tiret de 8 (_) ) par la chaine "non autorisé" <br/>
(utiliser l'une des fonctions regex) chacun dans une fonction à part
</p>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/jquery-3.5.1.js"></script>
    
  
  </body>
</html>