<?php
$servername = "localhost";
$username = "root";
$password = "password";
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
$endDate = $_POST['endDate'];
$room = $_POST['room'];
$exchange = $_POST['exchange'];


// Attempt insert query execution
$sql = "INSERT INTO ssuRequests (requestorName, requestorEmail, requestorDepartment, requestorReason, numberOfPorts, transmissionType, interfacingType, endDate, room, exchange, requestStatus) 
        VALUES ('$requestorName', '$requestorEmail', '$requestorDepartment', '$requestorReason', $numberOfPorts, '$transmissionType', '$interfacingType', '$endDate', $room, '$exchange', 'Submitted')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
   } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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

    <title>User | ESM</title>
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
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>
         


            </ul>
            <span class="navbar-text ml-auto">
                Exchange Space Management
            </span>
        </div>
    </nav>


    <div class="container">

        <div class="row">

            <div class="col-lg-3"></div>

            <div class="col-lg-12">
                <h1 class="centerAlign topSpaceLarge">Request Successful</h1>
                <h5 class="centerAlign x1">Your request has been submitted</h5>
                <br>
                <br>
                <h4 class="centerAlign x1">Here's your ticket number: <br></h4>
                <h2 class="centerAlign x1"><b>XXX</b></h2>
                
                
            </div>
            <div class="col-lg-3"></div>


        </div>


        <br>
        <br>


       
    </div>

</body>

</html>
