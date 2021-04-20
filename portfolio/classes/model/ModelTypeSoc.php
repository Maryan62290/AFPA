<?php

require_once (__DIR__ . "/../../connexion.php");




class ModelTypeSoc {

    public static function ajoutTypeSoc($Type_soc)    {
        $idcon = connexion();
        $requete = $idcon->prepare("INSERT INTO type_soc VALUES (null, :Type_soc)");
        $requete->execute([':Type_soc' => $Type_soc]);
    }
    public static function SuppressionTypeSoc($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("DELETE FROM type_soc WHERE id  = :id");
        $requete->execute([":id" => $id]);
    }
    public static function ModifTypeSoc($id, $type_soc)
        {
            $idcon = connexion();
            $requete = $idcon->prepare("UPDATE type_soc SET type_soc=:type_soc WHERE id = :id");
            $requete->execute([
                ':id' => $id,
                ':type_soc' => $type_soc
            ]);
        }
    public static function listeTypeSoc()
            {
                $idcon = connexion();
                $requete = $idcon->prepare("SELECT * FROM type_soc");
                $requete->execute();
                return $requete->fetchAll();
            }

    public static function getTypeSoc($id)
    {
        $idcon = connexion();
        $requete = $idcon->prepare("
        SELECT * FROM type_soc where id=:id
        ");
        $requete->execute([':id' => $id,]);
        return $requete->fetch();
    }
  }
?>
