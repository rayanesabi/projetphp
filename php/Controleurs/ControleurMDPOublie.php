<?php
require '../PHPMailer-6.7.1/src/Exception.php';
require '../PHPMailer-6.7.1/src/PHPMailer.php';
class ControleurMDPOublie {

    private $modele;
    private $vue;
    
        public function __construct() {
            $this->modele = new mdpOublie();
            $this->vue = new mdpOublie();
        }

public function motDePasseOublieAction() {
    $email = $_POST['email'];
    $O_Connexion = new Connexion();
    $utilisateur = $O_Connexion->emailExiste($email);
    if (!$utilisateur) {
        Vue::montrer('connexion', ['error' => "Aucun compte n'est associé à cet email."]);
        return;
    }

    $token = bin2hex(random_bytes(16));

    $O_Connexion->enregistrerToken($utilisateur['id'], $token);

    $mail = new PHPMailer();

    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'username';
    $mail->Password = 'password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email settings
    $mail->setFrom('noreply@example.com', 'Example');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Réinitialisation de mot de passe';
    }
}