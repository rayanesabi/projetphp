<?php
require_once 'C:\xampp\htdocs\projetphp\php\Modele\Accueil.php';
$accueil = new Accueil();
$nbRecettes = $accueil->donneNbRecette();
$testi = rand(0, $nbRecettes);
$testo = rand(0, $nbRecettes);
$testy = rand(0, $nbRecettes);

$recette = new Accueil();
$test = $recette->test($testi);

$recette2 = new Accueil();
$testp = $recette2->test($testo);

$recette3 = new Accueil();
$testr = $recette3->test($testy);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caramelange</title>
    <link href="/php/Vues/images/caramel.ico" rel="icon">

</head>
<body>

<div id="banniere">
    <img src="Vues/images/cheescake.jpg">
    <div class="p">«Tout le monde peut pâtisser»</div>
</div>
<div id="Recettes">
    <ul>
        <li><a id="recette1" href="../php/index.php?id_recette='<?= $test['id_recette'] ?> '&url=RecetteChoisie"
><?php print_r($test['nom']) ?> </a></li>
        <li><a id="recette2" href="../php/index.php?id_recette='<?= $test['id_recette'] ?> '&url=RecetteChoisie"
> <?php print_r($testp['nom']) ?></a></li>
        <li><a id="recette3" href="../php/index.php?id_recette='<?= $test['id_recette'] ?> '&url=RecetteChoisie""
><?php print_r($testr['nom']) ?></a></li>
    </ul>
</div>
<h4>Recettes par Catégorie</h4>
<div id="categories">
    <button><img  src="Vues/images/recipe.png" onclick=window.location.href="../php/index.php?url=Recette">Recettes </button>
    <button><img id="pascher" src="Vues/images/cheap.png" onclick=window.location.href="../php/index.php?url=Recette/trierCoutBas">Bon marché</button>
    <button><img id="rapide"src="Vues/images/rapide.png" onclick=window.location.href="../php/index.php?url=Recette/trierTpsBas">Rapide</button>
    <button><img id="chocolat" src="Vues/images/chocolate.png" onclick=window.location.href="../php/index.php?url=Recette/trierIngredients" >Au chocolat</button>
    <button><img id="particularite" src="Vues/images/vegan.png" onclick=window.location.href="../php/index.php?url=Recette/trierParticularite">Vegan</button>
    <button><img id="simple" src="Vues/images/niveau.png"onclick=window.location.href="../php/index.php?url=Recette/trierDiffBas">Facile</button>
</div>
<p>
</p>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
<style>
    @import url("/php/css/style.css");
</style>