<?php

final class ControleurRecette
{
    public function defautAction()
    {
        $O_recette =  new Recette("tarte aux pommes", "pomme");
        Vue::montrer('Recette/voir', array('recette' =>  $O_recette->donneRecette()));

    }
    public function saveAction(Array $A_postParams = null){
        $recette = Recette::fromArray($A_postParams);

        $recette->save(Connection::getInstance());
    }
    public function testformAction(Array $A_parametres = null, Array $A_postParams = null)
    {

        Vue::montrer('recette/testform', array('formData' =>  $A_postParams));

    }

}