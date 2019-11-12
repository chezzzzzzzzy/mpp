<?php
    require 'database.php';
    $id = null;
    if ( !empty(strval($_GET['requestId']))) {
        $id = strval($_REQUEST['requestId']);
    }
     
    if ( null==$id ) {
        header("Location: spaceInfo.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM spaceRequests where requestId = ?";
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

    <div class="container-fluid fluid2">

        <h1>View Request</h1>

        <div class="row">

            <div class="col-lg-12">

                <div class="infoBoundingBox">

                    <div class="form-horizontal">
                        <div class="control-group">

                            <label for="startDate">Request ID<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text" value="<?php echo $data['requestId'];?>">

                            <label for="startDate">Requestor Name<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['requestorName'];?>">


                            <label for="startDate">Requestor Email<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['requestorEmail'];?>">

                            <label for="startDate">Requestor Reason<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['requestorReason'];?>">


                            <label for="startDate">Exchange<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text" value="<?php echo $data['exchange'];?>">

                            <label for="startDate">Room<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text" value="<?php echo $data['room'];?>">

                            <br>
                            <label for="startDate">Rack 1</label>
                            <br>

                            <label for="startDate">Length (Size)<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['rackSizeLength1'];?>">

                            <label for="startDate">Length (Breadth)<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['rackSizeBreadth1'];?>">


                            <label for="startDate">Breaker Size<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['breakerSize1'];?>">

                            <label for="startDate">Breaker Quantity<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['breakerQuantity1'];?>">

                            <label for="startDate">Rack Location<span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text"
                                value="<?php echo $data['rackLocation1'];?>">

                            <label for="startDate">Sub PDU <span class="requiredField">*</span></label>
                            <input readonly class="form-control" type="text" value="<?php echo $data['subPdu1'];?>">







                        </div>

                        <div class="form-actions">
                            <a class="btn" href="spaceInfo.php">Back</a>
                        </div>


                    </div>
                </div>



            </div>



        </div>



    </div> <!-- /container -->
</body>

</html>