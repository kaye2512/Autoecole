<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Connexion administrateur</title>
</head>
<body>
    <center>
    <h1 color:black>Connexion administrateur</h1>
    <form action="php/connexion.php" method="post">
        <?php if(isset($erreur))echo"<h3>$erreur</h3>";?>
        <input type="text" name="login" placeholder="Entrez votre login :"><br><br>
        <input type="password" name="mdp" placeholder="Entrez votre mot de passe :"><br><br>
        <input type="submit" value="Connexion" name="bout"><br>
    </form>
    <br>
    <a href=Inscription.php><input type="submit" value="S'inscrire" name="bout2"></a>
    </center>
</body>
</html>