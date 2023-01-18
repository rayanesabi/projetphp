<!DOCTYPE html>
<html>
<head>
    <title>Page utilisateur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>Bienvenue, <?php echo $_SESSION['user']['username']; ?>!</h1>
    <div class="user-info">
        <p>Nom : <?php echo $_SESSION['user']['nom']; ?></p>
        <p>Prénom : <?php echo $_SESSION['user']['prenom']; ?></p>
        <p>Email : <?php echo $_SESSION['user']['email']; ?></p>
    </div>
    <form action="logout.php" method="post">
        <input type="submit" value="Se déconnecter">
    </form>
</div>
</body>
<style>
        body {
font-family: Arial, sans-serif;
background-color: #f5f5f5;
}

.container {
max-width: 800px;
margin: 0 auto;
text-align: center;
padding: 20px;
}

.user-info {
margin-top: 20px;
text-align: left;
}

form {
margin-top: 20px;
}
</style>
</html>
