<?php
class Compte {
    private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }


    public function connexion($email, $mdp) {
        $stmt = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE email = ?');
        $stmt->execute(array($email));
        $utilisateur = $stmt ->fetch();
        if ( $utilisateur &&password_verify($mdp, $utilisateur['mdp'])) {
            $_SESSION['connecte']= true;
            $_SESSION['utilisateur'] = $utilisateur;
            $_SESSION['email']= $utilisateur['email'];
            $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur'];
            $_SESSION['photo']= $utilisateur['photo'];

            $insert = $this->pdo->prepare('Update utilisateurs set date_derlogin = ? Where id_utilisateur = ? ');
            $insert->execute(array(date('y-m-d'), $_SESSION['id_utilisateur']));
            return true;
        } else {
            return false;
        }
    }
    public function connexionAdmin($email) {
        $stmt = $this->pdo->prepare('SELECT id_admin FROM utilisateurs WHERE email = ?');
        $stmt->execute(array($email));
        $admin= $stmt->fetch();
        if ($admin['id_admin'] == 1 ) {
            $_SESSION['admin'] = true;
            return true;
        } else {
            return false;
        }
    }
    public function decoAdmin() {
            $_SESSION['admin'] = false;

    }

    public function modifier($pseudo, $email, $mdp, $photo) {
        $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
        $id_utilisateur = $_SESSION['utilisateur']['id_utilisateur'];
        $stmt= $this->pdo->prepare('UPDATE utilisateurs SET pseudo = ?, email = ?,mdp = ?, photo = ? WHERE id_utilisateur = ?');
        $stmt->execute(array($pseudo, $email, $mdphash,$photo, $id_utilisateur ));
        $query = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE email = ?');
        $query->execute(array($email));
        $utilisateur = $query ->fetch();
        $_SESSION['utilisateur'] = $utilisateur;
        $_SESSION['email']= $utilisateur['email'];
        $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur'];
        $_SESSION['photo'] = $utilisateur['photo'];

        return $stmt->fetch();
        // Retourne un tableau avec les informations de l'utilisateur
    }



}
