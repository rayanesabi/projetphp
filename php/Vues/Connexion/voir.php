<?php
$erreur = "";
if (isset($A_vue['erreur'])) {
    $erreur = $A_vue['erreur'];
} else if (isset($A_vue['reussite'])){
    $erreur = $A_vue['reussite'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caramelange</title>
    <link href="../images/caramel.ico" rel="icon">
</head>
<body>

<div id="connect">
    <form method="post" action="../php/index.php?url=Compte/connexion">
    <div id="Onglet">
            <a id="connexion"><h3>SE CONNECTER</a>   <a id="inscription" href="../php/index.php?url=Inscription">S'INSCRIRE</a></h3>
        </div>
        <input type="email" name="email" id="email" placeholder="E-MAIL" required>
        <input type="password" name="mdp" id="mdp" placeholder="MOT DE PASSE" required>
        <button class="boutonLog" type="submit">LET'S COOK</button>
    </form>
    <?php echo $erreur?>
</div>

</body>
</html>
<style>
    @import url("/php/css/connexion.css");
</style>