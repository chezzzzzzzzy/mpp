<?php
session_start();

// check to see if planner is logged in 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    // if planner is logged in, redirect to admin page
    header('Location: admin.php');
} else { ?>

<!-- if planner is not logged in, show login page  -->
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 authForm">
            <form action="authVerification.php" method="POST" id="authForm">
                <div class="loginLogo">
                    <img src="./assets/singtelLogo.png">
                </div>
                <br>
                <h2><b>Master Planner Portal</b></h2>
                <h5>Planner Dashboard</h5>
                <br>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <br>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <br>
                <button type="submit" class="btn btn-primary boxButton">Login</button>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- libraries -->
    <script src="./libraries/jquery-3.4.1.min.js"></script>
    <script src="./libraries/jquery.validate.js"></script>
    <script src="./libraries/popper.min.js"></script>
    <script src="./libraries/js/bootstrap.min.js"></script>
    <script src="./libraries/additional-methods.js"></script>
    <script src="./libraries/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libraries/bootstrap-datepicker.css">

    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Planner | MPP</title>
</head>

</html>