<?php
class Admin
{
    private $pdo;
    public function __construct() {
        $this->pdo = Connection::getInstance()->pdo;
    }
    function AjtRct($nom, $ingredients, $difficulté, $cout, $tpsprepar, $tpscuiss, $tpsrepos, $tpstotal, $etapes, $image)
    {

        $insert = $this->pdo->prepare('INSERT INTO recette(nom, ingredients, difficulté, cout, tpsprepar, tpscuiss, tpsrepos,
 tpstotal, etapes, image) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insert->execute(array($nom, $ingredients, $difficulté, $cout, $tpsprepar, $tpscuiss, $tpsrepos, $tpstotal, $etapes, $image));

    }
}