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
    public function rechercheAction($saisie) {
        $recherche = $saisie[0]; // Récupération de la recherche à partir des paramètres
        $resultats = Recherche::rechercher($recherche); // Appel de la fonction de recherche
        require_once 'Vues/resultats.php'; // Chargement de la vue pour afficher les résultats
    }




}