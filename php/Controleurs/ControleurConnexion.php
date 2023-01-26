<?php

final class ControleurConnexion
{
    public function defautAction()
    {
        $O_Connexion =  new Connexion();
        Vue::montrer('Connexion/voir');
    }

    public function connexionAction() {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $O_Connexion = new Connexion();

        $O_Connexion->connexion($email,$mdp);

    }
}