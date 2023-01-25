<?php
     $servername = "mysql-caramelange.alwaysdata.net"; 
     $DBusername = "295328"; 
     $DBpassword = "projetphp";
    
     $database = "caramelange_feur";
 
      // Create a connection 
      $bdd = mysqli_connect($servername, 
          $DBusername, $DBpassword, $database);
?>