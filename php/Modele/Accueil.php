<?php
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


}
