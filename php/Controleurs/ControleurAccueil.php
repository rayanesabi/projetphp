<?php
final class ControleurAccueil
{
    public function defautAction() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'login':
                    $this->loginAction();
                    break;
                case 'register':
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
        $articles = $O_Accueil->getFeaturedArticles();
        Vue::montrer('Accueil/voir');
    }
    public function loginAction() {
        // Charge la vue pour la page de connexion
        Vue::montrer('inscriptionn');
    }
    public function registerAction() {
        // Charge la vue pour la page d'inscription
        Vue::montrer('connexionn');
    }


}