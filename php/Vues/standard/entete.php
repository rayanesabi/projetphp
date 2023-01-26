
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src=""></script> <!-- Inclure ici votre js -->
    <link href="../images/caramel.ico" rel="icon">
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a id="logo"><h2>Caramelange</h2><img src="Vues/images/logo.png"></a></li>
        <li><a>
                <form method="get" action="../php/index.php?url=Recherche" id ="form" >
                    <input type="text" name="saisie" placeholder="Rechercher...">
                    <input type="hidden" name="url" value="Recherche" id="url">
                    <input type="submit" value="Rechercher" form ="form">
                </form>
            </a></li>
        <li><a id="accueil" href="../php/index.php">ACCUEIL</a></li>
        <li><a id="connex" href="../php/index.php?url=Connexion">CONNEXION </a></li>
        <li>|</li>
        <li><a id="inscr" href="../php/index.php?url=Inscription">INSCRIPTION</a></li>
    </ul>
</nav>
</body>
</html>
<style>
    @import url("/php/css/navbar.css");
</style>
