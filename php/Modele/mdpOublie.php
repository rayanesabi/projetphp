<?php
class mdpOublie {
    
    private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }
    
    public function emailExiste($email) {
        $stmt = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE email = :email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function enregistrerToken($email, $mdp) {
        $stmt = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE email = :email');
        $stmt = $bdd->prepare("UPDATE utilisateurs SET token = :token WHERE id = :id");
        $stmt->bindValue(':token', $mdp);
        $stmt->bindValue(':id', $utilisateur);
        $stmt->execute();
    }
}
