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
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

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



   




    <script type="text/javascript">
    function submitForm(action) {
        var form = document.getElementById('form1');
        form.action = action;
        form.submit();
    }



    // var buttonclicked = false;
    // $("#checkStatus").click(function() {
    //     if (buttonclicked = true) {
    //         // alert("Button is clicked for first time");
    //         <?php
    //             require 'connection.php';
    //             $temp = $_POST['ticketNumber'];
    //             $updateStatus = "UPDATE spaceRequests SET requestStatus = 'Completed' where requestID = '$temp'";
    //             echo $updateStatus;
    //             mysqli_query($conn, $updateStatus);
    //         ?>
    //     } else {}
    // });
    </script>


</body>


</html>