<?php
require_once '../Modele/Accueil.php';
$test = new Accueil();
$ty = $test->afficherCommentaires();
$number_of_rows = count($ty);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caramelange</title>

</head>

<body>

 
  <div class="container">
  <h4>Tarte aux pommes</h4>

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
      <img src="images/scones.jpg" id="image">
    </div>
    <div class="temps_total_preparation">
      <p>temps cuisson : <br>10min</p>
      <p>temps repos : <br>0min</p>
      <p>temps preparation : <br>15min</p>
      <p>temps total : <br>25min</p>
    </div>
  </div>
  <div class="corps_étape">
    <h1>Liste ingrédients :</h1>
  </div>
 <!---divison commentaire--->
  <div id="Commentaires">
    Commentaires (<?php print_r($number_of_rows) ?> avis)
    <div id="ligneComm">
    </div>
  </div>
  <!--espace Commentaires-->
  <div id="CommentairesBox">
    <textarea type="textarea" id="commentInput" name="commentField" placeholder="Ajouter un avis..."></textarea>
    <button id="submitComment">Ajouter</button>
</div>
<ul id="comments">

      <?php
      for ($x = 0; $x < $number_of_rows; ++$x)
          echo
              '<li class="commentArea">' .
              '<div class="profile">' .
              '<img class="profilePicture">' . $ty[$x]['photo'] .
              '<p class="profileName">' .  $ty[$x]['pseudo'] . '</p>' .
              '</div>' .
              '<p class = "commentsTexts">' .  $ty[$x]['libelle'] . '</p>' .
              '<p class = "commentsNote">' .  $ty[$x]['note'] . '</p>' .
              '<p class = "commentsDate">' .  $ty[$x]['date'] . '</p>' .
              '</li>';
          ?>
</ul>
</div>

</body>
</html>
<style>
    @import url("/php/css/style.css");
</style>