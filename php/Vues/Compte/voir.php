<?php
if (isset($A_vue['reussite'])){
    $condition = $A_vue['reussite'];
} elseif (isset($A_vue['erreur'])){
    $condition = $A_vue['erreur'];
} else{
    $condition ="";
}
$image = base64_encode($_SESSION['photo']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mon compte</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <p><?php echo $condition ?></p>
    <h1>Mon compte</h1>
    <div class="user-info">
        <?php echo '<img src="data:image/png;base64,' . $image . '"class="photo-profil" >' ?>
        <p>Nom d'utilisateur : <?= $_SESSION['utilisateur']['pseudo'] ?></p>
        <p>Adresse email : <?= $_SESSION['utilisateur']['email'] ?></p>
    </div>
    <div class="actions">
        <a href="../php/index.php?url=Compte/modifierDefaut" class="btn">Modifier les informations</a>
        <?php if($_SESSION['admin']){
            echo '<a href="../php/index.php?url=Admin/ajt" class="btn">Ajouter une recette</a>';
        }?>
        <a href="../php/index.php?url=Compte/deconnexion" class="btn">Déconnexion</a>
        <a href="../php/index.php?url=Compte/connexionAdmin" class="btn">Admin</a>

    </div>
</div>
</body>
</html>
<style>
    @import url("/php/css/style.css");

    .container {
        width: 50%;
        margin: 0 auto;
        text-align: center;
    }

    .user-info {
        margin-bottom: 20px;
    }

    .actions {
        display: flex;
        justify-content: space-between;
    }

    .btn {
        padding: 10px 20px;
        text-decoration: none;
        color: #fff;
        background-color: #333;
        border-radius: 5px;
    }

</style>

