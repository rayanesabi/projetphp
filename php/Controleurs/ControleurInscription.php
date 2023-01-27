<?php
class ControleurInscription
{

    public function defautAction()
    {
        $O_Inscription = new Inscription();

        Vue::montrer('Inscription/voir');
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
                Vue::montrer("Connexion/voir", array('reussite'=> 'Compte crée avec succès'));

            } else {
                // Enregistrement échoué, afficher un message d'erreur
                Vue::montrer("Inscription/voir", array('erreur'=> 'Erreur lors de l\'inscription'));
            }

    }
    

    public function deconnexionAction() {
        // Supprime les informations de l'utilisateur de la variable de session
        unset($_SESSION['user']);
        // Redirige vers la page de connexion
        header('Location: login.php');
    }
}