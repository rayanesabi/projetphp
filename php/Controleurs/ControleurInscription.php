<?php
class ControleurInscription
{

    public function defautAction()
    {
        $O_Inscription = new Inscription();

        Vue::montrer('inscriptionn');
    }

    public function creerUtilisateurAction(array $urlParameters, array $A_postParams = null)
    {
            $pseudo = $A_postParams['pseudo'];
            $email = $A_postParams['email'];
            $mdp = $A_postParams['mdp'];
            $photo = file_get_contents($_FILES['photo']['tmp_name']);
            $mdpConfirme =  $A_postParams['mdpConfirme'];

            $O_Inscription = new Inscription();
            if ($O_Inscription->estValide($pseudo, $email, $mdp, $mdpConfirme)){
                $O_Inscription->verificationEmail($email);
                $O_Inscription->inscription($email, $mdp, $pseudo, $photo );
                // Enregistrement réussi, rediriger l'utilisateur vers la page de connexion
            } else {
                // Enregistrement échoué, afficher un message d'erreur
                echo 'Erreur lors de l\'inscription';
            }

    }

    public function connexionAction() {
        if (isset($_POST['login'])) {
            $username = $_POST['pseudo'];
            $password = $_POST['mdp'];

            $userModel = new Connexion();
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