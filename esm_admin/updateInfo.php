<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['requestId'])) {
        $id = $_REQUEST['requestId'];
    }
     
    if ( null==$id ) {
        header("Location: spaceInfo.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;

         
        // keep track post values
        $name = strval($_POST['requestorName']);
        $email = strval($_POST['requestorEmail']);
        $requestStatus = strval($_POST['requestStatus']);

        $rackLocation1 = strval($_POST['rackLocation1']);
        $subPdu1 = strval($_POST['subPdu1']);
        $breakerName1 = strval($_POST['breakerName1']);


        $rackLocation2 = strval($_POST['rackLocation2']);
        $subPdu2 = strval($_POST['subPdu2']);
        $breakerName2= strval($_POST['breakerName1']);


        $rackLocation3 = strval($_POST['rackLocation3']);
        $subPdu3 = strval($_POST['subPdu3']);
        $breakerName3 = strval($_POST['breakerName3']);


        $rackLocation4 = strval($_POST['rackLocation4']);
        $subPdu4 = strval($_POST['subPdu4']);
        $breakerName4 = strval($_POST['breakerName4']);


        $rackLocation5 = strval($_POST['rackLocation5']);
        $subPdu5 = strval($_POST['subPdu5']);
        $breakerName5 = strval($_POST['breakerName5']);


        $exchange =  strval($_POST['exchange']);
        $room =  strval($_POST['room']);


         
        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
         
        
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE spaceRequests set requestorName = ?, requestorEmail = ?, requestStatus = ?, rackLocation1 = ?, subPdu1 = ? , breakerName1 = ?,  rackLocation2 = ? , subPdu2 = ? , breakerName2 = ?, rackLocation3 = ?, subPdu3 = ?, breakerName3 = ?, rackLocation4 = ?, subPdu4 = ?, breakerName4 = ? ,rackLocation5 = ?, subPdu5 = ? ,breakerName5 = ? ,exchange = ? , room = ? WHERE requestId = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name, $email, $requestStatus, $rackLocation1, $subPdu1, $breakerName1,  $rackLocation2, $subPdu2, $breakerName2, $rackLocation3, $subPdu3, $breakerName3, $rackLocation4, $subPdu4, $breakerName4, $rackLocation5, $subPdu5, $breakerName5, $exchange, $room, $id));

            Database::disconnect();
            header("Location: spaceInfo.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM spaceRequests where requestId = ?";

        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $name = $data['requestorName'];
        $email = $data['requestorEmail'];
        $requestStatus = $data['requestStatus'];

        $rackLocation1 = $data['rackLocation1'];
        $subPdu1 = $data['subPdu1'];
        $breakerName1 = $data['breakerName1'];

        
        $rackLocation2 = $data['rackLocation2'];
        $subPdu2 = $data['subPdu2'];
        $breakerName2 = $data['breakerName2'];


        $rackLocation3 = $data['rackLocation3'];
        $subPdu3 = $data['subPdu3'];
        $breakerName3 = $data['breakerName3'];


        $rackLocation4 = $data['rackLocation4'];
        $subPdu4 = $data['subPdu4'];
        $breakerName4 = $data['breakerName4'];


        $rackLocation5 = $data['rackLocation5'];
        $subPdu5 = $data['subPdu5'];
        $breakerName5 = $data['breakerName5'];

        $exchange = $data['exchange'];
        $room = $data['room'];


        $breakerSize1 = $data['breakerSize1'];
        $breakerSize2 = $data['breakerSize2'];
        $breakerSize3 = $data['breakerSize3'];
        $breakerSize4 = $data['breakerSize4'];
        $breakerSize5 = $data['breakerSize5'];



        
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
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">All Requests</a>
                </li>
                <li class="nav-item active">
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
                <li class="nav-item">
                    <a class="nav-link" href="cableTrayRequests.php">Cable Tray</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="generalRequests.php">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="externalVendorRequests.php">External Vendors</a>
                </li>

            </ul>
            <span class="navbar-text">
                <!-- <button type="button" class="btn btn-primary btn-sm" onclick="logoutPressed()">Logout</button> -->
                <a href="terminate.php">Logout</a>
            </span>
        </div>
    </nav>




    <div class="container">

        <h1>Update Request</h1>


        <div class="col-lg-12">

            <form class="form-horizontal" action="updateInfo.php?requestId=<?php echo $id?>" method="post">


                <div class="form-group <?php echo !empty($nameError)?'error':'';?>">
                    <label for="startDate">Requestor Name<span class="requiredField">*</span></label>
                    <div class="controls">
                        <input class="form-control" name="requestorName" type="text" placeholder="requestorName"
                            value="<?php echo !empty($name)?$name:'';?>">
                        <?php if (!empty($nameError)): ?>
                        <span class="help-inline"><?php echo $nameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label for="startDate">Requestor Email<span class="requiredField">*</span></label>
                    <div class="controls">
                        <input class="form-control" name="requestorEmail" type="text" placeholder="requestorEmail"
                            value="<?php echo !empty($email)?$email:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>



                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Request Status</label>
                    <div class="controls">


                        <input readonly class="form-control" name="requestStatus" type="text"
                            placeholder="requestorStatus"
                            value="<?php echo !empty($requestStatus)?$requestStatus:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='form-group'>
                    <select id='inputState' class='form-control' name='requestStatus'>

                        <option value='<?php echo $requestStatus ?>'><?php echo 'Current Status: ' . $requestStatus ?>
                        </option>
                        <option value='Submitted' id='submitted'>Submitted</option>
                        <option value='Acknowledged' id='acknowledged'>Acknowledged</option>
                        <option value='Assigned' id='assigned'>Assigned</option>
                        <option value='In Progress' id='inProgress'>In Progress</option>
                        <option value='Completed' id='installed'>Completed</option>
                        <option value='Closed' id='installed'>Closed</option>
                    </select>
                </div>



                <!-- confirm exchange -->

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Exchange</label>
                    <div class="controls">
                        <input class="form-control" name="exchange" type="text" placeholder="exchange"
                            value="<?php echo !empty($exchange)?$exchange:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- end of confirm exchange -->


                <!-- start of confirm room -->

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Room</label>
                    <div class="controls">
                        <input class="form-control" name="room" type="text" placeholder="room"
                            value="<?php echo !empty($room)?$room:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- end of confirm room -->



                <?php 

                    if ($breakerSize1 != NULL ) {
                        
                        ?>
                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Rack Location 1</label>
                    <div class="controls">
                        <input class="form-control" name="rackLocation1" type="text" placeholder="rackLocation1"
                            value="<?php echo !empty($rackLocation1)?$rackLocation1:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Sub PDU 1</label>
                    <div class="controls">
                        <input class="form-control" name="subPdu1" type="text" placeholder="subPdu1"
                            value="<?php echo !empty($subPdu1)?$subPdu1:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Breaker Name 1</label>
                    <div class="controls">
                        <input class="form-control" name="breakerName1" type="text" placeholder="breakerName1"
                            value="<?php echo !empty($breakerName1)?$breakerName1:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php

                    }


                    if ($breakerSize2 != NULL ) {

                        ?>




                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Rack Location 2</label>
                    <div class="controls">
                        <input class="form-control" name="rackLocation2" type="text" placeholder="rackLocation2"
                            value="<?php echo !empty($rackLocation2)?$rackLocation2:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Sub PDU 2</label>
                    <div class="controls">
                        <input class="form-control" name="subPdu2" type="text" placeholder="subPdu2"
                            value="<?php echo !empty($subPdu2)?$subPdu2:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Breaker Name 2</label>
                    <div class="controls">
                        <input class="form-control" name="breakerName2" type="text" placeholder="breakerName2"
                            value="<?php echo !empty($breakerName2)?$breakerName2:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>




                <?php

                    }


                    if ($breakerSize3 != NULL ) {

                        ?>

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Rack Location 3</label>
                    <div class="controls">
                        <input class="form-control" name="rackLocation3" type="text" placeholder="rackLocation3"
                            value="<?php echo !empty($rackLocation3)?$rackLocation3:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Sub PDU 3</label>
                    <div class="controls">
                        <input class="form-control" name="subPdu3" type="text" placeholder="subPdu3"
                            value="<?php echo !empty($subPdu3)?$subPdu3:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Breaker Name 3</label>
                    <div class="controls">
                        <input class="form-control" name="breakerName3" type="text" placeholder="breakerName3"
                            value="<?php echo !empty($breakerName3)?$breakerName3:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <?php

                    }


                    if ($breakerSize4 != NULL ) {

                        ?>


                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Rack Location 4</label>
                    <div class="controls">
                        <input class="form-control" name="rackLocation4" type="text" placeholder="rackLocation4"
                            value="<?php echo !empty($rackLocation4)?$rackLocation4:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Sub PDU 4</label>
                    <div class="controls">
                        <input class="form-control" name="subPdu4" type="text" placeholder="subPdu4"
                            value="<?php echo !empty($subPdu1)?$subPdu4:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Breaker Name 4</label>
                    <div class="controls">
                        <input class="form-control" name="breakerName4" type="text" placeholder="breakerName4"
                            value="<?php echo !empty($breakerName4)?$breakerName4:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>






                <?php

                    }


                    if ($breakerSize5 != NULL ) {

                        ?>



                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Rack Location 5</label>
                    <div class="controls">
                        <input class="form-control" name="rackLocation5" type="text" placeholder="rackLocation5"
                            value="<?php echo !empty($rackLocation5)?$rackLocation5:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="form-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Sub PDU 5</label>
                    <div class="controls">
                        <input class="form-control" name="subPdu5" type="text" placeholder="subPdu5"
                            value="<?php echo !empty($subPdu5)?$subPdu5:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Breaker Name 5</label>
                    <div class="controls">
                        <input class="form-control" name="breakerName5" type="text" placeholder="breakerName5"
                            value="<?php echo !empty($breakerName5)?$breakerName5:'';?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>



                <?php

                    }
                
                
                ?>











                <br>


                <div class="form-actions">
                    <button type="submit" class="btn selectorButton3" style="float: right;">Update</button>
                    <a class="btn" style="float: left;" href="spaceInfo.php">Back</a>
                </div>

                <br>
                <br>
                <br>
                <br>

                <br>

            </form>

        </div>

    </div> <!-- /container -->
</body>

</html>