<?php
    if(isset($_POST["bout2"])){
        include_once "config.php";
        $nom = mysqli_real_escape_string($bdd, $_POST["nom"]);
        $pre = mysqli_real_escape_string($bdd, $_POST["prenom"]);
        $date = mysqli_real_escape_string($bdd, $_POST["date"]);
        $mail = mysqli_real_escape_string($bdd, $_POST["mail"]);
        $tel = mysqli_real_escape_string($bdd, $_POST["telNo"]);
        $ad = mysqli_real_escape_string($bdd, $_POST["adresse"]);
        $vil = mysqli_real_escape_string($bdd, $_POST["ville"]);
        $cod = mysqli_real_escape_string($bdd, $_POST["cod"]);
        $mdp = mysqli_real_escape_string($bdd, $_POST["mdp"]);
        


        if(!empty($nom) && !empty($pre) && !empty($date) && !empty($mail) && !empty($tel) && !empty($ad) && !empty($vil) && !empty($cod) && !empty($mdp)){

            $sql = mysqli_query($bdd, "SELECT * FROM eleve WHERE email='$mail'");

            if(mysqli_num_rows($sql) > 0){
                echo "cette email existe dans la base";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                
                    $extensions = ['png', 'jpeg', 'jpg'];
                    
                    if(in_array($img_ext, $extensions) === true){
                        $time = time();
                        $new_img_name = $time.$img_name;
                        
                        if(move_uploaded_file($tmp_name, "../image/".$new_img_name)){
                            $req = "INSERT INTO eleve (nom, prenom, datenaiss, email, phone, adresse, ville, codeP, mdp, img) 
                            VALUES ('$nom', '$pre', '$date', '$mail', '$tel', '$ad', '$vil', '$cod', '$mdp', '$new_img_name')";
                            echo $req;
                            $sql1 = mysqli_query($bdd, $req);
                            // echo mysqli_error($bdd);
                                                    
                             echo "inscription réussie, connectez-vous";
                             header ("refresh:3; url=../connexionE.php");
                        }else{
                            echo "il y a une erreur";
                        }
                    }else{
                        echo "choisissez une image de type -jpeg, jpg, png!";
                    }

                }

            

            }
        }

    }
?>