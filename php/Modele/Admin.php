<?php
class Admin
{
    private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }

    public function decoAdmin() {
        $_SESSION['admin'] = false;
        $_SESSION['connecte'] = true;

    }
    function AjtRct($nom, $ingredients, $difficulté, $cout, $tpsprepar, $tpscuiss, $tpsrepos, $tpstotal, $id_recette, $etapes, $image, $particularite)
    {
        $insert = $this->pdo->prepare('INSERT INTO recette(nom, ingredients, difficulté, cout, tpsprepar, tpscuiss, tpsrepos, 
 tpstotal, id_recette, etapes, image,particularite) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insert->execute(array($nom, $ingredients, $difficulté, $cout, $tpsprepar, $tpscuiss, $tpsrepos, $tpstotal, $id_recette, $etapes, $image, $particularite));
        return $insert;
    }
    public function afficheMembre(){
        $insert = $this->pdo->prepare(' select email from utilisateurs where id_admin is null');
        $insert->execute();
        $result = $insert->fetchAll();
        return $result;
    }
    public function afficheComm(){
        $insert = $this->pdo->prepare(' select id_comm, libelle from commentaires ');
        $insert->execute();
        $result = $insert->fetchAll();
        return $result;
    }
    public function afficheRecette(){
        $insert = $this->pdo->prepare(' select id_recette, nom  from recette ');
        $insert->execute();
        $result = $insert->fetchAll();
        return $result;
    }
    public function supprimerCommentaires($id_comm){
        $stmt = $this->pdo->prepare('DELETE FROM commentaires WHERE id_comm = ?');
        $stmt->execute(array($id_comm));
        return $stmt;

    }
    public function supprimerRecette($id_recette){
        $stmt = $this->pdo->prepare('DELETE FROM recette WHERE id_recette = ?');
        $stmt->execute(array($id_recette));
        return $stmt;

    }
    public function banDef($email)
    {
        // suppression des données dans la base de données
        $id =$this->pdo->prepare('select id_utilisateur from utilisateurs where email = ?');
        $id->execute(array($email));
        $id_utilisateur = $id->fetch(PDO::FETCH_ASSOC);
        $stmt = $this->pdo->prepare('DELETE FROM commentaires WHERE id_utilisateur = 1');
        //$stmt->bindParam(':id_utilisateur', $id_utilisateur['id_utilisateur']);
        $stmt->execute();
        var_dump($stmt);
        $suppr = $this->pdo->prepare(' delete from  utilisateurs where email  = ?');
        $suppr->execute(array($email));
        return $suppr;
        // Redirection vers la page d'accueil
    }
}