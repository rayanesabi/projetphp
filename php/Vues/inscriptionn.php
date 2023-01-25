<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- <link type="text/css" href="/css/inscription.css" > -->
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
<div id="formulaire">
    <form method="post" action="../index.php?url=Inscription/creerUtilisateur" enctype="multipart/form-data">
        <div id="Onglets">
            <h3><a id="connexion" href="../php/index.php?url=Connexion">SE CONNECTER</a> <a id="inscription">S'INSCRIRE</a></h3>
        </div>
        <br>
        <div><strong>Rejoignez la grande communauté Caramelange</strong></div>
        <br>
        <input type="email" name="email" placeholder="E-MAIL">
        <input type="password" name="mdp" placeholder="MOT DE PASSE">
        <input type="password" name="mdpConfirme" placeholder="CONFIRMER LE MOT DE PASSE">
        <input type="text" name="pseudo" placeholder="PSEUDO">
        <p><h3>Ajouter une photo de profil</h3>(facultatif)</p>
        <input type="file" name="pp" id="inputImage" accept="image/*">
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
<style>
@import url("/css/navbar.css");
@import url("/css/footer.css");

body{
background-color: #FDF6F0;
}

h3{
display: block;
justify-content: space-evenly;
}

#formulaire{
margin: 100px;
padding: 0;
font-family: sans-serif;
text-align: center;
}

input[type="email"], input[type="password"], input[type="text"] {  /*formulaire avec tous les inputs*/
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

input[type="file"]{
display: block;
position: inherit;
margin: 20px auto;
font-size: 13px;
}

form img {
display: block;
position: inherit;
margin: 20px auto;
font-size: 9px;
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
opacity: 20%;
cursor: pointer;
margin-right: 20px;
text-decoration: none;
}

#inscription{
border-bottom: 3px solid rgb(85, 44, 44);
}
>
</style>