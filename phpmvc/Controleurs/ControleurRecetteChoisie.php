<?php 
    
    final class ControleurRecetteChoisie {
   
    public function defautAction()
    {   
        $O_recetteChoisie =  new RecetteChoisie();
        Vue::montrer('RecetteChoisie/recette', array('RecetteChoisie' =>  $O_recetteChoisie->donneNom()));
        Vue::montrer('RecetteChoisie/recette',array('ListeIngredients' => $O_recetteChoisie->donneIngredients()));
    }
}
