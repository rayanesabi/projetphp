<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caramelange</title>
    <link href="images/caramel.ico" rel="icon">
</head>
<body>

<div id="connect">
    <form method="post" action="../php/index.php?url=Connexion/connexion">
    <div id="Onglet">
            <a id="connexion"><h3>SE CONNECTER</a>   <a id="inscription" href="../index.php?url=Inscription">S'INSCRIRE</a></h3>
        </div>
        <input type="email" name="email" placeholder="E-MAIL">
        <input type="password" name="mdp" placeholder="MOT DE PASSE">
        <button class="boutonLog" type="submit">LET'S COOK</button>
    </form>

</div>

</body>
</html>
<style>
    @import url("/php/css/connexion.css");
</style>