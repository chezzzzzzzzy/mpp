<?php
    require 'database.php';
    $id = null;
    if ( !empty(strval($_GET['id']))) {
        $id = strval($_REQUEST['id']);
    }
     
    if ( null==$id ) {
        header("Location: cableTrayRequests.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM cableTrayRequests where id = ?";
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



    <title>Admin | ESM</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="fdfRequests.php">FDF</a>
                </li>
                <li class="nav-item active">
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
                                    <label for="startDate">Request ID<span class="requiredField">*</span></label>
                                    <h5><b><?php echo $data['id'];?></b></h5>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="startDate">Requestor Name<span class="requiredField">*</span></label>
                                    <h5><b><?php echo $data['requestorName'];?></b></h5>

                                </div>
                                <div class="col-lg-3">
                                    <label for="startDate">Requestor Email<span class="requiredField">*</span></label>
                                    <h5><b><?php echo $data['requestorEmail'];?></b></h5>
                                </div>
                                <div class="col-lg-3">
                                    <label for="startDate">Requestor Reason<span class="requiredField">*</span></label>
                                    <h5><b><?php echo $data['requestorReason'];?></b></h5>
                                </div>


                            </div>


                            <br>



                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="startDate">Exchange<span class="requiredField">*</span></label>
                                    <h5><b><?php echo $data['exchange'];?></b></h5>

                                </div>
                                <div class="col-lg-3">
                                    <label for="startDate">Room<span class="requiredField">*</span></label>
                                    <h5><b>PCM <?php echo$data['room'];?></b></h5>

                                </div>
                            </div>
                            <br>


                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="startDate">Completion Date<span class="requiredField">*</span></label>
                                    <h5><b><?php echo $data['completionDate'];?></b></h5>

                                </div>
                              
                            </div>
                            <br>




                        </div>




                    </div>
                </div>


                <div class="infoBoundingBox">


                    <div class="row">
                        <div class="col-lg-2">
                            <label for="startDate">Rack Location<span class="requiredField">*</span></label>
                            <h5><b><?php echo $data['rackLocation'];?></b></h5>
                        </div>
                        <div class="col-lg-2">
                            <label for="startDate">FDF Rack Locationpe<span class="requiredField">*</span></label>
                            <h5><b><?php echo $data['fdfRackLocation'];?></b></h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-actions">
                <a class="btn" href="cableTrayRequests.php">Back</a>
            </div>

        </div>



    </div>



    </div> <!-- /container -->
</body>

</html>