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

$breakerSize = $_POST[breakerSize];
$breakerQuantity = $_POST[breakerQuantity];
$pdbFeeds = $_POST[pdbFeeds];
$rackSizeLength = $_POST[rackSizeLength];
$rackSizeBreadth = $_POST[rackSizeBreadth];
$location = $_POST[location];
$room = $_POST[room];

// Attempt insert query execution
$sql = "INSERT INTO spaces (breaker_size, breaker_quantity, rack_size_breadth, rack_size_length, location, room, pdb_feeds, status) VALUES ($breakerSize,$breakerQuantity, $rackSizeBreadth, $rackSizeLength, '$location', '$room', $pdbFeeds, 'Submitted')";


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
                    <a class="nav-link" href="requestForm.php">Request<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>
         


            </ul>
            <span class="navbar-text">
                <!-- <button type="button" class="btn btn-primary btn-sm">Login/Logout</button> -->
            </span>
        </div>
    </nav>


    <div class="container">

        <h1>Request</h1>

        <p>Your request has been submitted. Please take note of your ticket number
            and we will get back to you soon.
        </p> 

        <br>
        <br>


        <div class="row">

            <div class="col-lg-2">
            <h5>Ticket Number</h5>
                <h2><?php 
                    if (mysqli_query($conn, $sql)) {
                            $last_id = mysqli_insert_id($conn);
                            echo $last_id;
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                ?></h2>

            </div>

            <div class="col-lg-1"></div>


            <div class="col-lg-8">

                <div class="row">

                    <div class="col-lg-4">
                        <h5>Rack Size (Breadth)</h5>
                        <h2><?php echo $rackSizeBreadth; ?></h2>
                    </div>
                    <div class="col-lg-2"></div>


                    <div class="col-lg-4">
                        <h5>Rack Size (Length)</h5>
                        <h2><?php echo $rackSizeLength; ?></h2>
                    </div>
                </div>


                <div class="row topSpaceLow">

                    <div class="col-lg-4">
                        <h5>Breaker Size</h5>
                        <h2><?php echo $breakerSize; ?></h2>
                    </div>
                    <div class="col-lg-2"></div>


                    <div class="col-lg-4">
                        <h5>Breaker Quantity</h5>
                        <h2><?php echo $breakerQuantity; ?></h2>
                    </div>
                </div>
                

                <h5 class="topSpaceLow">PDB Feeds</h5>
                <h2><?php echo $pdbFeeds; ?></h2>
                
                <h5 class="topSpaceLow">Location</h5>
                <h2><?php echo $location; ?></h2>

                <h5 class="topSpaceLow">Room</h5>
                <h2><?php echo $room; ?></h2>

                 
            </div>
        </div>
    </div>

</body>

</html>
