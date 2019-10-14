<?php 
    session_start();
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">


    <title>Admin | ESM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png" alt="singtelLogo.png">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">All Requests</a>
                </li>
              
                
            </ul>
            <span class="navbar-text">
                <!-- <button type="button" class="btn btn-primary btn-sm" onclick="logoutPressed()">Logout</button> -->
                <a href="terminate.php">Logout</a>

            </span>
        </div>
    </nav>


    <script>
        function logoutPressed() {
            <?php
                // header("Location: auth.php");
                // session_destroy();
                // $_SESSION['loggedin'] = false;
            ?>
        }
    </script>

    <?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // echo "Logged in already" . $_SESSION['email'];
    ?>     
    
    <div class="container">


<div class="row">

    <div class="col-lg-3"></div>

    <div class="col-lg-12">
        <h1 class="centerAlign topSpaceLarge">All Requests</h1>
        <h5 class="centerAlign x1">Submitted requests from users</h5>
    </div>
    <div class="col-lg-3"></div>


</div>


<div class="row">

    <div class="col-lg-2">
        <a href="spaceRequests.php"><button class="selectorButton">Space</button></a>
        <p class="centerAlign2">For new spaces</p>
    </div>

    <div class="col-lg-2">
        <a href="powerRequests.php"><button class="selectorButton">Power</button></a>
        <p class="centerAlign2">For additional power</p>
    </div>

    <div class="col-lg-2">
        <a href="ssuRequests.php"><button class="selectorButton">SSU</button></a>
        <p class="centerAlign2"></p>
    </div>

    <div class="col-lg-2">
        <a href="fdfRequests.php"><button class="selectorButton">FDF</button></a>
        <p class="centerAlign2"></p>
    </div>

    <div class="col-lg-2">
        <a href="cableTrayRequests.php"><button class="selectorButton">Cable Tray</button></a>
        <p class="centerAlign2"></p>
    </div>

    <div class="col-lg-2">
        <a href="generalRequests.php"><button class="selectorButton">Others</button></a>
        <p class="centerAlign2"></p>
    </div>


    <!-- <div class="col-lg-2">
        <a href="othersForm.php"><button class="selectorButton">Others</button></a>

        <div class="dropdown">
            <button class="btn dropdown-toggle selectorButton" type="button" data-toggle="dropdown">More
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <a href="fdfForm.php"><button class="selectorButton">FDF</button></a>
                <a href="ssuForm.php"><button class="selectorButton">SSU</button></a>
                <a href="cableTrayForm.php"><button class="selectorButton">Cable Tray</button></a>
                <a href="generalForm.php"><button class="selectorButton">Others</button></a>

              
            </ul>
        </div>
    </div> -->
    <div class="col-lg-3"></div>


</div>

<div class="row">
    <div class="col-lg-3"></div>

    <div class="col-lg-6">
        <!-- <img src="server2.svg" id="serverImg"> -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player 
    src="https://assets4.lottiefiles.com/datafiles/6WfDdm3ooQTEs1L/data.json" mode="bounce" background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay >
</lottie-player>


    </div>
    <div class="col-lg-3"></div>


</div>
</div>



    <?php } else {
        // echo "Please login.";
    }
    ?>

<br>
<br>
<br>
<footer class="centerAlign">&copy 2019 Singtel (Fixed Network Strategy and Evolution)</footer>

</body>

</html>

