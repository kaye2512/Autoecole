<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <center>
    <h1>Inscription</h1><hr><br>
    <form action="php/inscription.php" method="post">
    <input type="text" name="nom" placeholder="Entrer le nom :" required><br><br>
    <input type="text" name="prenom" placeholder="Entrer le prénom :"><br><br>
    <input type="text" name="mail" placeholder="Email :"><br><br>
    <input type="text" name="login" placeholder="Login :"><br><br>
    <input type="password" name="mdp" placeholder="Mot de passe :"><br><br>
    <input type="submit" value="S'inscrire" name="bout2"><br>
    </form><hr>
    </center>
</body>
</html>