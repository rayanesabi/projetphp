<?php
$recettes = $A_vue['aleatoire'];
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
        <img src="Vues/images/cheescake.jpg" class="main-image">
        <div class="p">«Tout le monde peut pâtisser»</div>
    </div>

    <div id="ligneAccueil">
            </div>


    <div id="Recettes">
        <?php
        echo '<ul>';
            
        for ($x=0; $x<3; ++$x)
        {
        $image = base64_encode($recettes[$x]['image']);
        echo'
            <li>
                <a href="../php/index.php?id_recette='.$recettes[$x]['id_recette'].'&url=RecetteChoisie">
                    <img src="data:image/png;base64,' . $image . '" alt= "' . $recettes[$x]['nom'] . '">
                </a>

                <div class =nom-recettes>
                <a>'.$recettes[$x]['nom'].'</a>
            </div>
            </li>';
            
            
        }
        
        echo '</ul>'
        ?>
        
    </div>
    <h4>Recettes par Catégorie</h4>
    <div id="categories">
        <button><img src="Vues/images/recipe.png" onclick="window.location.href='../php/index.php?url=Recette'">Recettes
        </button>
        <button><img id="pascher" src="Vues/images/cheap.png"
                onclick="window.location.href='../php/index.php?url=Recette/trierCoutBas'">Bon marché</button>
        <button><img id="rapide" src="Vues/images/rapide.png"
                onclick="window.location.href='../php/index.php?url=Recette/trierTpsBas'">Rapide</button>
        <button><img id="chocolat" src="Vues/images/chocolate.png"
                onclick="window.location.href='../php/index.php?url=Recette/trierIngredients/chocolat'">Au
            chocolat</button>
        <button><img id="particularite" src="Vues/images/vegan.png"
                onclick="window.location.href='../php/index.php?url=Recette/trierParticularite/végan'">Vegan</button>
        <button><img id="simple" src="Vues/images/niveau.png"
                onclick="window.location.href='../php/index.php?url=Recette/trierDiffBas'">Facile</button>
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