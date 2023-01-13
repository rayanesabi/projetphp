<?php
class ControleurInscription
{

    public function defautAction()
    {
        $O_inscription =  new Inscription();
        Vue::montrer('inscriptionn', array('inscription' =>  $O_inscription->estValide()));

    }
    public function connecte()
    {
        $formulaire = new Inscription();
        $formulaire->pseudo = $_POST['pseudo'];
        $formulaire->email = $_POST['email'];
        $formulaire->mdp = $_POST['mdp'];
        $formulaire->mdpConfirme = $_POST['mdpConfirme'];

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