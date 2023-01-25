<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caramelange</title>
    <link href="/php/Vues/images/caramel.ico" rel="icon">
    <script></script>
</head>

<body>

    <div id="banniere">
        <img src="Vues/images/cheescake.jpg">
        <div class="p">«Tout le monde peut pâtisser»</div>
    </div>
    <div id="Recettes">
        <ul>
            <li id="recette1"></li>
            <li id="recette2"></li>
            <li id="recette3"></li>
        </ul>
    </div>
    <h4>Recettes par Catégorie</h4>
    <div id="categories">
        <button><img src="Vues/images/cheap.png">Bon marché</button>
        <button><img src="Vues/images/rapide.png">Rapide</button>
        <button><img src="Vues/images/chocolate.png">Au chocolat</button>
        <button><img src="Vues/images/vegan.png">Vegan</button>
        <button><img src="Vues/images/niveau.png">Facile</button>
    </div>
    <p>
        <?php print_r($A_vue['Recette']) ?>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script src="chemin/vers/votre/script.js"></script>

</body>

</html>
<style>
@import url("/php/css/style.css");
</style>