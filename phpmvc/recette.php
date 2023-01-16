
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/navbar.css" rel="stylesheet">
<link href="..\css\style.css" type="text/css" rel="stylesheet">

  <title>Document</title>
</head>

<body>
  <nav class="navbar">
    <h2>Caramelange</h2>
    <ul>
      <li><input type="search" placeholder="Rechercher...."><button type="submit">go</button></li>
      <li><a id="accueil" href="">ACCUEIL</a></li>
      <li><a id="Connex/inscr" href="">CONNEXION | INSCRIPTION</a></li>
    </ul>
  </nav>


  <?php
    print_r($A_vue['RecetteChoisie']);
  ?>

  <div class="corps">
    <div class="avis">
      <div class="rating">
        <!----><a href="#5" title="Donner 5 étoiles">☆</a>
        <!----><a href="#4" title="Donner 4 étoiles">☆</a>
        <!----><a href="#3" title="Donner 3 étoiles">☆</a>
        <!----><a href="#2" title="Donner 2 étoiles">☆</a>
        <!----><a href="#1" title="Donner 1 étoile">☆</a>
      </div>
      <div class="cmb_personnes">
        6 personnes
      </div>
    </div>
    <div class="box_image">
      <img src="images_enzo/tarte aux pommes.jpg" id="image">
    </div>
    <div class="temps_total_preparation">
      <p>temps cuisson : <br>10min</p>
      <p>temps repos : <br>0min</p>
      <p>temps preparation : <br>15min</p>
      <p>temps total : <br>25min</p>
    </div>
  </div>
  <div class="corps_étape">
    <h1>Liste ingrédients :  <br></h1>

    <div class = "texte">
    <?php
        print_r($A_vue['ListeIngredients']);
        ?>
    </div>

  </div>


</body>

</html>