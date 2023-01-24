<?php
class Inscription {
    public $pseudo;
    public $email;
    public $mdp;
    public $mdpConfirme;

    public function estValide() {
        return !empty($this->pseudo) && !empty($this->email) && !empty($this->mdp) && !empty($this->mdpConfirme)
               && $this->mdp === $this->mdpConfirme;
    }
}
