<?php
session_start();
include_once "config.php";


    if(isset($_POST["bout"])){
    
        $login = mysqli_real_escape_string($bdd,$_POST['login']);
        $mdp = mysqli_real_escape_string($bdd,$_POST['mdp']);

        if(!empty($login) and !empty($mdp)){
            $sql=mysqli_query($bdd, "SELECT * FROM user WHERE login='$login' AND mdp ='$mdp'" );

            if(mysqli_num_rows($sql)>0){
                $_SESSION['login'] = $login;
                header("location:../Accueil.php");
            }else{
                echo "Connexion impossible";
            }
        }else{
            echo "veuillez remplir tous les champs";
        }
    
    }

?>

