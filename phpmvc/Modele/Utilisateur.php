<?php
class Utilisateur {
    public $pseudo;
    public $email;
    public $mdp;

    public function enregistrer() {
        // Initialiser la connexion à la base de données
        $pdo = new PDO('mysql:host=hostname;dbname=dbname', 'pseudo', 'mdp');

        // Préparer la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO utilisateur (pseudo, email, mdp) VALUES (:pseudo, :email, :mdp)");
        $stmt->bindParam(':username', $this->pseudo);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->mdp);

        // Exécuter la requête
        $stmt->execute();

        // Fermer la connexion à la base de données
        $pdo = null;
    }
}
