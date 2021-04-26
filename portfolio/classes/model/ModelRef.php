<?php

require_once (__DIR__ . "/../../connexion.php");

class ModelRef
{
  public static function ajoutRef($user_id, $type, $nom, $techno, $contrib, $lien)
  {
      $idcon = connexion();
      $requete = $idcon->prepare("INSERT INTO reference VALUES (null,:type_ref_id,:nom,:techno,:contributeurs)");
      $requete->execute([':type_ref_id' => $type,':nom' => $nom, ':techno' => $techno, ':contributeurs' => $contrib, ]);
      $ref_id = $idcon->lastInsertId();
      $requete2 = $idcon->prepare("  INSERT INTO user_ref VALUES (:user_id,:ref_id, :lien)  ");
      $requete2->execute([  ':user_id' => $user_id,':ref_id' => $ref_id,':lien' => $lien,  ]);


  }
  public static function listeRef()
    {
        $idcon = connexion();
        $requete = $idcon->prepare("SELECT reference.id as ref_id, user.id as user_id, user.nom, prenom, type_ref, support,  reference.nom as nom_ref, techno, lien, contributeurs
            FROM reference
            INNER JOIN user_ref
            ON reference.id=ref_id

            INNER JOIN user
            ON user.id=user_id

            INNER JOIN type_ref
            ON type_ref.id=type_ref_id

            ORDER BY user_id
        ");
        $requete->execute();
      return $requete->fetchAll();

    }



    public static function getReferenceById($id){

        $idcon = connexion();
        $requete = $idcon->prepare("SELECT * FROM reference
            INNER JOIN user_ref
            ON ref_id=reference.id
            WHERE reference.id=:id
        ");
        $requete->execute([
            ':id' => $id
        ]);
        return $requete->fetch();
    }

   public static function suppRef($id){
     $idcon = connexion();
     $requete = $idcon->prepare("DELETE FROM type_ref WHERE id=:id");
     $requete->execute([':id' => $id]);

   }
   public static function modifReference($idRef, $idType,$nom, $techno, $contributeurs, $lien)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("UPDATE reference
            INNER JOIN user_ref
            ON ref_id=reference.id
            SET type_ref_id=:idType, nom=:nom, techno=:techno, contributeurs=:contributeurs,   lien=:lien
            WHERE reference.id=:idRef
        ");
        $requete->execute([
            ':idType' => $idType,
            ':nom' => $nom,
            ':techno' => $techno,
            ':contributeurs' => $contributeurs,
            ':lien' => $lien,
            ':idRef' => $idRef,
        ]);
    }

} // fin class ModelRef

?>
