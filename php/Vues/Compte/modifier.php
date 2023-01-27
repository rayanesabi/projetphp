
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="" rel="stylesheet">
    <title>Caramelange</title>
</head>

<body>
<div id="formRecette">
    <form method="post" action="../php/index.php?url=Compte/modifier" enctype="multipart/form-data">
        <h3>Ici, vous pouvez modifier les informations de votre compte</h3>
        <input type="text" name="pseudo" placeholder="Nom d'utilisateur" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <input type="text" name="email" placeholder="Email" required>
        <p><h3>Photo d'utilisateur</h3></p>
        <input type="file" name="photo" id="inputImage" accept="image/*" >
        <img id="profile_preview" width="300" height="300" src="">
        <button class="boutonLog" type="submit" onclick="alert('Les changements ont bien été effectués !')" value="Modifier">Modifier</button>
        <input type="reset" class="boutonReset">
    </form>

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

</body>
</html>
<style>
    @import url("/php/css/AjtRecette.css");
    N</style>