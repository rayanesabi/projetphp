<?php
class ControleurInscription
{

    public function defaultAction()
    {
        $O_Utilisateur = new Utilisateur();
        // Vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user'])) {
            // Récupère les données de l'utilisateur connecté
            $user = $_SESSION['user'];
            // Charge la vue pour l'utilisateur connecté
            Vue::montrer('Compte/voir');
        } else {
            // Redirige l'utilisateur vers la page de connexion
            Vue::montrer('inscriptionn');
        }
    }

    public function creerUtilisateurAction(array $urlParameters, array $A_postParams = null)
    {
        if (isset($A_postParams['register'])) {
            $username = $A_postParams['pseudo'];
            $email = $A_postParams['mail'];
            $mdp = $A_postParams['mdp'];
            $mdpConfirme =  $A_postParams['mdpConfirme'];
            $userModel = new Utilisateur();
            if ($userModel->estValide()){
            $userModel->inscription($username, $email, $mdp);
            // Enregistrement réussi, rediriger l'utilisateur vers la page de connexion
            Vue::montrer('Compte/voir');
            } else {
                // Enregistrement échoué, afficher un message d'erreur
                echo 'Erreur lors de l\'inscription';

            }
        }
    }
    public function connexionAction() {
        if (isset($_POST['login'])) {
            $username = $_POST['pseudo'];
            $password = $_POST['mdp'];

            $userModel = new Utilisateur();
            if ($userModel->connexion($username, $password)) {
                // Connexion réussie, rediriger l'utilisateur vers la page d'accueil
                Vue::montrer('Compte/voir');
            } else {
                // Connexion échouée, afficher un message d'erreur
                echo 'Nom d\'utilisateur ou mot de passe incorrect';
            }
        }
    }

    public function deconnexionAction() {
        // Supprime les informations de l'utilisateur de la variable de session
        unset($_SESSION['user']);
        // Redirige vers la page de connexion
        header('Location: login.php');
    }
}