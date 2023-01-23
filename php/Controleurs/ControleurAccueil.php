<?php

final class ControleurAccueil
{
    public function defaultAction() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'login':
                    $this->login();
                    break;
                case 'register':
                    $this->register();
                    break;
                default:
                    $this->home();
                    break;
            }
        } else {
            $this->home();
        }
    }
    public function home() {
        // Charge la vue pour la page d'accueil
    Vue::montrer('Accueil/voir.php');
    }
    public function login() {
        // Charge la vue pour la page de connexion
        Vue::montrer('inscriptionn.php');
    }
    public function register() {
        // Charge la vue pour la page d'inscription
        Vue::montrer('connexionn.php');
    }
}