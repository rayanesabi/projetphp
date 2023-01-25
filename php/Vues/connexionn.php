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
    <form method="post" action="../php/index.php?url=Connexion/connexion">
    <div id="Onglet">
            <a id="connexion"><h3>SE CONNECTER</a>   <a id="inscription" href="../php/index.php?url=Inscription">S'INSCRIRE</a></h3>
        </div>
        <input type="email" name="email" placeholder="E-MAIL">
        <input type="password" name="mdp" placeholder="MOT DE PASSE">
        <button class="boutonLog" type="submit">LET'S COOK</button>
    </form>
</div>
<div id="footer">
    <li><a>Copyright © 2022 Caramelange Inc. Tous droits réservés</a></li>
</div>
</body>
</html>
<style>
    @import url("/css/navbar.css");
    @import url("/css/footer.css");
    body{
        background-color: #FDF6F0;
    }

    #connect{
        margin: 100px;
        padding: 0;
        font-family: sans-serif;
        text-align: center;
    }

    input[type="email"], input[type="password"] {  /*formulaire avec tous les inputs*/
        box-sizing: border-box;
        display: block;
        position: inherit;
        margin: 5px auto;
        font-size: 13px;
        background: transparent;
        border: none;
        border-bottom: 2px solid rgb(152, 151, 151);
        outline: none;
        height: 40px;
        width: 220px;
    }

    .boutonLog{ /*bouton se connecter et s'inscrire*/
        border-radius: 6px;
        outline: none;
        background: #a17d60;
        color: white;
        font-size: 13px;
        cursor: pointer;
        padding: 8px 80px;
        position: relative;
        margin: 20px;
        margin-bottom: 55px;
    }

    .boutonLog:hover{
        background-color: #dbb79a;
    }

    #Onglets{
        box-sizing: border-box;
        display: inline-block;
        position: relative;
    }

    #connexion{
        border-bottom: 3px solid rgb(85, 44, 44);
        margin-right: 20px;
    }

    #inscription{
        opacity: 20%;
        cursor: pointer;
        text-decoration: none;
    }

</style>