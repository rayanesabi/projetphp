<?php

final class ControleurRecette
{
    public function defautAction()
    {
        $O_recette = new Recette();
        Vue::montrer('Recette/Resultats', array('recette' =>  $O_recette->afficheRecettes()));
    }
    // public function saveAction(Array $A_postParams = null){
    //     $recette = Recette::fromArray($A_postParams);

    //     $recette->save(Connection::getInstance());
    // }
    public function rechercheAction($saisie) {
        $O_recherche = new Recette();
        $saisie = $_GET['saisie']; // Récupération de la recherche à partir des paramètres
        Vue::montrer('Accueil/recherche', array('recherche' =>  $O_recherche->recherche($saisie)));
    }
    public function trierIngredientsAction($categorie){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieIngredients($categorie);
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }
    public function trierParticulariteAction($categorie){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieParticularite($categorie);
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }
    public function trierDiffBasAction(){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieDifficulteBas();
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }
    public function trierDiffHautAction(){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieDifficulteHaut();
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }
    public function trierCoutBasAction(){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieCoutBas();
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }
    public function trierCoutHautAction(){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieCoutHaut();
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }
    public function trierTpsBasAction(){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieTpsBas();
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }
    public function trierTpsHautAction(){
        $O_recette = new Recette();
        $tabRecettes = $O_recette->trieTpsHaut();
        Vue::montrer('Recette/Resultats', array('recettes' => $tabRecettes));
    }


}