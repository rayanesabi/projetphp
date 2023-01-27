<?php
final class ControleurAccueil
{
    public function defautAction() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'Inscription':
                    $this->loginAction();
                    break;
                case 'Connexion':
                    $this->registerAction();
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

        $O_Accueil = new Accueil();
        Vue::montrer('Accueil/voir', array('aleatoire'=> $O_Accueil->affiche3Recettes()));
    }

    public function loginAction() {
        // Charge la vue pour la page d'accueil

        $O_Accueil = new Accueil();
        ;        Vue::montrer('Connexion/voir');
    }
    public function registerAction() {
        // Charge la vue pour la page d'accueil

        $O_Accueil = new Accueil();
        ;        Vue::montrer('Connexion/voir');
    }







}