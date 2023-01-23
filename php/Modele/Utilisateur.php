<?php
class Utilisateur
{
    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance();
    }
    public function estValide()
    {
        return !empty($this->pseudo) && !empty($this->email) && !empty($this->mdp) && !empty($this->mdpConfirme)
            && $this->mdp === $this->mdpConfirme;
    }
    public function inscription($username, $email, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $data = [$username, $email, $password];
        $this->connection->insert("INSERT INTO users (username, email, password) VALUES (?, ?, ?)", $data);
        header('Location:/Vues/Compte/voir.php');
    }
    public function modifier($username, $email, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $data = [$username, $email, $password, $_SESSION['user']['id']];
        $this->connection->update("UPDATE users SET username = ?, email = ?,password = ? WHERE id = ?", $data);
    }
    public function connexion($username, $password) {
        $data = [$username];
        $user = $this->connection->select("SELECT * FROM users WHERE username = ?", $data);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            return true;
        } else {
            return false;
        }
    }


}
