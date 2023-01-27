
<?php
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
        $id_recette = $_GET['id'];
        $_SESSION['id'] = $id_recette;
        $comment = $_POST['commentField']; // Récupération du commentaire à partir des paramètres
        Vue::montrer('RecetteChoisie/voir', array('Commentaires' =>  $O_recetteChoisie->ajouterCommentaires($comment, $id_recette)));
    }
    public function insererNote(){
        $O_recetteChoisie =  new RecetteChoisie();
        $note = $_GET['note'];
        Vue::montrer('RecetteChoisie/voir', array('Note' =>  $O_recetteChoisie->ajouterNote($note)));
    }
}