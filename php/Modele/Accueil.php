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
}
