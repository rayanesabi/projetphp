<?php

class ControleurCompte {
    public function defautAction()
    {
        $O_compte =  new Compte();

        Vue::montrer('Compte/voir', array('compte' =>  $O_compte->home()));

    }
    public function home() {
        $compte = new Compte();
        $compte->home();
    }
    public function login() {
        $compte = new Compte();
        $compte->login();
    }
    public function logout() {
        $compte = new Compte();
        $compte->logout();
    }
}