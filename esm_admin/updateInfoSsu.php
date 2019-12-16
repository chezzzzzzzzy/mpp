<?php
require 'database.php';
error_reporting (E_ALL ^ E_NOTICE);


$id = null;
if (!empty($_GET['requestId'])) {
    $id = $_REQUEST['requestId'];
}

if (null == $id) {
    header("Location: ssuRequests.php");
}

if (!empty($_POST)) {
    // keep track validation errors
    $nameError = null;

    // keep track post values
    $name = strval($_POST['requestorName']);
    $dept = strval($_POST['requestorDepartment']);
    $email = strval($_POST['requestorEmail']);
    $requestStatus = strval($_POST['requestStatus']);

    $numberOfPorts = strval($_POST['numberOfPorts']);
    $transmissionType = strval($_POST['transmissionType']);
    $interfacingType = strval($_POST['interfacingType']);

    $completionDate = strval($_POST['completionDate']);
    $room = strval($_POST['room']);
    $exchange = strval($_POST['exchange']);

    $valid = true;
    // update data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE ssuRequests set requestorName = ?, requestorDepartment = ?, requestorEmail = ?, requestStatus = ?, numberOfPorts = ?, transmissionType = ?, interfacingType = ?, completionDate = ?, room = ? , exchange = ? WHERE requestId = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($name, $dept, $email, $requestStatus, $numberOfPorts, $transmissionType, $interfacingType, $completionDate, $room, $exchange, $id));

        Database::disconnect();
        header("Location: ssuRequests.php");
    }
} else {

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM ssuRequests where requestId = ?";

    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $name = $data['requestorName'];
    $dept = $data['requestorDepartment'];
    $email = $data['requestorEmail'];
    $requestStatus = $data['requestStatus'];

    $numberOfPorts = $data['numberOfPorts'];
    $transmissionType = $data['transmissionType'];
    $interfacingType = $data['interfacingType'];

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
                <li class="nav-item">
                    <a class="nav-link" href="spaceRequests.php">Space</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="powerRequests.php">Power</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ssuRequests.php">SSU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ssuRequests.php">FDF</a>
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




    <div class="container-fluid">

        <h1>Update Request</h1>

        <div class="row">

            <div class="col-lg-12 ">
                <div class="infoBoundingBox">
                    <form class="form-horizontal" enctype="multipart/form-data"
                        action="updateInfoSsu.php?requestId=<?php echo $id ?>" method="post">

                        <div class="form-group">
                            <label for="startDate">Requestor Name<span class="requiredField">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="requestorName" type="text" placeholder="requestorName"
                                    value="<?php echo !empty($name) ? $name : ''; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="startDate">Requestor Department<span class="requiredField">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="requestorDepartment" type="text"
                                    placeholder="requestorDepartment" value="<?php echo !empty($dept) ? $dept : ''; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="startDate">Requestor Email<span class="requiredField">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="requestorEmail" type="text"
                                    placeholder="requestorEmail" value="<?php echo !empty($email) ? $email : ''; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Request Status</label>
                            <div class="controls">
                                <input readonly class="form-control" name="requestStatus" type="text"
                                    placeholder="requestorStatus"
                                    value="<?php echo !empty($requestStatus) ? $requestStatus : ''; ?>">
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
                                <option value='Installation in Progress' id='inProgress'>Installation in Progress</option>
                                <option value='Completed' id='installed'>Completed</option>
                                <option value='Closed' id='installed'>Closed</option>
                            </select>



                        </div>


                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">Exchange</label>
                                    <div class="controls">
                                        <input class="form-control" name="exchange" type="text" placeholder="exchange"
                                            value="<?php echo !empty($exchange) ? $exchange : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="form-group">
                                    <label class="control-label">Room</label>
                                    <div class="controls">
                                        <input class="form-control" name="room" type="text" placeholder="room"
                                            value="<?php echo !empty($room) ? $room : ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Number of Ports</label>
                                    <div class="controls">
                                        <input class="form-control" name="numberOfPorts" type="text"
                                            placeholder="numberOfPorts"
                                            value="<?php echo !empty($numberOfPorts) ? $numberOfPorts : ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Transmission Type</label>
                                    <div class="controls">
                                        <input class="form-control" name="transmissionType" type="text"
                                            placeholder="transmissionType"
                                            value="<?php echo !empty($transmissionType) ? $transmissionType : ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Interfacing Type</label>
                                    <div class="controls">
                                        <input class="form-control" name="interfacingType" type="text"
                                            placeholder="interfacingType"
                                            value="<?php echo !empty($interfacingType) ? $interfacingType : ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                
                        <br>


                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn selectorButton3"
                                style="float: right;">Update</button>
                            <a class="btn" style="float: left;" href="ssuRequests.php">Back</a>
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