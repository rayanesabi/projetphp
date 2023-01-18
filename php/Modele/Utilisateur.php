<?php
class Utilisateur {
    public string $pseudo;
    public string $email;
    public string $mdp;

    public function enregistrer() {
        // Initialiser la connexion à la base de données
        $pdo = Connection::getInstance();
        // Préparer la requête d'insertion
            $pdo->insert('Utilisateurs', ['pseudo' => $this->pseudo, 'mdp' => $this->mdp, 'email' => $this->email]);
        // Fermer la connexion à la base de données
        //$pdo = null;
    }
}
