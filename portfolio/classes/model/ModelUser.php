<?php
 require_once (__DIR__ . "/../../connexion.php");

 class ModelUser
{
    public static function ajoutUser($nom, $prenom, $mail, $tel, $adresse, $photo, $description)
    {
        $idcon = connexion();
        $requete = $idcon->prepare(" INSERT INTO user VALUES (null,:nom, :prenom, :mail, :tel, :adresse, :photo, :description)");
        $requete->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':mail' => $mail,
            ':tel' => $tel,
            ':adresse' => $adresse,
            ':photo' => $photo['name'],
            ':description' => $description
        ]);
    }
    public static function getUserById($id)
    {
          $idcon = connexion();
          $requete = $idcon->prepare("SELECT * FROM user WHERE id = :id");
          $requete->execute([':id' => $id]);
          return $requete->fetch();
    }
    public static function suppUser($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("DELETE FROM user WHERE id  = :id");
        $requete->execute([":id" => $id]);
    }
    public static function modiUser($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("SELECT * FROM user WHERE id = :id");
        $requete->execute([":id" => $id]);
    }

    public static function afficheUser()
    {
        $idcon = connexion();
        $req = $idcon->prepare("SELECT * FROM User");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function afficheProfil($id)
    {
        $idcon = connexion();
        $id = (int) $_GET['id'];
        $req = $idcon->prepare("SELECT * FROM user WHERE id = :id ");
        $req->execute([':id' => $id]);
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}

?>
