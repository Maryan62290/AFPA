
<?php 

// EXO1 
/*ex1 : vous avez un tab de chaines de caract ==> le trier selon l'ordre alphabétique, puis afficher la derniere chaine
vous créez une fonction pour ça
pensez à créer un nouveau depot sur github pour le dossier afpa
*/

function tri(){
    $tab = ['France', 'Brésil', 'Maroc', 'Russie', 'Pologne', 'Irlande'];

    asort($tab);
    
    foreach($tab as $pays)
        
        echo $pays.'<br/>';
        $derChaine = end($tab);
        echo '<br/> Dernier String du tableau : '.$derChaine.'<br/>';
        // ou 
        $der = current($tab);
        echo 'Element courant du tableau : '.$der ;


}

tri();


echo '<br/><br/>EXO 2<br/> ';
/* 2-on vous donne une chaine de caract, on veut afficher chaque mot sur une ligne
toujours une fonction
*/
function ligne(){

    $chaine = 'Bonjour le soleil se léve à l\'est et se couche a l\'ouest';

    $mot = explode(' ', $chaine);

    for( $i = 0 ; $i < count($mot) ; $i++){
        echo '<br/>'.$mot[$i];
    }
    
}
ligne();

echo '<br/><br/>EXO 3<br/> ';
/* 3- on vous donne un tab de chaines de carac, on veut afficher son contenu dans une seule ligne 
*/

function uneLigne(){

    $tabChaine = ['Je', 'part', 'à la', 'pêche'];
    
    foreach($tabChaine as $seul){

        echo $seul.' ';
    }

}
uneLigne();


echo '<br/><br/>EXO 4<br/> ';

/* 4-afficher la racine carré d'un nombre donné (il faut que le nombre soit positif, 
s'il ne l'est pas on retourne -1) */

function racine($nbr){

    while($nbr > 0){
        return sqrt($nbr);
    }
    return -1;
 
}
echo racine(9);


  //ou 

function racineDeux($nb){

    if($nb > 0){
        echo  '<br/> La racine carré de ' .$nb.' c\'est '.sqrt($nb);
        
    }
    else{
        return -1;
    }
    
}
racineDeux(9);
  




echo '<br/><br/>EXO 5<br/> ';
/* 5-on vous donne un tab d'entier, si la val max de ce tab > 100, 
retourner 1 sinon reourner -1 */

function nbrEntier(){

    $tabNum = [5 , 200, 25, 44, 1, 99, 235, 101, 88];
    $maxi = max($tabNum);
    
    if($maxi > 100){
         return 1;
    }
    else{
        return -1;
    }
}
echo nbrEntier();



echo '<br/><br/>EXO 6<br/> ';
/* 6-créer une focntion qui genere n nombre aleatoires (n nombre donné), 
on les affiche et on retourne leur somme (on peut dire entre 10 et 100) */

function nbr_alea($n){
    
        $total = "";
        for($i=0;$i<$n;$i++){

            $aleatoire = rand(10,100);
            echo $aleatoire." ";
            $total += $aleatoire;
        }
        
        return "=".$total ;
      
    } 
echo (nbr_alea(5));



echo '<br/><br/>EXO 7<br/> ';
/* ex7-
$capitales=[
    ["France"=>["Paris",215646,14646848498]],
    ["Belgique"=>["Bruxelles",1545748,1877987]],
    ["Allemagne"=>["Berlin",47948,48798489787]],
    ["Espagne"=>["Madrid",54564456,4748989]],
];
on vous donne le tab suivant qui est au format Pays => capitale, nb habitants, PIB
on veut afficher chaque pays, sa capitale, son nb habitants et son PIB
au format suivant :
pays : France
capitale : Paris - nb habitants : 215646 - PIB : 14646848498 */


$capitales= [['France'=>["Paris",215646,14646848498]],
    ['Belgique'=>["Bruxelles",1545748,1877987]],
    ['Allemagne'=>["Berlin",47948,48798489787]],
    ['Espagne'=>["Madrid",54564456,4748989]],
    ]
;

    foreach( $capitales as $key => $value )

        foreach ($capitales[$key] as $val => $valeur)
       
            echo ' Pays : '.$val.' Capitale : ' .$valeur[0].' - nb habitants : '.$valeur[1].' - PIB : '.$valeur[2]. '<br />';
            echo '<br/>';
            
?>