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



    public function getUser($pseudo) {
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

    public function test($id_utilisateur, $libelle, $note) {
        $date = date('y-m-d');
        $insert = $this->pdo->prepare('INSERT INTO commentaires(id_utilisateur, libelle, note, date) VALUES(?, ?, ?, ?)');
        $insert->execute(array($id_utilisateur, $libelle, $note, $date));
        header('Location:../php/index.php?url=Recette.php');
        die();
    }

}
