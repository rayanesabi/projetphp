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
        Vue::montrer('Accueil/voir');
    }

    public function afficheRecetteAction(){
        $O_Accueil = new Accueil();
        Vue::montrer('Accueil/Resultats', array('Recettes', $O_Accueil->getFeaturedArticles()));
    }
    public function loginAction() {
        // Charge la vue pour la page de connexion
        Vue::montrer('inscriptionn');
    }
    public function registerAction() {
        // Charge la vue pour la page d'inscription
        Vue::montrer('connexionn');
    }
    public function rechercheAction($saisie) {
        $O_recherche = new Accueil();
        $saisie = $_GET['saisie']; // Récupération de la recherche à partir des paramètres
        Vue::montrer('Accueil/voir', array('recherche' =>  $O_recherche->recherche($saisie)));
    }




}