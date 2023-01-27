<?php
$tout = new Admin();
$condition ="";
if (isset($A_vue['liste'])) {
    $condition = $A_vue['liste'];
}
$membre = $tout->afficheMembre();
$number_of_row = count($membre);
$comm = $tout->afficheComm();
$numbers_of_row = count($comm);
$recette = $tout->afficheRecette();
$numbers_of_rows = count($recette);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page Administrateur de Patisseries</title>
</head>

<body>



<br />
<br />

<div class="user">

    <div class="formUser">
        <h1>Supprimer un utilisateur</h1>
        <form action="/php/index.php?url=Admin/banDef" method="post">
            <label for="email">Adresse email de l'utilisateur à supprimer:</label><br>
            <input type="text" id="email" name="email"><br>
            <input type="submit" value="Supprimer">
            <p><?php
                for ($x = 0; $x < $number_of_row; ++$x) {
                    echo
                        '<li class="commentArea">' .
                        '<div class="profile">' .
                        '<p class="profileName">' . $membre[$x]['email'] . '</p>' .
                        '</div>' .
                        '</li>';
                }
                ?></p>
        </form>
    </div>
    <div class="imageUser"></div>
</div>
<br />
<div id="ligneAccueil">
</div>
<div class="comment">

    <div class="imageComment"></div>
    <div class="formComment">
        <h1>Supprimer un commentaire</h1>
        <form action="../php/index.php?url=Admin/supprComm" method="post">
            <label for="comment_id">ID du commentaire à supprimer:</label><br>
            <input type="text" id="id_comm" name="id_comm"><br>
            <input type="submit" value="Supprimer">
            <p><?php
                for ($x = 0; $x < $numbers_of_row; ++$x) {
                    echo
                        '<li class="commentArea">' .
                        '<div class="profile">' .
                        '<p class="profileName">' . $comm[$x]['id_comm'] . '</p>' .
                        '<p class="profileName">' . $comm[$x]['libelle'] . '</p>' .
                        '</div>' .
                        '</li>';
                }
                ?></p>
        </form>
    </div>

    <div id="ligneAccueil">
    </div>
    <div class="recette">

        <div class="imageRecette"></div>
        <div class="fromRecette">
            <h1>Supprimer une recette</h1>
            <form action="../php/index.php?url=Admin/supprRecette" method="post">
                <label for="recette_id">ID de la recette à supprimer:</label><br>
                <input type="text" id="id_recette" name="id_recette"><br>
                <input type="submit" value="Supprimer">
                <p><?php
                    for ($x = 0; $x < $numbers_of_rows; ++$x) {
                        echo
                            '<li class="commentArea">' .
                            '<div class="profile">' .
                            '<p class="profileName">' . $recette[$x]['id_recette'] . '</p>' .
                            '<p class="profileName">' . $recette[$x]['nom'] . '</p>' .
                            '</div>' .
                            '</li>';
                    }
                    ?></p>
            </form>
        </div>

    </div>

</body>

</html>

<style>
    @import url("/php/css/admin.css");
    @import url("/php/css/style.css");
</style>