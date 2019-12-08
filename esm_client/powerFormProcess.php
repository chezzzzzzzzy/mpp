<?php
error_reporting(E_ERROR | E_PARSE);

// general
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "singtel_esm";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// get data from spaceForm.php
$requestorName = $_POST['requestorName'];
$requestorEmail = $_POST['requestorEmail'];
$requestorDepartment = $_POST['requestorDepartment'];
$requestorReason= $_POST['requestorReason'];
$powerType = $_POST['powerType'];
$exchange = $_POST['exchange'];
$room = $_POST['room'];



// get data from powerForm.php
$rackLocation1 = $_POST['rackLocation1'];
$rackLocation2 = $_POST['rackLocation2'];
$rackLocation3 = $_POST['rackLocation3'];
$rackLocation4 = $_POST['rackLocation4'];
$rackLocation5 = $_POST['rackLocation5'];

$breakerSize1 = $_POST['breakerSize1'];
$breakerSize2 = $_POST['breakerSize2'];
$breakerSize3 = $_POST['breakerSize3'];
$breakerSize4 = $_POST['breakerSize4'];
$breakerSize5 = $_POST['breakerSize5'];

$breakerQuantity1 = $_POST['breakerQuantity1'];
$breakerQuantity2 = $_POST['breakerQuantity2'];
$breakerQuantity3 = $_POST['breakerQuantity3'];
$breakerQuantity4 = $_POST['breakerQuantity4'];
$breakerQuantity5 = $_POST['breakerQuantity5'];

$powerConsumption1 = $_POST['powerConsumption1'];
$powerConsumption2 = $_POST['powerConsumption2'];
$powerConsumption3 = $_POST['powerConsumption3'];
$powerConsumption4 = $_POST['powerConsumption4'];
$powerConsumption5 = $_POST['powerConsumption5'];



// insert into table
$sql = "INSERT INTO powerRequests (requestorName, requestorEmail, requestorDepartment, requestorReason, powerType,  exchange, room,  requestStatus, rackLocation1, rackLocation2, rackLocation3, rackLocation4,rackLocation5, breakerSize1, breakerSize2, breakerSize3, breakerSize4, breakerSize5, breakerQuantity1, breakerQuantity2, breakerQuantity3, breakerQuantity4, breakerQuantity5, powerConsumption1, powerConsumption2, powerConsumption3, powerConsumption4, powerConsumption5) 
        VALUES ('$requestorName','$requestorEmail', '$requestorDepartment', '$requestorReason', '$powerType', '$exchange', '$room' , 'Submitted', '$rackLocation1', '$rackLocation2', '$rackLocation3','$rackLocation4', '$rackLocation5', '$breakerSize1', '$breakerSize2', '$breakerSize3', '$breakerSize4', '$breakerSize5', '$breakerQuantity1', '$breakerQuantity2','$breakerQuantity3', '$breakerQuantity4', '$breakerQuantity5', '$powerConsumption1', '$powerConsumption2', '$powerConsumption3', '$powerConsumption4', '$powerConsumption5')";


// insert into table
if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    // echo "<br>";
    // echo $sql;
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                    $sql2 = "SELECT * FROM powerRequests ORDER BY id DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql2);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo $row["id"];
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
