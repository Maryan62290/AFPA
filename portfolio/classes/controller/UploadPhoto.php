<?php

require_once  "CreationUser.php";

class UploadPhoto{

    public static function AjoutImage(){

          $img = $_FILES['photo']; // Tab info Image
          $name = $img['name']; // Nom de l'image
          $tmp = $img['tmp_name']; // Nom du dossier temporaire que php crée
          $maxSize = $img['size']; // Poids de l'image
          $maxTaille = [1000,1000]; // Tableau taille image en px max (pas obligatoire)
          $typeImg = $img['type']; // Type de l'image
          $codeER = $img['error']; // Code erreur généré par php
          $dossier = '../../img/client'; // Dossier image
        // $img dc $_FILES['photo'] fait un var_dump ça te retourne un tab assoc qui a des valeurs et tu joues avec ces valeurs pour tester
          var_dump($img);

          $tabErrors = [
              0 => '<p class="text-danger text-center">Le téléchargement de l\'image c\'est passé avec succés !</p>',
              1 => '<p class="text-danger text-center">L\'image dépasse le poids autorisé !</p>', //taille defini dans le fichier php init
              2 => '<p class="text-danger text-center">La taille du fichier téléchargé excède 5Mo !</p>', //MAxsize dans html
              3 => '<p class="text-danger text-center">Le fichier n\'a été que partiellement téléchargé.</p>',
              4 => '<p class="text-danger text-center">Aucun fichier n\'a été téléchargé !</p>',
              6 => '<p class="text-danger text-center">Un dossier temporaire est manquant !</p>',
              7 => '<p class="text-danger text-center">Échec de l\'écriture du fichier sur le disque !</p>',
              8 => '<p class="text-danger text-center">Une extension PHP a arrêté l\'envoi de fichier !</p>',
              9 => '<p class="text-danger text-center">L\'image téléchargé ne respecte pas les conditions (extension/taille/poids)</p>',
          ];
   // Test extention de l'img
          $extension = strtolower(strrchr($name, ".")); // Mets tout en minuscule et recupére l'extention avec le point inclus
          $tabEX = [".png",".jpg",".jpeg",".gif",".bmp", ".svg", ".tiff", ".tga"]; // Tableau des extentions OK !
          $extER = [".php", ".js", ".java", ".html", ".css", ".py", ".php3", ".exe", ".bat", ".cmd", "vbs", "vbe", "jse", "wsf", "msc", ".7zip", ".rar", "zip",
          ".bzip", ".bzip2", ".xml", ".xhtml", ".sql", " "]; // Tab extention interdite au cas ou on pourrait les renommer...

        //Test si l'image est vide
        if(!empty($name))
        {
          $dimension = getimagesize($tmp); // recupére les dimensions de l'image dans un tableau $dimension[0]->width et $dimension[1]->height
          //Test sur l'image extension->poids->taille
          if(in_array($extension, $tabEX) && $maxSize < 5000000 && $maxTaille[0] >= $dimension[0] && $maxTaille[1] >= $dimension[1]){

            $name = md5($name);
            var_dump($name);

            switch($codeER)
              {
                  case 0:
                      $push = move_uploaded_file($tmp, "$dossier/$name");
                      return $push ;
                  case 1:
                      // Fichier init modifié  upload_max_filesize = 5000000 octets (5Mo)
                      echo $tabErrors[1];
                      break;
                  case 2:
                      // Taille de la balise MAX_SIZE dans HTML défini a 5Mo aussi ( optionnel avec l'erreur 1)
                      echo $tabErrors[2];
                      break;
                  case 3:
                      echo $tabErrors[3];
                      break;
                  case 4:
                      echo $tabErrors[4];
                      break;
                  case 6:
                      echo $tabErrors[6];
                      break;
                  case 7:
                      echo $tabErrors[7];
                      break;
                  case 8:
                      echo $tabErrors[8];
                      break;
              }
          }
          else
          {
              echo $tabErrors[9];
              return false;
          }
    }
    else{
      echo '<p class="text-danger text-center">le champ est vide</p>';
    }
  } // fin function
} // fin Class

?>
