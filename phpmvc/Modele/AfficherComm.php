<?php
 session_start();
 require_once 'config.php'; 
class AfficherComm{
    public function afficher()
    {
        $result = $this->pdo->prepare("SELECT photo, pseudo, libelle, note, date FROM utilisateurs, commentaires WHERE utilisateurs.id_utilisateur = commentaires.id_utilisateur");
        $result->execute();
        //$data = array();
        if ($result->rowCount() > 0) {
            while ($commentRow = $result->fetch()) {
                $photo = $commentRow[0];
                $pseudo = $commentRow[1];
                $content = $commentRow[2];
                $note = $commentRow[3];
                $date = $commentRow[4];

                //$attributs = implode(', ', $data);
                echo
                    '<li class="commentArea">' .
                    '<div class="profile">' .
                    '<img class="profilePicture">' . $photo .
                    '<p class="profileName">' . $pseudo . '</p>' .
                    '</div>' .
                    '<p class = "commentsTexts">' . $content . '</p>' .
                    '<p class = "commentsNote">' . $note . '</p>' .
                    '<p class = "commentsDate">' . $date . '</p>' .
                    '</li>';
            }
        }
        return $result;
    }
}
?>