<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: cableTrayRequests.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;

         
        // keep track post values
        $name = strval($_POST['requestorName']);
        $dept = strval($_POST['requestorDepartment']);
        $email = strval($_POST['requestorEmail']);
        $requestStatus = strval($_POST['requestStatus']);

        $rackLocation = strval($_POST['rackLocation']);
        $fdfRackLocation = strval($_POST['fdfRackLocation']);

        $completionDate = strval($_POST['completionDate']);
        $room = strval($_POST['room']);
        $exchange = strval($_POST['exchange']);


        
         
        // update data
        $valid = true;

        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE cableTrayRequests set requestorName = ?, requestorDepartment = ?, requestorEmail = ?, requestStatus = ?, rackLocation = ?, fdfRackLocation = ?, completionDate = ?, room = ? , exchange = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name, $dept, $email, $requestStatus, $rackLocation, $fdfRackLocation, $completionDate, $room, $exchange, $id));

            Database::disconnect();
            header("Location: cableTrayRequests.php");
        }
    } else {

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM cableTrayRequests where id = ?";

        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $name = $data['requestorName'];
        $dept = $data['requestorDepartment'];
        $email = $data['requestorEmail'];
        $requestStatus = $data['requestStatus'];

        $rackLocation = $data['rackLocation'];
        $fdfRackLocation = $data['fdfRackLocation'];

        $completionDate = $data['completionDate'];

        $exchange = $data['exchange'];
        $room = $data['room'];
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
    .container {
        margin-left: 30px;
        margin-right: auto;
    }



    @media screen and (max-width: 2560px) {
        .table {
            width: 180%;
        }
    }

    @media screen and (min-width: 2560px) {
        .table {
            width: 250%;
        }
    }

    @media screen and (min-width: 3000px) {
        .table {
            width: 280%;
        }
    }
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
                <li class="nav-item">
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




    <div class="container-fluid">

        <h1>Update Request</h1>

        <div class="row">

            <div class="col-lg-12 ">
                <div class="infoBoundingBox">
                    <form class="form-horizontal" enctype="multipart/form-data"
                        action="updateInfoCableTray.php?id=<?php echo $id?>" method="post">

                        <div class="form-group">
                            <label for="startDate">Requestor Name<span class="requiredField">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="requestorName" type="text" placeholder="requestorName"
                                    value="<?php echo !empty($name)?$name:'';?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="startDate">Requestor Department<span class="requiredField">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="requestorDepartment" type="text"
                                    placeholder="requestorDepartment" value="<?php echo !empty($dept)?$dept:'';?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="startDate">Requestor Email<span class="requiredField">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="requestorEmail" type="text"
                                    placeholder="requestorEmail" value="<?php echo !empty($email)?$email:'';?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Request Status</label>
                            <div class="controls">
                                <input readonly class="form-control" name="requestStatus" type="text"
                                    placeholder="requestorStatus"
                                    value="<?php echo !empty($requestStatus)?$requestStatus:'';?>">
                            </div>
                        </div>

                        <div class='form-group'>
                            <select id='inputState' class='form-control' name='requestStatus'>

                                <option value='<?php echo $requestStatus ?>'>
                                    <?php echo 'Current Status: ' . $requestStatus ?>
                                </option>
                                <option value='Submitted' id='submitted'>Submitted</option>
                                <option value='Acknowledged' id='acknowledged'>Acknowledged</option>
                                <option value='Assigned' id='assigned'>Assigned</option>
                                <option value='In Progress' id='inProgress'>In Progress</option>
                                <option value='Completed' id='installed'>Completed</option>
                                <option value='Closed' id='installed'>Closed</option>
                            </select>

                            <?php 

                            if ($row['requestStatus'] == "Submitted") {
                                echo "Please check your email for a your request submission";
                                $changeToAcknowledged = date('Y-m-d H:i:s');;
                                $sqlChangeToAcknowledged = "UPDATE spaceRequests
                                SET requestStatusAcknowledged = '$changeToAcknowledged' where requestID = '$temp'";
                                mysqli_query($conn, $sqlChangeToAcknowledged);
                            }

                            if ($row['requestStatus'] == "Acknowledged") {
                                echo "Your request has been received";
                                $changeToAssigned = date('Y-m-d H:i:s');;
                                $sqlChangeToAssigned= "UPDATE spaceRequests
                                SET requestStatusAssigned = '$changeToAssigned' where requestID = '$temp'";
                                mysqli_query($conn, $sqlChangeToAssigned);
                            }

                          

                            if ($row['requestStatus'] == "Assigned") {
                                echo "Your request has been updated with some other relevant information. <br> Please input the relevant information into the FNT DCIM App before you continue to the next step. <br><br>";
                                $updateStatus = "UPDATE spaceRequests
                                SET requestStatus = 'In Progress' where requestID = '$temp'";
                                mysqli_query($conn, $updateStatus);
                                echo "<input type='checkbox' id='toggle'/><span>I have entered all the relevant information into FNT DCIM App</span><br><br>";
                                echo "<input type='submit' name='sendNewSms' class='btn selectorButton2' id='sendNewSms' value='Proceed'/>";

                                $changeToInProgress = date('Y-m-d H:i:s');;
                                $sqlChangeToInProgress = "UPDATE spaceRequests
                                SET requestStatusInProgress = '$changeToInProgress' where requestID = '$temp'";
                                mysqli_query($conn, $sqlChangeToInProgress);
                            }



                            if ($row['requestStatus'] == "In Progress") {
                                echo "Please compress all your pictures into a folder before submitting it as a ZIP file.  <br><br>";
                                $updateStatus = "UPDATE spaceRequests
                                SET requestStatus = 'Completed' where requestID = '$temp'";
                                mysqli_query($conn, $updateStatus);

                                echo "<form>
                                <div class='form-group'>
                                <h4 class='topSpaceLow'><b>Image Upload</b></h4>
                                <input id='browse' type='file' accept='.jpeg,.png,.jpg' onchange='previewFiles()' multiple>
                                <div id='preview'></div>
                                </div>
                                </form>";
                                echo "<button type='submit' class='btn selectorButton2' method='post'>Submit</button>";

                                $changeToCompleted = date('Y-m-d H:i:s');;
                                $sqlChangeToCompleted = "UPDATE spaceRequests
                                SET requestStatusCompleted = '$changeToCompleted' where requestID = '$temp'";
                                mysqli_query($conn, $sqlChangeToCompleted);
                            }

                            if ($row['requestStatus'] == "Completed") {
                                echo "Your request has been completed<br><br>";
                                // $changeToClosed = date('Y-m-d H:i:s');
                                // $sqlChangeToClosed = "UPDATE spaceRequests
                                // SET requestStatusClosed = '$changeToClosed' where requestID = '$temp'";
                                // mysqli_query($conn, $sqlChangeToClosed);
                            }

                            if ($row['requestStatus'] == "Closed") {


                            }

                        ?>



                        </div>


                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">Exchange</label>
                                    <div class="controls">
                                        <input class="form-control" name="exchange" type="text" placeholder="exchange"
                                            value="<?php echo !empty($exchange)?$exchange:'';?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="form-group">
                                    <label class="control-label">Room</label>
                                    <div class="controls">
                                        <input class="form-control" name="room" type="text" placeholder="room"
                                            value="<?php echo !empty($room)?$room:'';?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Rack Location</label>
                                    <div class="controls">
                                        <input class="form-control" name="rackLocation" type="text"
                                            placeholder="rackLocation"
                                            value="<?php echo !empty($rackLocation)?$rackLocation:'';?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">FDF Rack Location</label>
                                    <div class="controls">
                                        <input class="form-control" name="fdfRackLocation" type="text"
                                            placeholder="fdfRackLocation"
                                            value="<?php echo !empty($fdfRackLocation)?$fdfRackLocation:'';?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Completion Date</label>
                                    <div class="controls">
                                        <input class="form-control" name="completionDate" type="text"
                                            placeholder="completionDate"
                                            value="<?php echo !empty($completionDate)?$completionDate:'';?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>


                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn selectorButton3"
                                style="float: right;">Update</button>
                            <a class="btn" style="float: left;" href="cableTrayRequests.php">Back</a>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </form>


                </div>
            </div>
        </div>
    </div>

</body>

</html>