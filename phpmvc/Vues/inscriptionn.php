<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inscription</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
<form method="post" action="/submit-registration">
    <label for="pseudo">Nom d'utilisateur:</label>
    <input type="text" id="pseudo" name="pseudo">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
<br>
<label for="mdp">Mot de passe:</label>
<input type="mdp" id="mdp" name="mdp">
<br>
<label for="mdpConfirme">Confirmation de mot de passe:</label>
<input type="mdpConfirme" id="mdpConfrme" name="mdpConfirme">
<br>
<input type="submit" value="S'inscrire">

</form>



</html>