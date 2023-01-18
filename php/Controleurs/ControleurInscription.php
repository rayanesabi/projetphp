<?php
class ControleurInscription
{

    public function defautAction(Array $A_parametres = null, Array $A_postParams = null)
    {
        $O_inscription = new Inscription(
            $A_postParams['pseudo'],
            $A_postParams['email'],
            $A_postParams['mdp'],
            $A_postParams['mdpConfirme'],
        );
        if ($O_inscription->estValide() === true) {
            $O_inscription->create();
        }
        else {

        }
        Vue::montrer('inscriptionn', array('inscription' =>  $O_inscription->estValide()));

    }
    public function connecte(Array $A_parametres = null, Array $A_postParams = null)
    {
        $formulaire = new Inscription(
            $A_postParams['pseudo'],
            $A_postParams['email'],
            $A_postParams['mdp'],
            $A_postParams['mdpConfirme'],
        );

        if ($formulaire->estValide()) {
            // Enregistrer l'utilisateur en utilisant les données du formulaire
            $utilisateur = new Utilisateur();
            $utilisateur->pseudo= $formulaire->pseudo;
            $utilisateur->email = $formulaire->email;
            $utilisateur->mdp = password_hash($formulaire->mdp, PASSWORD_DEFAULT);
            $utilisateur->enregistrer();

            // Rediriger vers une page de confirmation
            header('Location: /index.php');
            exit();
        } else {
            // Afficher la vue avec des erreurs
            $errors = [];
            if ($formulaire->mdp !== $formulaire->mdpConfirme) {
                $errors[] = "Les mots de passe ne concordent pas";
            }
            Vue::montrer('inscriptionn', ['formulaire' => $formulaire, 'errors' => $errors]);
        }
    }


}