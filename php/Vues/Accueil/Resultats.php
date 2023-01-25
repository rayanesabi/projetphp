<?php

$recherche = new Accueil();

try {
    $resultats = $recherche->getFeaturedArticles();
} catch (Exception $e) {
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Résultats de la recherche</title>
</head>
<body>
<h1>Résultats de la recherche</h1>
Copy code
<?php if (empty($resultats)) : ?>
    <p>Aucun résultat trouvé.</p>
<?php else : ?>
    <ul>
        <?php foreach ($resultats as $resultat) : ?>
            <li><?= $resultat['nom'] ?> </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>