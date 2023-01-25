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
        return $stmt->fetch();

    }
    public function recherche($saisie){
        $stmt = $this->pdo->prepare("Select * from recette where nom LIKE :saisie ");
        $saisie = '%' . $saisie . '%';
        $stmt->bindParam(':query', $saisie);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
