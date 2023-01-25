<?php
class Connexion
{
private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }



    public function connexion($email, $mdp) {
        $stmt = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE email = ?');
        $stmt->execute(array($email));

        $utilisateur = $stmt ->fetch();

        if ( $utilisateur &&password_verify($mdp, $utilisateur['mdp'])) {
            $_SESSION['utilisateur'] = $utilisateur;
            header('Location:../php/index.php?url=Compte');
            return true;
        } else {
            echo" Mauvais identifiants";
            return false;
        }
    }


}
