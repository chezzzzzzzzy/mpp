<?php

error_reporting(E_ERROR | E_PARSE);
require('connection.php');


$requestorName = $_POST['requestorName'];
$requestorEmail = $_POST['requestorEmail'];
$requestorDepartment = $_POST['requestorDepartment'];
$requestorReason = $_POST['requestorReason'];
$rackLocation = $_POST['rackLocation'];
$fdfRackLocation = $_POST['fdfRackLocation'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$room = $_POST['room'];
$exchange = $_POST['exchange'];


// Attempt insert query execution
$sql = "INSERT INTO cableTrayRequests (requestorName, requestorEmail, requestorDepartment, requestorReason, rackLocation, fdfRackLocation, startDate, endDate, room, exchange, requestStatus) 
        VALUES ('$requestorName','$requestorEmail', '$requestorDepartment', '$requestorReason', '$rackLocation', '$fdfRackLocation', '$startDate', '$endDate', '$room', '$exchange', 'Submitted')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    // fire email here

    $to = "chesteryeezx.17@ichat.sp.edu.sg, chester.yee@singtel.com";
   
    $sql2 = "SELECT * FROM cableTrayRequests ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $requestId = $row['id'];
            $rackLocation = $row['rackLocation'];
            $fdfRackLocation = $row['fdfRackLocation'];
            $startDate = $row['startDate'];
            $endDate = $row['endDate'];
            $room = $row['room'];
            $exchange = $row['exchange'];
            $subject =  $row["id"] . " — Request for Cable Tray ";
        }
    }                
            
    
    $message = "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>

    <!-- cdn -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'>
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'>
    </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
        integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'>
    </script>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js'></script>

    <script type='text/javascript' src='http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'>
    </script>
    <script type='text/javascript' src='http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js'>
    </script>


    <!-- dependencies -->
    <script type='text/javascript' src='index.js'></script>
    <link rel='stylesheet' href='main.css'>
    <!-- <link rel='stylesheet' href='form1.css'> -->

    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;


        }

        html {
            zoom: 80%;
            color: black;

        }



        .container-fluid {
            max-width: 80%;

        }

        .fluid2 {
            max-width: 80%;
        }


        body {
            background-color: rgb(249, 249, 252);

        }


        .logo img {
            width: 10%;
            padding-top: 20px;
            padding-bottom: 20px;
        }


        .heading {
            text-align: center;
            display: inline-block;
        }


        .authTitle h3 {
            /* text-align: center; */
            padding-top: 20px;
        }

        .authLogo img {
            max-width: 100px;
            margin-top: 5px;
            margin-bottom: 5px;

            margin-left: 10px;
        }

        .authForm {
            margin-top: 250px;
            /* background-color: rgb(247, 247, 247); */
            border: none;
            border-radius: 6px;
            padding-left: 80px;
            padding-right: 80px;
            padding-bottom: 50px;


        }

        .boundingBox2 {
            background-color: rgb(255, 255, 255);
            border-radius: 4px;
            padding-top: 20px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            box-shadow: 0 0 13px 0 rgba(82, 63, 105, .05);
            margin-top: 30px;


        }


        .statusBoundingBox {
            background-color: rgb(255, 255, 255);
            border-radius: 4px;
            padding-top: 20px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            box-shadow: 0 0 13px 0 rgba(82, 63, 105, .05);
            margin-top: 20px;
            min-height: 150px;


        }




        .warningBoundingBox {
            background-color: #da37450b;
            border-radius: 4px;
            padding-top: 20px;
            padding-bottom: 5px;
            padding-left: 5px;
            padding-right: 5px;
            margin-bottom: 10px;
            margin-top: 20px;
            color: #da3744;

            font-weight: bold;
        }




        .normalBoundingBox {
            background-color: rgba(29, 201, 183, .1);
            border-radius: 4px;
            padding-top: 20px;
            padding-bottom: 5px;
            padding-left: 5px;
            padding-right: 5px;
            margin-bottom: 10px;
            margin-top: 20px;
            color: #1dc9b7;

            font-weight: bold;
        }

        .infoBoundingBox {
            background-color: rgb(255, 255, 255);
            border-radius: 4px;
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 50px;
            padding-right: 50px;
            box-shadow: 0 0 13px 0 rgba(82, 63, 105, .05);
            margin-top: 50px;
            margin-bottom: 50px;



        }

        .tableBoundingBox {
            background-color: rgb(255, 255, 255);
            border-radius: 8px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            box-shadow: 0 0 13px 0 rgba(82, 63, 105, .05);
            margin-top: 30px;


        }

        .table thead tr th {
            border-top-width: 0px;
            border-bottom-width: 0px;
        }



        input {
            margin-bottom: 15px;
        }



        .selectorButtonFullWidth {
            border-radius: 6px;
            padding-top: 15px;
            padding-bottom: 15px;
            width: 100%;
            color: #ffffff;
            background-color: #da3744;
            font-weight: bold;
            border: #da3744 2px solid;

        }


        .mlSmall {
            margin-left: 20px;
        }

        .pdMed {
            padding-left: 20px;
        }

        .mrSmall {
            margin-right: 20px;
        }

        .mbSmall {
            margin-bottom: 20px;
        }

        .mlExtraSmall {
            margin-left: 15px;

        }



        footer {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 50px;
            width: 100%;
            overflow: hidden;
        }


        h1 {
            font-weight: bold;
            margin-top: 32px;
            margin-bottom: 50px;
        }



        .statusInfoKey {
            margin-bottom: -2px;
        }

        .statusInfoValue {
            font-size: 20px;
            font-weight: bold;
        }


        .form-control-file {
            color: black;
        }

        .requiredField {
            color: red;

        }


        .topSpace {
            margin-top: 50px;
        }


        .topSpaceLow {
            margin-top: 25px;
        }

        img {
            max-width: 100%;
        }


        

        .ordinalButton {
            background-color: transparent;
            font-weight: 500;
            border: #da3744 2px solid;
            width: 120px;
            border-radius: 500px;
            color: #da3744;
            float: right;
        }

        .ordinalButton:hover {
            background-color: #da3744;
            border: #da3744 2px solid;
            border-radius: 500px;

        }

        .ordinalButton:focus {
            background-color: white;
            border: #da3744 2px solid;
            color: #da3744;
        }



        .centerAlign {
            text-align: center;
        }


        .topSpaceMid {
            margin-top: 50px;
        }

        .topSpace {
            margin-top: 50px;
        }


        .topSpaceLow {
            margin-top: 25px;
        }

        .topSpaceLarge {
            margin-top: 150px;
        }

        .x1 {
            margin-top: -30px;
            margin-bottom: 50px;
        }

        .centerAlign2 {
            text-align: center;
            margin-left: 25px;
            margin-top: 10px;
            font-size: 14px;
        }


        .ordinalButton {
            /* background-color: black; */
            background-color: transparent;
            font-weight: 500;
            border: #da3744 2px solid;
            width: 120px;
            border-radius: 500px;
            color: #da3744;
        }

        .ordinalButton:hover {
            background-color: #da3744;
            border: #da3744 2px solid;
            border-radius: 500px;

        }

        .selectorButton {
            border-radius: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 180px;
            color: #da3744;
            font-weight: bold;
            border: #da3744 2px solid;

        }

        .selectorButton:hover {
            background-color: #da3744;
            border: #da3744 2px solid;
            border-radius: 500px;
            color: white;
        }

        .selectorButton a {
            color: #da3744;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: none;
            color: #da3744;
        }


    </style>
    <title>Requestor | MPP</title>

</head>

<body>


    <div class='container-fluid'>


        <div class='row'>

            <div class='col-lg-12'>
                <table cellspacing='0' width='100%'>
                    <tr>
                        <td width='100'>
                            <div>
                                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png'>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <br>
                <h2><b>Master Planner Portal</b></h2>
            </div>

            <div class='col-lg-12'>
                <h5 class='topSpaceMid'><b>Hello,</b></h5>
                <br>
                <h6>We have received your request.
                    Your Request ID is as follows:
                </h6>
                <br>
                <h3><b>" . $requestId . "</b></h3>
                <h6 class='topSpaceMid'>You have requested for the following:</h6>
                <br>
                


                <div class='row'>
                    <div class='col-lg-2'>
                        Rack Location
                        <br>
                        <h4><b>" . $rackLocation . "</b></h4>
                    </div>
                    <div class='col-lg-2'>
                        FDF Rack Location
                        <br>
                        <h4><b>" . $fdfRackLocation . "</b></h4>
                    </div>
                </div>

                <div class='row'>

                    <div class='col-lg-2'>
                        Exchange
                        <br>
                        <h4><b>" . $exchange . "</b></h4>
                    </div>
                    <div class='col-lg-2'>
                        Room
                        <br>
                        <h4><b>" . $room . "</b></h4>
                    </div>
                </div>

                <div class='row'>

                    <div class='col-lg-2'>
                        Installation Date (Start)
                        <br>
                        <h4><b>" . $startDate . "</b></h4>
                    </div>
                    <div class='col-lg-2'>
                        Completion Date (End)
                        <br>
                        <h4><b>" . $endDate . "</b></h4>
                    </div>
                </div>



                <h6 class='topSpaceMid'><b>Planner</b></h6>


            </div>

            <footer class='mbSmall'>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-lg-6 col-xs-6'>
                            <div class='mb-2'>mpp_admin@singtel.com</div>
                            &copy 2019 Singtel (Fixed Network Strategy and Evolution)
                        </div>
                    </div>
                </div>
            </footer>



        </div>
</body>

</html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <chester.yee@singtel.com>' . "\r\n";
    
    mail($to,$subject,$message,$headers);


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
                <h2 class=" x0"><b>

                        <?php
                    $sql2 = "SELECT * FROM cableTrayRequests ORDER BY id DESC LIMIT 1";
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