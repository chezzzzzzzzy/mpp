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



    <title>Requestor | MPP</title>

</head>


<body>

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
                <li class="nav-item">
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="status.php">Status</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="guide.php">Guide</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto">
                Master Planner Portal
            </span>
        </div>
    </nav>




    <div class="container-fluid">



        <div class="row">
            <div class="col-lg-9">
                <h1 class=" topSpaceLarge">Status Check</h1>
                <h5 class=" x0">Enter the Request ID that you have received upon your the submission of your request
                </h5>
            </div>
            <div class="col-lg-3 col-xs-3 support">
                <h6 class=" topSpaceLarge"><b>Support</b></h6>
                <br>
                <button class="btn helperButton" data-toggle="modal" data-target="#largeModal"> Image Guidelines
                </button>
            </div>


        </div>





        <form action="" method="POST" id="form1">
            <div class="row">

                <div class="col-lg-6 col-xs-12">
                    <input type="text" class="form-control" id="ticketNumber" placeholder="Enter Request ID"
                        name="ticketNumber" method="post">
                </div>

                <div class="col-lg-3 col-xs-12">
                    <button type="submit" class="btn statusCheckButton" method="post" name='reqId'
                        onclick="submitForm('status.php')" value="submit">Check</button>
                </div>
            </div>


        </form>


        <div id="largeModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title"><b>Uploading of Images</b></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">

                        <h5><b>Guidelines</b></h5>

                        <h6>Please kindly adhere to the following guidelines in order for us to verify
                            your
                            installation:</h6>
                        <ul>
                            <li>Images must be well exposed, sharp and clear</li>
                            <li>Images must cover the entire rack itself</li>
                        </ul>
                        <br>

                        <h5><b>Rack</b></h5>


                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Rack Front</h6>
                                <img src="./assets/rackFront.jpg" class="imageGuidelines">
                            </div>
                            <div class="col-lg-3">
                                <h6>Rack Back</h6>
                                <img src="./assets/rackBack.jpg" class="imageGuidelines">
                            </div>
                            <div class="col-lg-3">
                                <h6>Rack Floor</h6>
                                <!-- <img src="./assets/rackBack.jpg" class="imageGuidelines"> -->
                            </div>
                            <br>
                            <br>
                        </div>

                        <br>



                        <div class="row">
                            <div class="col-lg-6">
                                <h5><b>Breaker</b></h5>

                            </div>

                            <div class="col-lg-6">
                                <h5><b>Sub PDU</b></h5>
                            </div>
                        </div>




                        <div class="row">

                            <div class="col-lg-3">
                                <h6>Breakers</h6>
                                <img src="./assets/breaker2.jpg" class="imageGuidelines">
                            </div>
                            <div class="col-lg-3">
                                <h6>Breaker Label</h6>
                                <img src="./assets/breaker.jpg" class="imageGuidelines">
                            </div>
                            <div class="col-lg-3">
                                <h6>Sub PDU</h6>
                                <img src="./assets/subPdu.jpg" class="imageGuidelines">
                            </div>
                            <div class="col-lg-3">

                            </div>

                            <br>
                            <br>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                    </div>
                </div>
            </div>
        </div>



        <form id="form1">
            <div class="row">
                <?php
                date_default_timezone_set('Asia/Singapore');
                error_reporting (E_ALL ^ E_NOTICE);

                require 'fdfFormStatus.php'; // fdfRequestStatus
                require 'ssuFormStatus.php'; // ssuRequestStatus
                require 'cableTrayFormStatus.php'; // cableTrayRequestStatus
                require 'powerFormStatus.php'; // powerRequestStatus
                require 'generalFormStatus.php'; // generalRequestStatus
                require 'spaceFormStatus.php'; // spaceRequestStatus

                
                ?>
            </div>
        </form>
    </div>


   


</body>




</html>