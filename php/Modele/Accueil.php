<?php
require_once 'C:\xampp\htdocs\projetphp\php\Noyau\Connection.php';
session_start();
class Accueil
{
    private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }


    public function donneInfos() {
        $result = $this->pdo->prepare("SELECT * FROM commentaires");
        $result-> execute();
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row['libelle'];
            }
        }
        $attributs = implode(', ', $data);
        return $attributs;
    }

    public function afficherCommentaires()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM commentaires, utilisateurs where utilisateurs.id_utilisateur=commentaires.id_utilisateur ");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function test($testi) {
        $resultd = $this->pdo->prepare("SELECT * FROM recette where id_recette = :id_recette");
        $resultd->execute(array(':id_recette'=>$testi));
        $test = $resultd->fetch();
        return $test;
    
    }

    public function donneNbRecette(){
        $stmt = $this->pdo->prepare("SELECT count(*) FROM recette");
        $stmt-> execute();
        $result = $stmt->fetchColumn();
        return $result;
    }
}