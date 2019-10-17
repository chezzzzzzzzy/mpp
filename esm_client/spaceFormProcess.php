<?php
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
$level = $_POST['level'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$exchange = $_POST['exchange'];
$rackSizeLength = $_POST['rackSizeLength'];
$rackSizeBreadth = $_POST['rackSizeBreadth'];
$breakerSize = $_POST['breakerSize'];
$breakerQuantity = $_POST['breakerQuantity'];


// get data from spaceForm.php
$rackSizeLength1 = $_POST['rackSizeLength1'];
$rackSizeLength2 = $_POST['rackSizeLength2'];
$rackSizeLength3 = $_POST['rackSizeLength3'];
$rackSizeLength4 = $_POST['rackSizeLength4'];
$rackSizeLength5 = $_POST['rackSizeLength5'];


$rackSizeBreadth1 = $_POST['rackSizeBreadth1'];
$rackSizeBreadth2 = $_POST['rackSizeBreadth2'];
$rackSizeBreadth3 = $_POST['rackSizeBreadth3'];
$rackSizeBreadth4 = $_POST['rackSizeBreadth4'];
$rackSizeBreadth5 = $_POST['rackSizeBreadth5'];


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


// insert into table
$sql = "INSERT INTO spaceRequests (requestorName, requestorEmail, requestorDepartment, requestorReason, powerType, level, startDate, endDate, exchange, requestStatus, rackSizeLength_1, rackSizeLength_2, rackSizeLength_3, rackSizeLength_4,rackSizeLength_5, rackSizeBreadth_1, rackSizeBreadth_2, rackSizeBreadth_3, rackSizeBreadth_4, rackSizeBreadth_5, breakerSize_1, breakerSize_2, breakerSize_3, breakerSize_4, breakerSize_5, breakerQuantity_1, breakerQuantity_2, breakerQuantity_3, breakerQuantity_4, breakerQuantity_5 ) 
        VALUES ('$requestorName','$requestorEmail', '$requestorDepartment', '$requestorReason', '$powerType', $level, '$startDate', '$endDate', '$exchange', 'Submitted', '$rackSizeLength1', '$rackSizeLength2', '$rackSizeLength3','$rackSizeLength4', '$rackSizeLength5', '$rackSizeBreadth1', '$rackSizeBreadth2', '$rackSizeBreadth3', '$rackSizeBreadth4', '$rackSizeBreadth5', '$breakerSize1', '$breakerSize2', '$breakerSize3', '$breakerSize4', '$breakerSize5', '$breakerQuantity1', '$breakerQuantity2','$breakerQuantity3', '$breakerQuantity4', '$breakerQuantity5')";


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

    <title>User | ESM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png"
                    alt="singtelLogo.png">
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
                <h2 class="centerAlign x1"><b>

                        <?php
                    $sql2 = "SELECT * FROM spaceRequests ORDER BY id DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql2);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo $row["id"];
                        }
                    } else {
                        echo "0 results";
                    }                
                ?>
                    </b></h2>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                            <?php
                    $sql2 = "SELECT * FROM spaceRequests ORDER BY id DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql2);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo $row["id"];
                        }
                    } else {
                        echo "0 results";
                    }                
                ?>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <div class="col-lg-3"></div>


        </div>


        <br>
        <br>



    </div>

</body>

</html>