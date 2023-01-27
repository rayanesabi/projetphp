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
        <form action="/delete_user" method="post">
            <label for="email">Adresse email de l'utilisateur à supprimer:</label><br>
            <input type="email" id="email" name="email"><br>
            <input type="submit" value="Supprimer">
        </form>
    </div>
    <div class="imageUser"><img src="../php/Vues/images/user.png"></div>
</div>
<br />

<div class="comment">

    <div class="imageComment"><img src="../php/Vues/images/avis.png"></div>
    <div class="formComment">
        <h1>Supprimer un commentaire</h1>
        <form action="/delete_comment" method="post">
            <label for="comment_id">ID du commentaire à supprimer:</label><br>
            <input type="text" id="comment_id" name="comment_id"><br>
            <input type="submit" value="Supprimer">
        </form>
    </div>

</div>

</body>

</html>

<style>
    @import url("/php/css/admin.css");
</style>