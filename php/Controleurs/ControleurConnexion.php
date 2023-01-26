<?php

final class ControleurConnexion
{
    public function defautAction()
    {
        $O_Connexion =  new Connexion();
        Vue::montrer('connexionn');
    }

    public function connexionAction() {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $O_Connexion = new Connexion();

        $O_Connexion->connexion($email,$mdp);

    }
}