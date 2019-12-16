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
    <script src="faKit.js"></script>

    <title>Planner | MPP</title>
</head>

<body>



    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>

    <!-- display when planner logged in -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img src="./assets/singtelLogo.png">


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
                <a href="terminate.php">Logout</a>
            </span>
        </div>
    </nav>

    <div class="container-fluid">

        <!-- title and subtitle -->
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-12">
                <h1 class="centerAlign topSpaceLarge">All Requests</h1>
                <h5 class="centerAlign x1">Submitted requests from requestors</h5>
            </div>
            <div class="col-lg-3"></div>
        </div>

        <!-- all types of requests -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>Space Requests</b></h4>
                        <p class="">For new spaces</p>
                        <a href="spaceRequests.php"><button class="selectorButtonFullWidth">Space Requests</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>Power Requests</b></h4>
                        <p class="">For additional power</p>
                        <a href="powerRequests.php"><button class="selectorButtonFullWidth">Power Requests</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>FDF Requests</b></h4>
                        <p class="">Fibre Distribution Frame</p>
                        <a href="fdfRequests.php"><button class="selectorButtonFullWidth">FDF Requests</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>SSU Requests</b></h4>
                        <p class="">Signal Synchronous Unit</p>
                        <a href="ssuRequests.php"><button class="selectorButtonFullWidth">SSU Requests</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>Cable Tray Requests</b></h4>
                        <p class="">Cable Tray</p>
                        <a href="cableTrayRequests.php"><button class="selectorButtonFullWidth">Cable Tray
                                Requests</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>General Requests</b></h4>
                        <p class="">General</p>
                        <a href="generalRequests.php"><button class="selectorButtonFullWidth">General
                                Requests</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>MMR Requests</b></h4>
                        <p class="">Meet-me Room </p>
                        <a href="generalRequests.php"><button class="selectorButtonFullWidth">MMR Requests</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>Access Requests</b></h4>
                        <p class="">Perimeter and room access </p>
                        <a hidden href="accessRequests.php"><button class="selectorButtonFullWidth">Access
                                Requests</button></a>
                    </div>
                </div>
            </div>
        </div>


        <?php } else {?>

        <!-- display when planner is not logged in -->

        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 authForm">
                    <form action="authVerification.php" method="POST" id="authForm">
                        <img src="./assets/singtelLogo.png" class="loginLogo">
                        <h2><b>Please Login First 🚨</b></h2>
                        <h4>Master Planner Portal (Admin)</h4>
                        <br>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                        </script>
                        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_yN8pO6.json"
                            background="transparent" speed="1" style="width: 600px; height: 500px;" autoplay
                            class="errorImage">
                        </lottie-player>
                    </form>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>

        <?php } ?>

        <br>
        <br>
        <br>

</body>

<footer>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-4 col-xs-4'>
                <div class='centerAlign'>
                    <span>Made with <i class="fa fa-heart pulse"></i> by Chester Yee</a></span>
                </div>
            </div>
            <div class='col-lg-4 col-xs-4'>
                <div class='centerAlign'>&copy 2019 Singtel (Fixed Network Strategy and Evolution)</div>
            </div>
            <div class='col-lg-4 col-xs-4'>
                <div class='centerAlign'>v3.0 release (Beta)</div>
            </div>
        </div>
    </div>
</footer>

</html>