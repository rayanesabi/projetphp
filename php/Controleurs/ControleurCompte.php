<?php

class ControleurCompte {
    public function defautAction(){
        // Vérifie si l'utilisateur est connecté
        if (isset($_SESSION['email'])) {
            // Charge la vue pour l'utilisateur connecté
            $O_Compte = new Compte();
            $pseudo = $_SESSION['pseudo'];
            Vue::montrer('Compte/voir', array('pseudo', $O_Compte->getUser()));
        } else {
            // Redirige l'utilisateur vers la page de connexion
            header('Location: ../php/index.php?url=Connexion');
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