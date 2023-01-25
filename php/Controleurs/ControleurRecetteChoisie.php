
<?php 
    
    final class ControleurRecetteChoisie {
   
    public function defautAction()
    {   
        $O_recetteChoisie =  new RecetteChoisie();
        Vue::montrer('RecetteChoisie/voir', array('RecetteChoisie' =>  $O_recetteChoisie->donneInfos()));
    }
}
