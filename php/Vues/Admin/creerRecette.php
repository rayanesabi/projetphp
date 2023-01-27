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
    <form method="post" action=../php/index.php?Admin/ajtRct" enctype="multipart/form-data">
        <h3>Ici, vous pouvez ajouter une nouvelle recette</h3>
        <input type="text" name="nom" placeholder="Nom de la recette" required>
        <input type="text" name="ingredient" placeholder="Ingrédient principal" required>
        <input type="number" name="difficulte" placeholder="Difficulté"  min="0" max="4" required>
        <input type="text" name="cout" placeholder="Coût" required>
        <input type="number" name="tpsprep" placeholder="Temps de préparation" min="0" max="200" required>
        <input type="number" name="tpscuisson" placeholder="Temps de cuisson" min="0" max="100" required>
        <input type="number" name="tpsrepos" placeholder="Temps de repos" min="0" max="100" required>
        <input type="number" name="tpstotal" placeholder="Temps total" min="0" max="260" required>
        <input type="textarea" nom="etapes" placeholder="Etapes de préparation" onkeypress="this.style.width = Math.max(this.value.length, 20) + 'ch';" required>
        <p><h3>Photo de la recette</h3></p>
        <input type="file" name="photo" id="inputImage" accept="image/*" required>
        <img id="profile_preview" width="300" height="300" src="">
        <button class="boutonLog" type="submit" onclick="alert('Votre recette a bien été ajouté')" value="Ajouter">Ajouter</button>
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