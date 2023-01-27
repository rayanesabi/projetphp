<?php
class Connexion
{
private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }



    public function connexion($email, $mdp)
    {

        $stmt = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE email = ?');
        $stmt->execute(array($email));

        $utilisateur = $stmt ->fetch();

        if ( $utilisateur &&password_verify($mdp, $utilisateur['mdp'])) {
            $_SESSION['utilisateur'] = $utilisateur;
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            header('Location:../php/index.php?url=Compte/home');
            return true;
        } else {
            echo" Mauvais identifiants";
            return false;
        }
    }
}
