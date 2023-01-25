<?php
class Compte {
    public function home() {
        // Vérifie si l'utilisateur est connecté
        if (isset($_SESSION['pseudo'])) {
            // Récupère les données de l'utilisateur connecté
            $user = $_SESSION['pseudo'];
            // Charge la vue pour l'utilisateur connecté
            require_once 'Vues/Compte/voir.php';
        } else {
            // Redirige l'utilisateur vers la page de connexion
            header('Location: ../php/Vues/Compte/voir.php');
        }
    }
    public function login(){
        if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
            $username = $_POST['pseudo'];
            $mdp = $_POST['mdp'];
            //Vérifie les informations de l'utilisateur avec la base de données
            //Si les informations sont correctes
            if(checkLogin($username, $mdp)){
                //Stocke les informations de l'utilisateur dans une variable de session
                $_SESSION['user'] = getUser($username);
                //Redirige vers la page d'accueil
                header('Location: index.php');
            }else{
                //Charge la vue pour la page de connexion avec un message d'erreur
                $error = "Nom d'utilisateur ou mot de passe incorrect";
                require_once 'Vues/connexionn.php';
            }
        }else{
            //Charge la vue pour la page de connexion
            require_once 'Vues/connexionn.php';
        }
    }
    private function checkLogin($pseudo, $mdp) {
        // Connexion à la base de données
        $pdo = Connection::getInstance()->pdo;
        // Vérification des informations de l'utilisateur avec la base de données
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE pseudo = ? AND mdp = ?");
        $stmt->bind_param("ss", $pseudo, $mdp);
        $stmt->execute();
        $result = $stmt->get_result();

        // Si les informations sont correctes
        if ($result->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    private function getUser($pseudo) {
        // Connexion à la base de données
        $pdo = Connection::getInstance()->pdo;

        // Récupération des informations de l'utilisateur avec la base de données
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $result = $stmt->get_result();

        // Retourne un tableau avec les informations de l'utilisateur
        return $result->fetch_assoc();
    }
    public function modifier($pseudo, $email,$mdp) {
        $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
        $stmt= $this->pdo->prepare('UPDATE utilisateurs SET pseudo = ?, email = ?,mdp = ? WHERE id_utilisateur = ?');
        $stmt->execute(array($pseudo, $mdphash, $email,$_SESSION['user']['id'] ));
    }

}
