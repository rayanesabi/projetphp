<?php
$condition = "";
if (isset($A_vue['reussite'])){
    $condition = $A_vue['reussite'];
} elseif (isset($A_vue['erreur'])){
    $condition = $A_vue['erreur'];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="/php/css/inscription.css" >
    <title>Caramelange</title>
</head>

<body>

<div id="formulaire">
    <form method="post" action="../php/index.php?url=Inscription/creerUtilisateur" enctype="multipart/form-data">
        <div id="Onglets">
            <h3><a id="connexion" href="../php/index.php?url=Compte">SE CONNECTER</a> <a id="inscription">S'INSCRIRE</a></h3>
        </div>
        <br>
        <div><strong>Rejoignez la grande communauté Caramelange</strong></div>
        <br>
        <input type="email" name="email" placeholder="E-MAIL">
        <input type="password" name="mdp" placeholder="MOT DE PASSE">
        <input type="password" name="mdpConfirme" placeholder="CONFIRMER LE MOT DE PASSE">
        <input type="text" name="pseudo" placeholder="PSEUDO">
        <p><h3>Ajouter une photo de profil</h3>(facultatif)</p>
        <input type="file" name="photo" id="inputImage" accept="image/*">
        <img id="profile_preview" width="100" height="100" src="">
        <button class="boutonLog" type="submit">C'EST PARTI</button>
        <?php echo $condition ?>

    </form>
    <!--script js pour afficher l'image choisie-->
    <script>
        let inputImage = document.getElementById("inputImage");
        let profile_preview = document.getElementById("profile_preview");
        inputImage.onchange = function () {
            let reader = new FileReader();
            reader.onload = function () {
                let dataURL = reader.result;
                profile_preview.src = dataURL;
            };
            reader.readAsDataURL(inputImage.files[0]);
        };

    </script>
</div>

</body>

</html>
<style>
    @import url("/php/css/inscription.css");

</style>
