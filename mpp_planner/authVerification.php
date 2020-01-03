<?php

// connect to MySQL 
require('connection.php');
session_start();


// check to see if email and password is filled
if (isset($_POST['email']) and isset($_POST['password'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // query users table
    $query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_connect_error($conn));
    $count = mysqli_num_rows($result);
    
    // check to see if planner's account is found in the users table
    if ($count == 1){
    
        // planner account exists
        header("Location: admin.php");
        $_SESSION['loggedin'] = true;

    } else {

        // planner account does not exixts
        header("Location: auth.php");
    }
}  
?>