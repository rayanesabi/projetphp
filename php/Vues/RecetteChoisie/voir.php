
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>


<body>

  <div class="corps">
    <div class="avis">
      <div class="rating">
        <a href="#5" title="Donner 5 étoiles">☆</a>
        <a href="#4" title="Donner 4 étoiles">☆</a>
        <a href="#3" title="Donner 3 étoiles">☆</a>
        <a href="#2" title="Donner 2 étoiles">☆</a>
        <a href="#1" title="Donner 1 étoile">☆</a>
      </div>
      <div class="cmb_personnes">
        6 personnes
      </div>
    </div>
    <div class="box_image">
      <img src="images_enzo/tarte aux pommes.jpg" id="image">
    </div>
    <div class="temps_total_preparation">
      
    </div>
  </div>
  <div class="corps_étape">
    <h1>Liste ingrédients : <?php print_r($A_vue['RecetteChoisie'])  ?> <br></h1>

    <div class = "texte">
      Oeuf, beurre, sucre, farine.
    </div>

  </div>


</body>

<style>
    @import url("../php/css/style.css");
    @import url("../php/css/navbar.css");
    @import url("../php/css/footer.css");
</style>


</html>
