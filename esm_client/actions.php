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
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="requestForm.php">Request<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="actions.php">Actions</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto">
                Exchange Space Management
            </span>
        </div>
    </nav>


    <div class="container">

        <h1>Follow Up</h1>

        <br>
        <br>


        <div class="row">

            <div class="col-lg-2">
            <h5>Ticket Number</h5>
            <h2>11</h2>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-8">

                <div class="row">
                    <div class="col-lg-4">
                        <h5>Rack Size (Breadth)</h5>
                        <h2>11</h2>
                        <h2><?php echo $rackSizeBreadth; ?></h2>
                    </div>
                    <div class="col-lg-2"></div>

                    <div class="col-lg-4">
                        <h5>Rack Size (Length)</h5>
                        <h2>11</h2>
                        <h2><?php echo $rackSizeLength; ?></h2>
                    </div>
                </div>


                <div class="row topSpaceLow">

                    <div class="col-lg-4">
                        <h5>Breaker Size</h5>
                        <h2>11</h2>
                        <h2><?php echo $breakerSize; ?></h2>
                    </div>

                    <div class="col-lg-2"></div>

                    <div class="col-lg-4">
                        <h5>Breaker Quantity</h5>
                        <h2>11</h2>
                        <h2><?php echo $breakerQuantity; ?></h2>
                    </div>
                </div>
                

                <h5 class="topSpaceLow">PDB Feeds</h5>
                <h2>11</h2>
                <h2><?php echo $pdbFeeds; ?></h2>
                
                <h5 class="topSpaceLow">Location</h5>
                <h2>11</h2>
                <h2><?php echo $location; ?></h2>

                <h5 class="topSpaceLow">Room</h5>
                <h2>11</h2>
                <h2><?php echo $room; ?></h2>


                <form>
                <div class="form-group">
                    <h5 class="topSpaceLow">Image Upload</h5>

                    
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" onchange="readURL(this);">
                    <img id="blah">
                </div>
                </form>

                <button type="button" class="btn btn-primary btn-lg btn-block ordinalButton">Submit</button>   
            </div> 
        </div>
    </div>
</body>
</html>
