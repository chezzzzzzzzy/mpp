<?php
    require '../filepath2.php';
    $id = null;
    if ( !empty(strval($_GET['id']))) {
        $id = strval($_REQUEST['id']);
    }
     
    if ( null==$id ) {
        header("Location: fdfRequests.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM fdfRequests where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
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
    <script src="./libraries/popper.min.js"></script>
    <script src="./libraries/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">

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
                <li class="nav-item">
                    <a class="nav-link" href="powerRequests.php">Power</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ssuRequests.php">SSU</a>
                </li>
                <li class="nav-item active">
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
                            <br>




                        </div>




                    </div>
                </div>


                <div class="infoBoundingBox">


                    <div class="row">
                        <div class="col-lg-2">
                            <label for="startDate">Number of Ports<span class="requiredField">*</span></label>
                            <h5><b><?php echo $data['numberOfPorts'];?></b></h5>
                        </div>
                        <div class="col-lg-2">
                            <label for="startDate">Number of Cable Ties<span class="requiredField">*</span></label>
                            <h5><b><?php echo $data['numberOfCableTies'];?></b></h5>
                        </div>
                    </div>


                </div>

            </div>


        </div>
        <div class="form-actions">
            <a class="btn" href="fdfRequests.php">Back</a>
        </div>




    </div>



    </div> <!-- /container -->
</body>

</html>