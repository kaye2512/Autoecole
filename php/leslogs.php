<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("location:connect.php");
    }
$id = mysqli_connect("127.0.0.1","root","","AutoCode");
mysqli_query($id,"SET NAMES 'utf8'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="autoecole.css">

</head>
<center>
<h1>Journal des logs</h1>

<table>
       <tr><th> ID </th><th> LOGIN </th><th> DATEDEBUT</th><th> DATEFIN</th></tr>
    <?php
    $requete = "select * from logs";
    $reponse = mysqli_query($id, $requete);
    while($ligne = mysqli_fetch_assoc($reponse))
    {
    echo "<tr><td>".$ligne["ide"]."</td><td>"
        .$ligne["Login"]."</td><td>"
        .$ligne["DateDebut"]."</td><td>"
        .$ligne["DateFin"]."</td></tr>";
    }

    ?>
    </table>
    <a href=Deconnexion.php>Deconnexion</a>
    
</center>
<body>
    
</body>
</html>