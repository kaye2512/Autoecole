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
    <form action="php/inscriptionE.php" method="post" enctype="multipart/form-data">

    <label for="">Nom :</label> <input type="text" name="nom" placeholder="" required><br><br>
    <label for="">Prénom :</label> <input type="text" name="prenom" placeholder="" required><br><br>
    <label for="">Date de naissance :</label> <input type="date" name="date" placeholder="" required><br><br>
    <label for="">Email :</label> <input type="text" name="mail" placeholder=""><br><br>
    <label for="">Numéro Téléphone :</label> <input type="tel" name="telNo" id="telNo" placeholder="07 82 81 86 24" required
                                            pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"><br><br>
    <label for="">Adresse :</label> <input type="text" name="adresse" placeholder="" required><br><br>
    <label for="">Ville :</label> <input type="text" name="ville" placeholder="" required><br><br>
    <label for="">Code Postal :</label> <input type="text" name="cod" placeholder="" required><br><br>
    <label for="">Mot de passe :</label> <input type="password" name="mdp" placeholder="" required><br><br>
    <label for="">Ajouter une photo de profil</label> <input type="file" name="image" placeholder="photo :" required><br><br>
    <input type="submit" value="S'inscrire" name="bout2"><br>

    </form><hr>
    </center>
</body>
</html>