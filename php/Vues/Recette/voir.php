<?php

$recherche = new Recette();
if (isset($_GET['saisie'])) {
    // On récupère les résultats de la recherche

    $resultats = $A_vue['recherche'];

}elseif (isset($A_vue['recettes'])) {
    $resultats = $A_vue['recettes'];
}
else{
    try {
        $resultats = $A_vue['recette'];
    } catch (Exception $e) {
    }
// On vérifie que le formulaire a été soumis
}
$number_of_rows = count($resultats);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Résultats de la recherche</title>
</head>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../php/css/recette.css" rel="stylesheet">
    <title>Caramelange</title>
    <link href="../php/Vues/images/caramel.ico" rel="icon">
</head>

<body>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../php/css/recette.css" rel="stylesheet">
        <title>Caramelange</title>
        <link href="../php/Vues/images/caramel.ico" rel="icon">
    </head>

    <body>

        <form class="barre-filtres">
            <label for="filtre">Filtrer par :</label>
            <select id="filtre" name="filtre"">
                <option value="">Choisir un filtre</option>
                <option value="trierDiffHaut">Difficulté décroissante</option>
                <option value="trierDiffBas">Difficulté croissante</option>
                <option value="trierCoutHaut">Cout décroissant</option>
                <option value="trierCoutBas">Cout croissant</option>
                <option value="trierTpsHaut">Temps décroissant</option>
                <option value="trierTpsBas">Temps croissant</option>
                <option value="trierIngredients/chocolat">Chocolat</option>
                <option value="trierParticularite/végan">Végan</option>
            </select>
            <input type="button" id="valider" value="Valider" onclick="validerFiltre()">
        </form>


        <?php if(empty(($resultats)))
    echo '<p> Aucun résultat trouvé </p>'
?>
        <div class="container">
            <div class="row">

                <?php
        for ($x = 0; $x < $number_of_rows  ; ++$x) {
            $image = base64_encode($resultats[$x]['image']);
            echo '<div class="col-sm-4">' .
                '<div class="card">' .
                '<a  href="../php/index.php?id_recette=' . $resultats[$x]['id_recette'] .'&url=RecetteChoisie">' .
                '<img src="data:image/png;base64,' . $image . '" class="card-img-top" alt= ' . $resultats[$x]['nom'] . '>' .
                '<div class="card-body">' .
                '<h5 class="card-title text-center">' . $resultats[$x]['nom'] . '</h5>' .
                '</div>' .
                '</a>' .
                '</div>' .
                '</div>';
            $_SESSION['id_recette'] = ($resultats[$x]['id_recette']);
        }
        ?>

            </div>
        </div>

        <script>
        function validerFiltre() {
            var select = document.getElementById("filtre");
            var optionSelectionnee = select.options[select.selectedIndex].value;
            window.location.href = "../php/index.php?url=Recette/" + optionSelectionnee;
        }
        </script>

    </body>

    </html>