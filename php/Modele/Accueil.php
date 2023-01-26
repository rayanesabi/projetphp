<?php

class Accueil
{
    private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }

    public function getFeaturedArticles()
    {
        // Récupération des articles en utilisant la classe de connexion à la base de données
        $stmt = $this->pdo->prepare("SELECT * FROM recette ");
        $stmt->execute();
        return $stmt->fetchAll();

    }
    public function recherche($saisie){
        $stmt = $this->pdo->prepare("Select * from recette where nom LIKE :saisie ");
        $saisie = '%' . $saisie . '%';
        $stmt->bindParam('saisie', $saisie);
        if ($stmt->execute() === false) {
            throw new Exception("Error Processing Request", 1);
        }
        $result = $stmt->fetchAll();
        return $result;
    }
}
