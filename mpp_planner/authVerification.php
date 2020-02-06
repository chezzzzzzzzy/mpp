<?php

// START: connect to database 
require('../filepath.php');
// END: connect to database 


session_start();



// START: check to see if email and password is filled
if (isset($_POST['email']) and isset($_POST['password'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // query users table
    $query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_connect_error($conn));
    $count = mysqli_num_rows($result);
    
    // START: check to see if planner's account is found in the users table
    if ($count == 1){
    
        // START: planner account exists
        header("Location: admin.php");
        $_SESSION['loggedin'] = true;
        // END: planner account exists


    } else {

        // START: planner account does not exixts
        header("Location: auth.php");
        // END: planner account does not exixts

    }
    // END: check to see if planner's account is found in the users table

}  
// END: check to see if email and password is filled
?>