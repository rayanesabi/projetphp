<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/inscription.css" rel="stylesheet">
    <title>Caramelange</title>
    <link href="images/caramel.png" rel="icon">
</head>

<body>
<nav class="navbar">
    <ul>
        <li><a id="logo">
                <h2>Caramelange</h2><img src="images/logo.png">
            </a></li>
        <li><a><input type="search" placeholder="Rechercher...."><button class="go" type="submit">go</button></a> </li>
        <li><a id="accueil" href="Accueil/voir.php">ACCUEIL</a></li>
        <li><a id="connex" href="../Vues/connexionn.php">CONNEXION </a></li>
        <li>|</li>
        <li><a id="inscr" href="../Vues/inscriptionn.php">INSCRIPTION</a></li>
    </ul>
</nav>
<div id="connect">
    <form action="Vues/ControleurInscription.php?action=creerUtilisateurAction" method="post">
        <div id="Onglets">
            <h3><a id="connexion" href="connexionn.php">SE CONNECTER</a> <a id="inscription">S'INSCRIRE</a></h3>
        </div>
        <br>
        <div><strong>Rejoignez la grande communauté Caramelange</strong></div>
        <br>
        <input type="email" placeholder="E-MAIL">
        <input type="password" placeholder="MOT DE PASSE">
        <input type="password" placeholder="CONFIRMER LE MOT DE PASSE">
        <input type="text" name="pseudo" placeholder="PSEUDO">
        <p><h3>Ajouter une photo de profil</h3>(facultatif)</p>
        <input type="file" id="inputImage" accept="image/*">
        <img id="profile_preview" width="100" height="100" src="">
        <button class="boutonLog" type="submit">C'EST PARTI</button>
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
<div id="footer">
    <li><a>Copyright © 2022 Caramelange Inc. Tous droits réservés</a></li>
</div>
</body>

</html>