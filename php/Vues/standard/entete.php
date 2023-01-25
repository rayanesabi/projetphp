<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src=""></script> <!-- Inclure ici votre js -->
    <link href="Vues/images/caramel.ico" rel="icon">

</head>
<body>
<nav class="navbar">
    <ul>
        <li><a id="logo"><h2>Caramelange</h2><img src="Vues/images/logo.png"></a></li>
        </form>
        <li><a><input formmethod="get"  type="search" name="saisie" placeholder="Rechercher...."><button class="go" onclick="window.location.href = '../php/index.php?url=Accueil/recherche'" type="submit">go</button></a>  </li>
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
