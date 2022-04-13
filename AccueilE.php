<?php
    session_start();
    if(!isset($_SESSION['Email'])){
        header("location: connexionE.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Auto&Code</title>
                <link rel="stylesheet" type="text/css" href="autoecole.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        </head>
        <body class="E_B">
                <nav>
                        <?php
                                include_once "php/config.php";
                                $sql = mysqli_query($bdd, "SELECT * FROM eleve WHERE email = '".$_SESSION['Email']."'" );
                                if(mysqli_num_rows($sql) > 0){
                                        $ligne = mysqli_fetch_assoc($sql);
                                }
                                
                        ?>
                        <div class="nav-gauche">
                        <img src="image/logo4.png" class="logo_E">
                        </div>
                        <!-- <div class="nav-milieu"> 
                                <div class="search-box">
                                        <input type="text" placeholder="Faites votre recherche...">
                                        <button><i class="fas fa-search"></i></button>
                                </div>     
                        </div> -->
                        <div class="nav-droite">
                                <ul>
                                        <li><img src="image/<?php echo $ligne['img'] ?>" class="users-mg"></li>
                                        <li><a href="php/deconnexionE.php">Deconnexion</a></li>

                                
                                </ul>
                        </div>
                </nav>


                <div class="container">

                       <div class="menu-gauche">
                                <div class="imp-lien">
                                        <a href="#">Entrainement</a>
                                        <a href="#">Cours de code</a>
                                </div>
                                        
                                   
                       </div>

                        <div class="menu-mid">
                                <h1 class="acc">Bienvenue sur AutoCode</h1>

                        </div>
                        
                        <div class="menu-droite">
                                <h1>Planning</h1>
                        </div>

                </div>
        </body>
</html>

