<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- libraries -->
    <script src="./libraries/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">
    <script src="./libraries/js/bootstrap.min.js"></script>
    <script src="./libraries/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="./libraries/bootstrap-datepicker.css">
    <script src="./libraries/jquery.validate.js"></script>
    <script src="./libraries/additional-methods.js"></script>


    <style>

    </style>

    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="form1.css">
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
                <li class="nav-item ">
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="guide.php">Guide</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto">
                Master Planner Portal
            </span>
        </div>
    </nav>
    <!-- END: navbar -->


    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">

                <!-- START: title and subtitle -->
                <h1 class=" topSpaceLarge">Onboarding</h1>
                <h5 class=" x0">Guides as to how you should use the app</h5>
                <!-- END: title and subtitle -->


                <div class="row">
                    <div class="col-lg-6">

                        <div id="accordion">

                            <!-- START: guide 1 -->
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Creating a request
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <h6>Select your request type at the landing page
                                            The list of request types are as follows:
                                            <br>
                                            <br>
                                            Space (For new spaces)
                                            <br>
                                            Power (For additional power)
                                            <br>
                                            FDF
                                            <br>
                                            SSU
                                            <br>
                                            Cable Tray
                                            <br>
                                            General
                                        </h6>
                                        <br>
                                        <h6>After selecting the request type, you will be directed to the request
                                            form.
                                            You will then be required to input your personal information into the
                                            form
                                            before
                                            you can continue to the next step.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <!-- END: guide 1 -->

                            <!-- START: guide 2 -->
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                        Checking status of a request
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <h6>
                                            Upon submission of your request, you will receive an email that entails your
                                            input
                                            that
                                            you have requested for earlier
                                            <br>
                                            <br>
                                            You can easily check the status of your request by going to the Status tab
                                            on
                                            the
                                            navigation bar and you will be directed to the Status page
                                            <br>
                                            <br>
                                            You can input your Request ID that was sent to your Singtel email to check
                                            follow up
                                            on
                                            the request itself
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <!-- END: guide 2 -->

                            <!-- START: guide 3 -->
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                        Status Descriptors
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <h6>
                                            Submitted: This will be the default status as soon as you submit your
                                            Request
                                            <br>
                                            <br>
                                            Acknowledged: Planner has received your Request
                                            <br>
                                            <br>
                                            Assigned: Planner has added relevant information for Requestor to take
                                            action
                                            <br>
                                            <br>
                                            Installation in Progress: Requestor should be in the process of installing
                                            their equipments and upload images when done
                                            <br>
                                            <br>
                                            Completed: Installation of equipment is completed and waiting for Planner to
                                            close request
                                            <br>
                                            <br>
                                            Closed: Request is closed and archived
                                            <br>
                                            <br>
                                            Declined: There is some discrepancy in the Request
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <!-- END: guide 3 -->


                            <!-- START: guide 4 -->
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Uploading of Images
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">



                                        <div class="modal-body">

                                            <h5><b>Guidelines</b></h5>

                                            <h6>Please kindly adhere to the following guidelines in order
                                                for us to verify
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
                                                    <p>Image must show the door of the rack</p>
                                                    <br>
                                                    <img src="./assets/rackFront.jpg" class="imageGuidelines">
                                                </div>
                                                <div class="col-lg-3">
                                                    <h6>Rack Floor</h6>
                                                    <p>Image must show that perforated floor board <br>
                                                        (For PCM 2 only)
                                                    </p>
                                                    <img src="./assets/rackFloor.jpg" class="imageGuidelines">
                                                </div>
                                                <div class="col-lg-3">
                                                    <h6>Rack Back</h6>
                                                    <p>Image must show the door of the rack</p>
                                                    <br>
                                                    <img src="./assets/rackBack.jpg" class="imageGuidelines">
                                                </div>

                                                <br>
                                                <br>
                                            </div>

                                            <br>


                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h5><b>Breakers</b></h5>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- <h5><b>Feed A/B</b></h5> -->
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h6>Feed A Breaker</h6>
                                                    <p>Image must show name of breaker labelled</p>
                                                    <img src="./assets/breaker.jpg" class="imageGuidelines">
                                                </div>
                                                <div class="col-lg-3">
                                                    <h6>Feed A Breaker Label</h6>
                                                    <p>Image for Feed A/B to be uploaded </p>
                                                    <img src="./assets/breaker2.jpg" class="imageGuidelines">
                                                </div>
                                                <div class="col-lg-3">
                                                    <h6>Feed B Breaker</h6>
                                                    <p>Image must show name of breaker labelled</p>
                                                    <img src="./assets/breaker.jpg" class="imageGuidelines">
                                                </div>
                                                <div class="col-lg-3">
                                                    <h6>Feed B Breaker Label</h6>
                                                    <p>Image for Feed A/B to be uploaded </p>
                                                    <img src="./assets/breaker2.jpg" class="imageGuidelines">
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
                            <!-- END: guide 4 -->



                            <!-- START: guide 5 -->
                            <!-- <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        x
                                    </button>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    <h6>
                                        x
                                    </h6>
                                    </div>
                                </div>
                            </div> -->
                            <!-- END: guide 5 -->



                            <!-- <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        x
                                    </button>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    <h6>
                                        x
                                    </h6>
                                    </div>
                                </div>
                            </div> -->


                            <br>
                            <br>

                            <!-- START: download guide in pdf format -->
                            <a href="assets/Master Planner Portal.pdf" class="btn statusCheckButton"
                                download="masterPlannerPortal">Download</a>
                            <!-- END: download guide in pdf format -->


                        </div>


                    </div>


                    <!-- START: guide image -->
                    <div class="col-lg-6">
                        <img src="assets/guide.svg" class="guideImg">
                    </div>
                    <!-- END: guide image -->



                </div>



            </div>

        </div>

    </div>
    <br>
    <br>
    <br>
    <br>




    </div>


</body>


</html>