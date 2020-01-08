<?php
error_reporting(E_ERROR | E_PARSE);
require('../filepath.php');


$requestorName = $_POST['requestorName'];
$requestorEmail = $_POST['requestorEmail'];
$requestorDepartment = $_POST['requestorDepartment'];
$requestorReason = $_POST['requestorReason'];
$numberOfPorts = $_POST['numberOfPorts'];
$transmissionType = $_POST['transmissionType'];
$interfacingType = $_POST['interfacingType'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$room = $_POST['room'];
$exchange = $_POST['exchange'];


// Attempt insert query execution
$sql = "INSERT INTO ssuRequests (requestorName, requestorEmail, requestorDepartment, requestorReason, startDate, endDate, numberOfPorts, transmissionType, interfacingType, room, exchange, requestStatus) 
        VALUES ('$requestorName', '$requestorEmail', '$requestorDepartment', '$requestorReason', '$startDate', '$endDate', $numberOfPorts, '$transmissionType', '$interfacingType', '$room', '$exchange', 'Submitted')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";

    // START: fire email here

    // END: fire email here

    

   } else {
    // echo "Error: " . $sql . "<br>" . mysqli_connect_error($conn);
   }

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
    <script src="./libraries/jquery.easing.min.js"></script>
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


   <!-- START: navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
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
    <!-- END: navbar -->


    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <h1 class=" topSpaceLarge">Request Successful</h1>
                <h5 class=" x0">Your request has been submitted</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4 class=" x0">Here's your Request ID: <br></h4>
                <h2 class=" x0">
                    <b>
                        <?php
                            $sql2 = "SELECT * FROM ssuRequests ORDER BY requestId DESC LIMIT 1";
                            $result = mysqli_query($conn, $sql2);

                            // START: get last inserted requestId
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["requestId"];
                                    echo "<br>";
                                    echo "<br>";
                                    
                                    echo "<h5>Pleaese check your email (" . $row['requestorEmail'] . ") for more information</h5>";
                                }
                            // END: get last inserted requestId
                            } else {
                                echo "0 results";
                            }                
                        ?>
                    </b>
                </h2>

                <br>

                <h2 class=" x0">
                    <b>Expected Acknowlegdment Date: 
                        <?php
                            echo date('Y-m-d', strtotime(' + 3 days'));
                        ?>
                    </b>
                </h2>


            </div>
        </div>



        <br>
        <br>



    </div>

</body>

</html>
                    