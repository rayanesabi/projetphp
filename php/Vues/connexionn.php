<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../Vues/css/connexion.css" rel="stylesheet">
    <title>Caramelange</title>
    <link href="images/caramel.png" rel="icon">
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a id="logo"><h2>Caramelange</h2><img src="images/logo.png"></a></li>
        <li><a><input type="search" placeholder="Rechercher...."><button class="go" type="submit">go</button></a>  </li>
        <li><a id="accueil" href="Accueil/voir.php">ACCUEIL</a></li>
        <li><a id="connex" href="../Vues/connexionn.php">CONNEXION </a></li>
        <li>|</li>
        <li><a id="inscr" href="../Vues/inscriptionn.php">INSCRIPTION</a></li>
    </ul>
</nav>
<div id="connect">
    <form>
        <div id="Onglet">
            <a id="connexion"><h3>SE CONNECTER</a>   <a id="inscription" href="inscriptionn.php">S'INSCRIRE</a></h3>
        </div>
        <input type="email" placeholder="E-MAIL">
        <input type="password" placeholder="MOT DE PASSE">
        <button class="boutonLog" type="submit">LET'S COOK</button>
    </form>
</div>
<div id="footer">
    <li><a>Copyright © 2022 Caramelange Inc. Tous droits réservés</a></li>
</div>
</body>
</html>