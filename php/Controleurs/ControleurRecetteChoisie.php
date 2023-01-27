
<?php
session_start();
final class ControleurRecetteChoisie
{

    public function defautAction()
    {
        $O_recetteChoisie =  new RecetteChoisie();
        $id_recette = $_GET['id_recette'];
        $_SESSION['id_recette'] = $id_recette;
        Vue::montrer('RecetteChoisie/voir', array('RecetteChoisie' =>  $O_recetteChoisie->donneRecette($id_recette)));
    }
    public function insererCommAction(){
        $O_recetteChoisie =  new RecetteChoisie();
        $O_recette = new Recette();
        $id_recette = $_SESSION['id_recette'];
        $id_utilisateur = $_SESSION['utilisateur']['id_utilisateur'];
        $comment = $_POST['commentInput'];
        $note = $_POST['noteInput'];// Récupération du commentaire à partir des paramètres
        $O_recetteChoisie->ajouterCommentaires($id_utilisateur, $comment, $note, $id_recette);
        Vue::montrer('Recette/voir', array('recette' =>  $O_recette->afficheRecettes()));
    }

}