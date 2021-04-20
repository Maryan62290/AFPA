<?php
require_once  "../model/ModelUser.php";
require_once  "CreationUser.php";

class UploadPhoto{

    public static function AjoutImage(){

       
        $img = $_FILES['photo']; // Tab info Image
        $name = $img['name']; // Nom de l'image
        $tmp = $img['tmp_name']; // Nom de l'image du fichier temporaire 
        $maxSize = $img['size']; // Poids de l'image
        $maxTaille = [1000,1000]; // Tableau taille image max 
        $dimension = getimagesize($tmp); // recupére les dimensions de l'image dans un tableau [0]->width et [1]->height
        $typeImg = $img['type']; // Type de l'image
        $codeER = $img['error']; // Code erreur img
        $dossier = '../../img/client'; // Dossier image
        
        
        $tabErrors = [
            0 => 'Le téléchargement de l\'image c\'est passé avec succés !',
            1 => 'L\'image dépasse le poids autorisé !',
            2 => 'La taille du fichier téléchargé excède 1Mo !',
            3 => 'Le fichier n\'a été que partiellement téléchargé.',
            4 => 'Aucun fichier n\'a été téléchargé !',
            6 => 'Un dossier temporaire est manquant !',
            7 => 'Échec de l\'écriture du fichier sur le disque !',
            8 => 'Une extension PHP a arrêté l\'envoi de fichier !',
            9 => 'L\'image téléchargé ne respecte pas les conditions (extension/taille/poids)',
            10 => [".png",".jpg",".jpeg",".gif",".bmp", ".svg", ".tiff", ".tga"]
        ];
        

       
         // Test extention de l'img
        $extension = strtolower(strrchr($name, ".")); // Mets tout en minuscule et recupére l'extention avec le point inclus
        
        $tabEX = [".png",".jpg",".jpeg",".gif",".bmp", ".svg", ".tiff", ".tga"]; // Tableau des extentions OK !
        $extER = [".php", ".js", ".java", ".html", ".css", ".py", ".php3", ".exe", ".bat", ".cmd", "vbs", "vbe", "jse", "wsf", "msc", ".7zip", ".rar", "zip",
        ".bzip", ".bzip2", ".xml", ".xhtml", ".sql", " "]; // Tab extention interdite au cas ou on pourrait les renommer...
 
       
        //Test sur l'image extension->poids->taille
        if(in_array($extension, $tabEX) && $maxSize < 1000000 && $maxTaille[0] <= $dimension[0] && $maxTaille[1] <= $dimension[1]){
            
            switch($codeER)
            {

                case 0:
                    echo $tabErrors[0];
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
        }else{
            echo $tabErrors[9];
            return false;
        }

    }
   
} // fin Class





?>