<?php
session_start();
include_once "config.php";


    if(isset($_POST["bout"])){
    
        $mail = mysqli_real_escape_string($bdd,$_POST['Email']);
        $mdp = mysqli_real_escape_string($bdd,$_POST['mdp']);

        if(!empty($mail) and !empty($mdp)){
            $sql=mysqli_query($bdd, "SELECT * FROM eleve WHERE email='$mail' AND mdp ='$mdp'" );

            if(mysqli_num_rows($sql)>0){
                $_SESSION['Email'] = $mail;
                header("location:../AccueilE.php");
            }else{
                echo "Connexion impossible";
            }
        }else{
            echo "veuillez remplir tous les champs";
        }
    
    }

?>

