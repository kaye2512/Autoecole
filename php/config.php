<?php
   $bdd = mysqli_connect("localhost", "root", "", "autocode");
   if(!$bdd){
       echo "Database connected" . mysqli_connect_error();
   }
?>