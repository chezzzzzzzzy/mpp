<?php
 
$dbhost="localhost";  
$dbuser="root"; 
$dbpass="password"; 
$db="singtel_esm";
 
$conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );