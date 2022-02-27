<?php
session_start();
echo"<h1>Deconnexion en cours....</h1>";
session_destroy();
header("refresh:2;url=../connexion.php");
?>