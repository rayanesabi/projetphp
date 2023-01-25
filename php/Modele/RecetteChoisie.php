
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
}