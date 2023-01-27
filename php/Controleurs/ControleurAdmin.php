<?php
final class ControleurAdmin

{
    public function defautAction()
    {
        $O_Connexion = new Connexion();
        Vue::montrer('Connexion/voir');
    }
}