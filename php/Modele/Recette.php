<?php

final class Recette {
    private $pdo;

    public function donneRecette(){
        return ($this->nom .  $this->ingredients);

    }
    public function __construct()
    {
        $this->pdo = Connection::getInstance()->pdo;
    }
    public function afficheRecettes()
    {
        // Récupération des articles en utilisant la classe de connexion à la base de données
        $stmt = $this->pdo->prepare("SELECT * FROM recette");
        $stmt->execute();
        return $stmt->fetchAll();

    }
    public function recherche($saisie){
        $stmt = $this->pdo->prepare("Select * from recette where nom LIKE :saisie ");
        $saisies = '%' . $saisie . '%';
        $stmt->bindParam('saisie', $saisies);
        if ($stmt->execute() === false) {
            throw new Exception("Error Processing Request", 1);
        }
        $result = $stmt->fetchAll();
        return $result;
    }


    public function trieIngredients($categorie)
    {
        // Connexion à la base de données
        // Préparation de la requête
        $ingredients = implode(',', $categorie);
        $stmt = $this->pdo->prepare("SELECT * FROM recette WHERE ingredients = :ingredient");
        $stmt->bindParam(':ingredient', $ingredients);

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }
    public function trieParticularite($categorie)
    {
        // Connexion à la base de données
        // Préparation de la requête
        $ingredients = implode(',', $categorie);
        $stmt = $this->pdo->prepare("SELECT * FROM recette WHERE particularite = :particularite");
        $stmt->bindParam(':particularite', $ingredients);

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }
    public function trieDifficulteBas()
    {
        // Connexion à la base de données
        // Préparation de la requête
        $stmt = $this->pdo->prepare("SELECT * FROM recette order by difficulté asc ");

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }
    public function trieDifficulteHaut()
    {
        // Connexion à la base de données
        // Préparation de la requête
        $stmt = $this->pdo->prepare("SELECT * FROM recette order by difficulté desc ");

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }
    public function trieCoutBas()
    {
        // Connexion à la base de données
        // Préparation de la requête
        $stmt = $this->pdo->prepare("SELECT * FROM recette order by cout asc ");

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }
    public function trieCoutHaut()
    {
        // Connexion à la base de données
        // Préparation de la requête
        $stmt = $this->pdo->prepare("SELECT * FROM recette order by cout desc ");

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }
    public function trieTpsBas()
    {
        // Connexion à la base de données
        // Préparation de la requête
        $stmt = $this->pdo->prepare("SELECT * FROM recette order by tpstotal asc");

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }
    public function trieTpsHaut()
    {
        // Connexion à la base de données
        // Préparation de la requête
        $stmt = $this->pdo->prepare("SELECT * FROM recette order by tpstotal desc");

        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $cakes = $stmt->fetchAll();

        // Retour des résultats
        return $cakes;
    }


}