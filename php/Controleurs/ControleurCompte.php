<?php
session_start();
class ControleurCompte {
    public function defautAction(){
        // Vérifie si l'utilisateur est connecté
        if ($_SESSION['connecte']) {
            // Charge la vue pour l'utilisateur connecté
            $O_Compte = new Compte();
            $utilisateur = $_SESSION['utilisateur'];
            $pseudo = $utilisateur['pseudo'];
            Vue::montrer('Compte/voir');
        } else {
            // Redirige l'utilisateur vers la page de connexion
            Vue::montrer("Connexion/voir");
        }
    }
    public function connexionAction() {
        $O_Connexion = new Compte();
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        if($O_Connexion->connexion($email, $mdp)) {
            Vue::montrer('Compte/voir');

        } else {
            Vue::montrer('Connexion/voir', array('erreur'=> 'Nom d\'utilisateur ou mot de passe incorrect'));

        }

    }
    public function connexionAdminAction() {
    $O_ConnexionAdmin = new Compte();
    $O_Admin = new Admin();
    $email = $_SESSION['email'];
    if($O_ConnexionAdmin->connexionAdmin($email)) {
        Vue::montrer('Admin/voir', array('liste'=>$O_Admin->afficheMembre()) );

    } else {
        Vue::montrer('Compte/voir', array('erreur'=>'Vous n\'êtes pas admin' ));

    }

}
    public function modifierDefautAction()
    {
            $O_Compte = new Compte();
            Vue::montrer('Compte/modifier');

    }


        public function modifierAction() {
            if ($_SESSION['connecte']) {
                $O_Compte = new Compte();
                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                $mdp = $_POST['mdp'];
                $photo = file_get_contents($_FILES['photo']['tmp_name']);

                if ($O_Compte->modifier($pseudo, $email, $mdp, $photo)) {
                    Vue::montrer('Compte/voir', array('reussite', 'Modifications prises en compte !'));
                } else {
                    Vue::montrer('Compte/voir', array('erreur', 'Erreur dans la modification !'));
                }
            }else{
                Vue::montrer('Connexion/voir', array('erreur', 'Vous n êtes pas connectés !'));

            }
    }
    public function deconnexionAction() {
        $compte = new Compte();
        $_SESSION['connecte'] = false;
        Vue::montrer('Connexion/voir');

    }
}