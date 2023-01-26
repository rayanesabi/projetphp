<?php
final class ControleurRecherche
{
    public function defautAction()
    {
        $O_recherche = new Recette();
        $saisie = $_GET['saisie']; // Récupération de la recherche à partir des paramètres
        Vue::montrer('Recette/voir', array('recherche' => $O_recherche->recherche($saisie)));
    }

}
