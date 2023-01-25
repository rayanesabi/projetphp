<?php

class ControleurCompte {
    public function defautAction(){
        // Vérifie si l'utilisateur est connecté
        if (isset($_SESSION['email'])) {
            // Récupère les données de l'utilisateur connecté
            $utilisateur = $_SESSION['email'];
            // Charge la vue pour l'utilisateur connecté
            require_once 'Vues/Compte/voir.php';
        } else {
            // Redirige l'utilisateur vers la page de connexion
            header('Location: ../php/index.php?url=Compte/home');
        }
    }
    public function homeAction() {
        $compte = new Compte();
        $compte->home();
    }
    public function logoutAction() {
        $compte = new Compte();
        $compte->logout();
    }
}