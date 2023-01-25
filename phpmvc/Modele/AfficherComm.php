<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<?php
    session_start();
    require_once 'config.php'; 
    $gameCommentsSql = "SELECT photo, pseudo, libelle, note, date FROM utilisateurs, commentaires WHERE utilisateurs.id_utilisateur = commentaires.id_utilisateur";
    $resultGameComments = mysqli_query($bdd, $gameCommentsSql);
    
    while($commentRow = $resultGameComments->fetch_row()){
        $photo = $commentRow[0];
        $pseudo = $commentRow[1];
        $content = $commentRow[2];
        $note = $commentRow[3];
        $date = $commentRow[4];
        
        echo "
        <li class='commentArea'>
            <div class='profile'>
                <img class='profilePicture>$photo
                <p class='profileName'>$pseudo</p>
            </div>
            <p class = 'commentsTexts'> $content </p>
            <p class = 'commentsNote'> $note </p>
            <p class = 'commentsDate'> $date </p>
            </li>
        ";
    }
?>
</body>
</html>