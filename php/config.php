<?php
     $servername = "mysql-caramelange.alwaysdata.net"; 
     $DBusername = "295328"; 
     $DBpassword = "projetphp";
    
     $database = "caramelange_feur";
 
      // Create a connection 
      $bdd = mysqli_connect($servername, 
          $DBusername, $DBpassword, $database);
    
     if(!$bdd) {
         die("Error". mysqli_connect_error());  
     }
     else{
     echo "Connexion à la base de données réussie";
     }
?>