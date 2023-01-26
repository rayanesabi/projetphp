<?php

$recherche = new Accueil();

try {
    $resultats = $recherche->getFeaturedArticles();
} catch (Exception $e) {
}
$number_of_rows = count($resultats);
?>

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



    <div class="container">
        <div class="row">

            <?php
            for ($x = 0; $x < $number_of_rows; ++$x) {
                $image = base64_encode($resultats[$x]['image']);
                echo '<div class="col-sm-4">' .
                    '<div class="card">' .
                    '<a href="002.html">' .
                    '<img src="data:image/png;base64,' . $image . '" class="card-img-top" alt="' . $resultats[$x]['nom'] . '">' .
                    '<div class="card-body">' .
                    '<h5 class="card-title text-center">' . $resultats[$x]['nom'] . '</h5>' .
                    '</div>' .
                    '</a>' .
                    '</div>' .
                    '</div>';
            }
            ?>

        </div>
    </div>
</body>

</html>