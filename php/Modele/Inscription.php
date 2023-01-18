<?php
class Inscription {
    private string $pseudo;
    private string $email;
    private string $mdp;
    private string $mdpConfirme;

    /**
     * @param string $pseudo
     * @param string $email
     * @param string $mdp
     * @param string $mdpConfirme
     */
    public function __construct(string $pseudo, string $email, string $mdp, string $mdpConfirme)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->mdpConfirme = $mdpConfirme;
    }


    public function estValide() {
        return !empty($this->pseudo) && !empty($this->email) && !empty($this->mdp) && !empty($this->mdpConfirme)
               && $this->mdp === $this->mdpConfirme;
    }
    public function create() {
        $connection = Connection::getInstance();
        $connection->insert('utilisateurs', ['pseudo' => $this->pseudo, 'mdp' => $this->mdp, 'email' => $this->email]);
        die();
    }
}
