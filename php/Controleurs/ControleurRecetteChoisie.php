
<?php
final class ControleurRecetteChoisie
{

    public function defautAction()
    {
        $O_recetteChoisie =  new RecetteChoisie();
        $id_recette = $_GET['id_recette'];
        Vue::montrer('RecetteChoisie/voir', array('RecetteChoisie' =>  $O_recetteChoisie->donneRecette($id_recette)));
    }
    public function insererCommAction(){
        $O_recetteChoisie =  new RecetteChoisie();
        $id_recette = $_GET['id_recette'];
        $id_utilisateur = $_GET['id_utilisateur'];
        $comment = $_POST['commentField']; // Récupération du commentaire à partir des paramètres
        Vue::montrer('RecetteChoisie/voir', array('Commentaires' =>  $O_recetteChoisie->ajouterCommentaires($id_utilisateur,$comment, $id_recette)));

    }
}