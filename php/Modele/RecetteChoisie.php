
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

    function ajouterCommentaires($id_utilisateur, $libelle, $id_recette)
    {
        //vérifie si le user est connecté
        if (isset($_SESSION['email'])) {
            // Insertion des données dans la base de données
            $insert = $this->pdo->prepare('INSERT INTO commentaires(id_utilisateur, libelle , date, id_recette) VALUES(?, ?, ?, ?)');
            $insert->execute(array($id_utilisateur, $libelle, date("Y-m-d H:i:s"),  $id_recette));
        } else {
            echo "<section class='mustBeConnected'>
        Vous devez etre connecté pour poster un commentaire 
        </section>";
        }
    }

}