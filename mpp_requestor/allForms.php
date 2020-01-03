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
    <link rel="stylesheet" href="form1.css">
    <script src="./libraries/faKit.js"></script>

    <title>Requestor | MPP</title>
</head>

<body>

    <!-- START: navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img src="./assets/singtelLogo.png">
            </div>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="guide.php">Guide</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto ">
                Master Planner Portal
            </span>
        </div>
    </nav>
    <!-- END: navbar -->


    <div class="container-fluid">

        <!-- START: title and subtitle -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="centerAlign topSpaceLarge">Request Type</h1>
                <h5 class="centerAlign x0">All the forms you need to request for resources</h5>
            </div>
        </div>
        <!-- END: title and subtitle -->


        <!-- START: request cards -->
        <div class="row">
            <!-- START: space request card -->
            <div class="col-lg-4 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>Space</b></h4>
                        <p class="">For new spaces</p>
                        <a href="spaceForm.php"><button class="selectorButtonFullWidth">Space Form</button></a>
                    </div>
                </div>
            </div>
            <!-- END: space request card -->


            <!-- START: power request card -->
            <div class="col-lg-4 col-sm-6">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>Power</b></h4>
                        <p class="">For additional power</p>
                        <a href="powerForm.php"><button class="selectorButtonFullWidth">Power Form</button></a>
                    </div>
                </div>
            </div>
            <!-- END: power request card -->


            <!-- START: others request card -->
            <div class="col-lg-4 col-sm-12">
                <div class="boundingBox2">
                    <div class="mlSmall mrSmall mbSmall">
                        <h4><b>Others</b></h4>
                        <p class="">For Cable Tray, SSU, FDF, Others</p>

                        <div class="dropdown">
                            <button class="btn dropdown-toggle selectorButtonFullWidth" type="button"
                                data-toggle="dropdown">More
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <div class="row">
                                    <div class='col-lg-12'>
                                        <a href="fdfForm.php"><button class="selectorButtonFullWidth">FDF
                                                Form</button></a>

                                    </div>

                                    <div class='col-lg-12'>
                                        <a href="ssuForm.php"><button class="selectorButtonFullWidth">SSU
                                                Form</button></a>
                                    </div>

                                    <div class='col-lg-12'>
                                        <a href="cableTrayForm.php"><button class="selectorButtonFullWidth">Cable Tray
                                                Form</button></a>
                                    </div>

                                    <div class='col-lg-12'>
                                        <a href="generalForm.php"><button
                                                class="selectorButtonFullWidth">General Form</button></a>
                                    </div>
                                </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: others request card -->
        </div>
        <!-- END: request cards -->



        <!-- START: server image -->
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <img src="./assets/server.svg" id="serverImg">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <!-- END: server image -->

    </div>
    <br>
    <br>
    <br>
    <br>


</body>
<footer>

    <div class='container-fluid'>

        <div class='row'>

            <div class='col-lg-4 col-xs-4'>
                <div class='centerAlign'><span>
                        Made with <i class="fa fa-heart pulse"></i> by Chester Yee</a>
                    </span>
                </div>
            </div>

            <div class='col-lg-4 col-xs-4'>
                <div class='centerAlign'>&copy 2019 Singtel (Fixed Network Strategy and Evolution)
                </div>
            </div>

            <div class='col-lg-4 col-xs-4'>
                <div class='centerAlign'>v4.0 release (Beta)</div>
            </div>
        </div>

    </div>


</footer>


</html>
