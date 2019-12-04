<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- libraries -->
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">
    <script src="./libraries/js/bootstrap.min.js"></script>
    <script src="./libraries/jquery-3.4.1.min.js"></script>


    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Admin | ESM</title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="auth.php">
            <div class="authLogo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png"
                    alt="singtelLogo.png">
            </div>
        </a>
        <span class="navbar-text ml-auto">
            Exchange Space Management
        </span>
    </nav> -->
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
        header('Location: admin.php');
    ?>
        

    <?php } else { ?>

    <!-- display when planner is not logged in -->

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 authForm">
                <form action="authVerification.php" method="POST" id="authForm">
                    <div class="loginLogo">
                    <img src="./assets/singtelLogo.png">
                    </div>
                    <h2><b>Login</b></h2>
                    <h4>Exchange Space Management Portal (Admin)</h4>
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
    <?php }
?>

</body>

</html>