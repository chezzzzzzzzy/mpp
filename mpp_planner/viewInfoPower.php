<?php
    require 'database.php';
    $id = null;
    if ( !empty(strval($_GET['id']))) {
        $id = strval($_REQUEST['id']);
    }
     
    if ( null==$id ) {
        header("Location: powerRequests.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM powerRequests where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>

<script src="./libraries/faKit.js"></script>


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

    <style>

    </style>



    <title>Planner | MPP</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">All Requests</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="spaceRequests.php">Space</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="powerRequests.php">Power</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ssuRequests.php">SSU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fdfRequests.php">FDF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cableTrayRequests.php">Cable Tray</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="generalRequests.php">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mmrRequests.php">MMR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="accessRequests.php">Access</a>
                </li>

            </ul>
            <span class="navbar-text">
                <!-- <button type="button" class="btn btn-primary btn-sm" onclick="logoutPressed()">Logout</button> -->
                <a href="terminate.php">Logout</a>
            </span>
        </div>
    </nav>

    <div class="container-fluid fluid2">

        <h1>View Request</h1>



        <div class="row">



            <div class="col-lg-12">

                <div class="infoBoundingBox">

                    <div class="form-horizontal">
                        <div class="control-group">


                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="startDate">Request ID</label>
                                    <h5><b><?php echo $data['id'];?></b></h5>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-lg-2">
                                    <label for="startDate">Requestor Name</label>
                                    <h5><b><?php echo $data['requestorName'];?></b></h5>
                                </div>
                                <div class="col-lg-2">
                                    <label for="startDate">Requestor Email</label>
                                    <h5><b><?php echo $data['requestorEmail'];?></b></h5>
                                </div>
                                <div class="col-lg-2">
                                    <label for="startDate">Requestor Department</label>
                                    <h5><b><?php echo $data['requestorDepartment'];?></b></h5>
                                </div>
                                <div class="col-lg-2">
                                    <label for="startDate">Requestor Reason</label>
                                    <h5><b><?php echo $data['requestorReason'];?></b></h5>
                                </div>


                            </div>


                            <br>



                            <div class="row">
                                <div class="col-lg-2">
                                    <label for="startDate">Exchange</label>
                                    <h5><b><?php echo $data['exchange'];?></b></h5>
                                </div>
                                <div class="col-lg-2">
                                    <label for="startDate">Room</label>
                                    <h5><b><?php echo $data['room'];?></b></h5>
                                </div>
                            </div>

                            <br>


                            <div class="row">
                                <div class="col-lg-2">
                                    <label for="startDate">Installation Date (Start)</label>
                                    <h5><b><?php echo $data['startDate'];?></b></h5>
                                </div>
                                <div class="col-lg-2">
                                    <label for="startDate">Completion Date (End)</label>
                                    <h5><b><?php echo $data['endDate'];?></b></h5>
                                </div>
                            </div>

                            <br>



                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="startDate">Layout Plan</label>

                                    <?php if ($data['adminFileUpload'] == NULL) {
                                       echo "<br><b>Not uploaded / No entries found</b>";         
                                    } else {
                                        echo "<img src='uploads/".$data['adminFileUpload']."' >";

                                    }?>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>


                <?php 

if ($data['breakerSize1'] != NULL) {

    ?>



                <div class="row">
                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 1</b></h4>
                                            <h6 class="mlSmall">Specifications</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Rack Location</b></h6>
                                    <h5><b><?php echo $data['rackLocation1'];?></b></h5>
                                </div>

                                <br>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 1</b></h4>
                                            <h6 class="mlSmall">Breaker</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Name</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                                            if ($data['breakerName1FeedA1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName1FeedA1'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                                            if ($data['breakerName1FeedB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName1FeedB1'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                                            if ($data['breakerName1FeedA2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName1FeedA2'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                                            if ($data['breakerName1FeedB2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName1FeedB2'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Size</b></h6>
                                            <h5><b><?php echo $data['breakerSize1'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Quantity</b></h6>
                                            <h5><b><?php echo $data['breakerQuantity1'] . " pair/s";?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-bolt fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 1</b></h4>
                                            <h6 class="mlSmall">Power</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Sub PDU</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                                            if ($data['subPdu1FeedA1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu1FeedA1'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                                            if ($data['subPdu1FeedB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu1FeedB1'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                                            if ($data['subPdu1FeedA2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu1FeedA2'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                                            if ($data['subPdu1FeedB2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu1FeedB2'] . "</b></h6>";
                                            } else {
                                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                            }; ?></h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Consumption</b></h6>
                                            <h5><b><?php echo $data['powerConsumption1'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Type</b></h6>
                                            <h5><b><?php echo $data['powerType'];?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
                        
                    }



                    if ($data['breakerSize2'] != NULL) {

                    ?>



                <div class="row">
                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 2</b></h4>
                                            <h6 class="mlSmall">Specifications</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Rack Location</b></h6>
                                    <h5><b><?php echo $data['rackLocation2'];?></b></h5>
                                </div>

                                <br>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 2</b></h4>
                                            <h6 class="mlSmall">Breaker</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Name</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                        if ($data['breakerName2FeedA1'] != NULL) {
                        echo "<h6 class='valueEmphasis'><b>" . $data['breakerName2FeedA1'] . "</b></h6>";
                        } else {
                        echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                        }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['breakerName2FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName2FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['breakerName2FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName2FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                                if ($data['breakerName2FeedB2'] != NULL) {
                                echo "<h6 class='valueEmphasis'><b>" . $data['breakerName2FeedB2'] . "</b></h6>";
                                } else {
                                echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                                }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Size</b></h6>
                                            <h5><b><?php echo $data['breakerSize2'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Quantity</b></h6>
                                            <h5><b><?php echo $data['breakerQuantity2'] . " pair/s";?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-bolt fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 2</b></h4>
                                            <h6 class="mlSmall">Power</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Sub PDU</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu2FeedA1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu2FeedA1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu2FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu2FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu2FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu2FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu2FeedB2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu2FeedB2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Consumption</b></h6>
                                            <h5><b><?php echo $data['powerConsumption2'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Type</b></h6>
                                            <h5><b><?php echo $data['powerType'];?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
                        
                    }




                    if ($data['breakerSize3'] != NULL) {

                    ?>



                <div class="row">


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 3</b></h4>
                                            <h6 class="mlSmall">Specifications</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Rack Location</b></h6>
                                    <h5><b><?php echo $data['rackLocation3'];?></b></h5>
                                </div>

                                <br>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 3</b></h4>
                                            <h6 class="mlSmall">Breaker</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Name</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['breakerName3FeedA1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName3FeedA1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['breakerName3FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName3FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['breakerName3FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName3FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['breakerName3FeedB2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName3FeedB2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Size</b></h6>
                                            <h5><b><?php echo $data['breakerSize3'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Quantity</b></h6>
                                            <h5><b><?php echo $data['breakerQuantity3'] . " pair/s";?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-bolt fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 3</b></h4>
                                            <h6 class="mlSmall">Power</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Sub PDU</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu3FeedA1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu3FeedA1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu3FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu3FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu3FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu3FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu3FeedB2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu3FeedB2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Consumption</b></h6>
                                            <h5><b><?php echo $data['powerConsumption3'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Type</b></h6>
                                            <h5><b><?php echo $data['powerType'];?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php


                }

                if ($data['breakerSize4'] != NULL) {

                    ?>



                <div class="row">


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 4</b></h4>
                                            <h6 class="mlSmall">Specifications</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Rack Location</b></h6>
                                    <h5><b><?php echo $data['rackLocation4'];?></b></h5>
                                </div>

                                <br>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 4</b></h4>
                                            <h6 class="mlSmall">Breaker</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Name</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['breakerName4FeedA1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName4FeedA1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['breakerName4FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName4FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['breakerName4FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName4FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['breakerName4FeedB2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName4FeedB2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Size</b></h6>
                                            <h5><b><?php echo $data['breakerSize4'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Quantity</b></h6>
                                            <h5><b><?php echo $data['breakerQuantity4'] . " pair/s";?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-bolt fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 4</b></h4>
                                            <h6 class="mlSmall">Power</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Sub PDU</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu4FeedA1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu4FeedA1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu4FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu4FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu4FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu4FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu4FeedB2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu4FeedB2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Consumption</b></h6>
                                            <h5><b><?php echo $data['powerConsumption4'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Type</b></h6>
                                            <h5><b><?php echo $data['powerType'];?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
                    
                    
                }




                if ($data['breakerSize5'] != NULL) {

                    ?>



                <div class="row">


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 5</b></h4>
                                            <h6 class="mlSmall">Specifications</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Rack Location</b></h6>
                                    <h5><b><?php echo $data['rackLocation5'];?></b></h5>
                                </div>

                                <br>



                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 5</b></h4>
                                            <h6 class="mlSmall">Breaker</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Name</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['breakerName5FeedA1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName5FeedA1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['breakerName5FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName5FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['breakerName5FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName5FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['breakerName5FeedB2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['breakerName5FeedB2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Size</b></h6>
                                            <h5><b><?php echo $data['breakerSize5'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Quantity</b></h6>
                                            <h5><b><?php echo $data['breakerQuantity5'] . " pair/s";?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="boundingBox3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <i class="fal fa-bolt fa-3x mlSmall2 mtSmall"></i>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="mlSmall"><b>Rack 5</b></h4>
                                            <h6 class="mlSmall">Power</h6>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-lg-12 mlSmall">
                                    <h6><b>Sub PDU</b></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu5FeedA1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu5FeedA1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu5FeedB1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu5FeedB1'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed A
                                                <?php 
                            if ($data['subPdu5FeedA2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu5FeedA2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Feed B
                                                <?php 
                            if ($data['subPdu5FeedB2'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $data['subPdu5FeedB2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>NA</b></h6>";
                            }; ?>
                                            </h6>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Consumption</b></h6>
                                            <h5><b><?php echo $data['powerConsumption5'];?></b></h5>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6><b>Power Type</b></h6>
                                            <h5><b><?php echo $data['powerType'];?></b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
        
                        
                    }







                ?>





            </div>






        </div>







        <div class="form-actions">
            <a class="btn" href="powerRequests.php">Back</a>
        </div>





    </div>



    </div> <!-- /container -->
</body>

</html>