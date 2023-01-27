<?php
session_start();
final class ControleurAdmin

{
    public function defautAction()
    {
        $O_Admin = new Admin();
        Vue::montrer('Admin/voir' );
    }
    public function banDefAction(){
        $O_Admin = new Admin();
        $email = $_POST['email'];
        if ($O_Admin->banDef($email)) {
            Vue::montrer('Admin/voir');
        }
    }
    public function supprCommAction(){
        $O_Admin = new Admin();
        $id_comm = $_POST['id_comm'];
        if ($O_Admin->supprimerCommentaires($id_comm)) {
            Vue::montrer('Admin/voir');
        }
    }
    public function ajtAction()
    {
        $O_Admin = new Admin();
        Vue::montrer('Admin/creerRecette' );
    }
    public function ajtRctAction()
    {
        $O_Admin = new Admin();
        $nom = $_POST['nom'];
        $ingredient = $_POST['ingredient'];
        $difficulte = $_POST['difficulte'];
        $cout = $_POST['cout'];
        $tpsprep = $_POST['tpsprep'];
        $tpscuisson = $_POST['tpscuisson'];
        $tpsrepos = $_POST['tpsrepos'];
        $tpstotal = $_POST['tpstotal'];
        $etapes = $_POST['etapes'];
        $photo = file_get_contents($_FILES['photo']['tmp_name']);
        $particularite = $_POST['particularite'];
        $id_recette = $_POST['id_recette'];

        if ($O_Admin->AjtRct($nom, $ingredient, $difficulte, $cout, $tpsprep, $tpscuisson, $tpsrepos, $tpstotal, $id_recette, $etapes, $photo, $particularite)) {
            Vue::montrer('Recette/voir');
        }
    }

    public function supprRecetteAction(){
        $O_Admin = new Admin();
        $id_recette = $_POST['id_recette'];
        if ($O_Admin->supprimerRecette($id_recette)) {
            Vue::montrer('Admin/voir');
        }
    }
    public function decoAdminAction(){
        $O_Admin = new Admin();
        $O_Admin->decoAdmin();
        Vue::montrer('Compte/voir');
    }
}