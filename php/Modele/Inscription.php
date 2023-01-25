<?php
class Inscription
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Connection::getInstance()->pdo;
    }

    public function estValide($pseudo, $email, $mdp, $mdpConfirme)
    {
        return !empty($pseudo) && !empty($email) && !empty($mdp) && !empty($mdpConfirme)
            && $mdp === $mdpConfirme;
    }

    public function inscription($email, $mdp, $pseudo)
    {
// Hachage du mot de passe
        $mdphash = password_hash($mdp, PASSWORD_DEFAULT);

        // Insertion des données dans la base de données
        $connection = Connection::getInstance();
        $attributes = [
            'email' => $email,
            'mdp' => $mdphash,
            'pseudo' => $pseudo,]
            //  'date_prlogin' => date('y-m-d'),
        ;
        $connectio = $this->pdo->prepare('INSERT INTO utilisateurs(pseudo, mdp, email) VALUES(?, ?, ?)');
        $connectio->execute(array($pseudo, $mdphash, $email));
        header('Location:../php/index.php?url=Compte');
        die();
        // Redirection vers la page d'accueil
    }

    public function verificationEmail($email)
    {
        $connection = Connection::getInstance();
        $result = $this->pdo->prepare('SELECT email FROM utilisateurs WHERE email = ?');
        while(!$result ->execute(array($email))) {
            $result ->execute(array($email));
        }
        $stmt = $result -> fetchAll(PDO::FETCH_ASSOC);
        if (!empty($stmt)) {
            echo "L'e-mail est déjà associé à un compte, veuillez vous connecter avec le compte associé à ce mail, ou bien créez un nouveau compte.";
            die;
        }
    }
}
