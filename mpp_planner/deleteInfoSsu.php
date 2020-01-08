<?php
require '../filepath2.php';

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
    $remarks = strval($_POST['remarks']);

    // update data
    $valid = true;
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE ssuRequests set remarks = ?, requestStatus = 'Declined' WHERE requestId = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($remarks, $id));

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
    $remarks = $data['remarks'];

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
    <title>Planner | MPP</title>

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

    <div class="container-fluid">
        <h1>Decline Request</h1>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="infoBoundingBox">
                    <form class="form-horizontal" action="deleteInfoSsu.php?requestId=<?php echo $id ?>" method="post">
                        <div class="form-group <?php echo !empty($nameError) ? 'error' : ''; ?>">
                            <label for="startDate">Remarks<span class="requiredField">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="remarks" type="text" placeholder="remarks" required
                                    value="<?php echo !empty($remarks) ? $remarks : ''; ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn selectorButton3" style="float: right;">Update</button>
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