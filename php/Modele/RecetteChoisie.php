
<?php

final class RecetteChoisie {

    private $pdo;

    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }

    /*Getters*/
    public function donneInfos() {
        $result = $this->pdo->prepare("SELECT nom FROM recette");
        $result-> execute();
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row['nom'];
            }
        }
        $attributs = implode(', ', $data);
        return $attributs;
    }
    public function donneRecette($id_recette)
    {
        $result = $this->pdo->prepare("SELECT * FROM recette where id_recette = :id_recette");
        $result->execute(['id_recette' => $id_recette]);
        $recetteChoisie = $result->fetch();
        return $recetteChoisie;
    }
    public function afficherCommentaires($id_recette)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM commentaires, utilisateurs where utilisateurs.id_utilisateur=commentaires.id_utilisateur and id_recette = :id_recette ");
        $stmt->execute(['id_recette' => $id_recette]);
        $commentaires = $stmt->fetchAll();
        return $commentaires;
    }


    public function ajouterCommentaires($id_utilisateur, $libelle, $id_recette)

    {
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $stmt = $this->pdo->prepare('Select id_utilisateur from utilisateurs where email = :email');
            $stmt->execute(array($email));
            $id_utilisateur = $stmt->fetch();
            $date = date('y-m-d');
            $insert = $this->pdo->prepare('INSERT INTO commentaires(id_utilisateur, libelle, note, date) VALUES(?, ?, ?, ?)');
            $insert->execute(array($id_utilisateur, $libelle, $note, $date));
            header("/php/index.php?url=RecetteChoisie");
            die();
        } else {
            echo "<section class='mustBeConnected'>
        Vous devez etre connecté pour poster un commentaire 
        </section>";
        }
    }
}