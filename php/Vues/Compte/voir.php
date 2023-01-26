<!DOCTYPE html>
<html>
<head>
    <title>Mon compte</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Mon compte</h1>
    <div class="user-info">
        <p>Nom d'utilisateur : <?= $_SESSION['user']['pseudo'] ?></p>
        <p>Adresse email : <?= $_SESSION['user']['email'] ?></p>
    </div>
    <div class="actions">
        <a href="update.php" class="btn">Modifier les informations</a>
        <a href="delete.php" class="btn">Supprimer le compte</a>
    </div>
</div>
</body>
</html>
<style>
    .container {
        width: 50%;
        margin: 0 auto;
        text-align: center;
    }

    .user-info {
        margin-bottom: 20px;
    }

    .actions {
        display: flex;
        justify-content: space-between;
    }

    .btn {
        padding: 10px 20px;
        text-decoration: none;
        color: #fff;
        background-color: #333;
        border-radius: 5px;
    }

</style>

