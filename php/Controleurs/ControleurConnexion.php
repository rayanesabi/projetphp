<?php

final class ControleurConnexion
{
    public function defautAction()
    {
        $O_Connexion =  new Connexion();
        Vue::montrer('Connexion/voir');
    }

    public function connexionAction() {
            $O_Connexion = new Connexion();
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $O_Connexion->connexion($email, $mdp);
            if (!$O_Connexion) {
                // Si les informations sont incorrectes, on affiche un message d'erreur
                Vue::montrer('Connexion/voir', array('erreur' => 'Adresse email ou mot de passe incorrect.'));
            } else {
            header("/php/index.php?url=Compte");
            }
        }

}