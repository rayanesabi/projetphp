
<?php 

require_once 'Noyau/Connection.php';


   // private String $nom;
    // private String $ingredients;
    // private String $difficulte;
    // private int $coût;
    // private int $tempsPreparation;
    // private int $tempsRepos;
    // private int $tempsCuisson;
    // private int $tempsTotal;

final class RecetteChoisie {

    private $db;

     public function __construct() {
        $this->db = Connection::getInstance();
    }

    /*Getters*/
    public function donneNom() {
        $sql = "SELECT nom FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneIngredients() {
        $sql = "SELECT ingredients FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneDifficulté() {
        $sql = "SELECT ingredients FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneCout() {
        $sql = "SELECT cout FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneTempsPreparation() {
        $sql = "SELECT tpsprepar FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneTempsRepos() {
        $sql = "SELECT tpscuiss FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneTempsCuisson() {
        $sql = "SELECT tpsrepos FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneTempsTotal() {
        $sql = "SELECT tpstotal FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function donneId_recette() {
        $sql = "SELECT id_recette FROM recette";
        $result = $this->db->query($sql);
        $data = array();
        if ($result->rowCount() > 0) {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}