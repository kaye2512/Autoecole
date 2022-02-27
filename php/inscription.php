<?php
    if(isset($_POST["bout2"])){
        include_once "config.php";
        $nom = mysqli_real_escape_string($bdd,$_POST["nom"]);
        $prenom = mysqli_real_escape_string($bdd,$_POST["prenom"]);
        $mail = mysqli_real_escape_string($bdd,$_POST["mail"]);
        $login = mysqli_real_escape_string($bdd,$_POST["login"]);
        $mdp = mysqli_real_escape_string($bdd,$_POST["mdp"]);

        if(!empty($nom) and !empty($prenom) and !empty($mail) and !empty($login) and !empty($mdp)){

            $sql=mysqli_query($bdd, "SELECT * FROM user WHERE mail='$mail'");
            
            if(mysqli_num_rows($sql) >0){
                echo "Cette email existe dans la base";
            }

            $sql1= mysqli_query($bdd, "SELECT * FROM user WHERE login='$login'");

            if(mysqli_num_rows($sql1) >0){
                echo "ce login existe dans la base";
            }else{
                $sql2 = mysqli_query($bdd, "INSERT INTO user (nom, prenom, mail, login, mdp) VALUES ('$nom', '$prenom', '$mail', '$login', '$mdp')");

                   echo "inscription réussie, connectez-vous";
                   header ("refresh:3; url=../connexion.php");
            }
        

        }else{
            echo "veuillez remplir tous les champs";
        }
    }
?>