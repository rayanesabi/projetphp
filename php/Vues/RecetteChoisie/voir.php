<?php
require_once 'C:\xampp\htdocs\projetphp\php\Modele\RecetteChoisie.php';
$test = new RecetteChoisie();
$recup = $_GET['id_recette'];
$ty = $test->afficherCommentaires($recup);
$number_of_rows = count($ty);
$resultats = $A_vue['RecetteChoisie'];
$image = base64_encode($resultats['image']);

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
    <h4><?php print_r($resultats['nom']) ?></h4>

    <div class="corps">
        <div class="avis">
            <div class="rating" >
                <!----><a id="note5" href="#5" title="Donner 5 étoiles">☆</a>
                <!----><a id="note4" href="#1" title="Donner 4 étoile">☆</a>
                <!----><a id="note3" href="#4" title="Donner 3 étoiles">☆</a>
                <!----><a id="note2" href="#3" title="Donner 2 étoiles">☆</a>
                <!----><a id="note1" href="#2" title="Donner 1 étoiles">☆</a>
            </div>
            <div class="cmb_personnes">
                6 personnes
            </div>
        </div>
        <div class="box_image">
            <img src="data:image/png;base64,'<?php echo $image?>'id="image">
        </div>
        <div class="temps_total_preparation">
            <p>temps cuisson : <br><?php print_r($resultats['tpscuiss']) ?> min</p>
            <p>temps repos : <br><?php print_r($resultats['tpsrepos']) ?> min</p>
            <p>temps preparation : <br><?php print_r($resultats['tpsprepar']) ?> min</p>
            <p>temps total : <br><?php print_r($resultats['tpstotal']) ?> min</p>
        </div>
    </div>
    <div class="corps_étape">
        <h2>Liste étapes:</h2><br> <p><?php print_r($resultats['etapes']) ?><p>
    </div>
    <!---divison commentaire--->
    <div id="Commentaires">
        Commentaires (<?php print_r($number_of_rows) ?> avis)
        <div id="ligneComm">
        </div>
    </div>
    <!--espace Commentaires-->
    <div id="CommentairesBox">
        <form method="post" action="../php/index.php?url=RecetteChoisie/insererComm" id ="form" >
            <textarea type="textarea" id="commentInput" name="commentField" placeholder="Ajouter un avis..."></textarea>
            <input type="hidden" name="idRecette" value="<?php echo $recup ?>">
            <button type="submit" id="submitComment">Ajouter</button>
        </form>
    </div>
    <ul id="comments">
        <?php
        for ($x = 0; $x < $number_of_rows; ++$x) {
            $image = base64_encode($ty[$x]['photo']);
            echo
                '<li class="commentArea">' .
                '<div class="profile">' .
                '<img src="data:image/png;base64,' . $image . 'class="profilePicture">'.
                '<p class="profileName">' . $ty[$x]['pseudo'] . '</p>' .
                '</div>' .
                '<div class="contenuComm">' .
                '<p class = "commentsNote">' . $ty[$x]['note'] . ' étoiles' . '</p>' .
                '<p class = "commentsDate">' . $ty[$x]['date'] . '</p>' .
                '<p class = "commentsTexts">' . $ty[$x]['libelle'] . '</p>' .
                '</div>' .
                '</li>';
        }
        ?>
</div>
</ul>
</div>

</body>
</html>
<style>
    @import url("/php/css/style.css");
</style>
