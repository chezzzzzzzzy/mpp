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

    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <h1 class=" topSpaceLarge">Onboarding</h1>
                <h5 class=" x0">Guides as to how you should use the app</h5>


                <div class="row">
                    <div class="col-lg-6">

                        <div id="accordion">

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
                                            Space (For new spaces)
                                            Power (For additional power)
                                            FDF
                                            SSU
                                            Cable Tray
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


                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Inputting values
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    <h6>
                                        When you input the values into the fields, please do not add in any units
                                    </h6>
                                    </div>
                                </div>
                            </div>



                            <div class="card">
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
                            </div>


                            <div class="card">
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
                            </div>







                            <br>
                            <br>

                            <input type="button" value="Download PDF" href="" class="statusCheckButton" download>

                        </div>


                    </div>

                    <div class="col-lg-6">

                        <img src="assets/guide.svg" class="guideImg">
                    </div>




                </div>



            </div>

        </div>

    </div>
    <br>
    <br>
    <br>
    <br>


    <!--
        <form method="post" enctype='multipart/form-data'>
            <input type='file' name='file' />
            <input type='submit' value='Save name' name='but_upload'>
        </form> -->



    </div>


</body>


</html>
