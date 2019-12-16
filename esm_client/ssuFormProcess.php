<?php
error_reporting(E_ERROR | E_PARSE);

$servername = "localhost";
$username = "root";
$password = "Wr5@dmin";
$dbname = "singtel_esm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

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
                    <a class="nav-link" href="#">Guide</a>
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
                <h1 class=" topSpaceLarge">Request Successful</h1>
                <h5 class=" x0">Your request has been submitted</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4 class=" x0">Here's your ticket number: <br></h4>
                <h2 class=" x0"><b>

                        <?php
                    $sql2 = "SELECT * FROM ssuRequests ORDER BY requestId DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql2);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo $row["requestId"];
                            echo "<br>";
                            echo "<br>";
                            
                            echo "<h5>Pleaese check your email (" . $row['requestorEmail'] . ") for more information</h5>";
                        }
                    } else {
                        echo "0 results";
                    }                
                ?>
                    </b></h2>

                <br>

                <h2 class=" x0"><b>Expected Acknowlegdment Date: 

                <?php

                    echo date('Y-m-d', strtotime(' + 3 days'));

                ?>


                </b></h2>


            </div>
        </div>




        <br>
        <br>



    </div>

</body>

</html>
                    