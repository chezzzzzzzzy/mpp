<?php
    $dbhost="localhost";  
    $dbuser="root"; 
    $dbpass="Wr5@dmin"; 
    $db="singtel_esm";
    
    $conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_connect_error($conn));
?>