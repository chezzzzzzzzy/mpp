<?php
require 'connection.php';
session_start();
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
    <script src="./libraries/additional-methods.js"></script>
    <script src="./libraries/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libraries/bootstrap-datepicker.css">

    <script src="./libraries/chartist.min.js"></script>
    <script src="./libraries/chartist-plugin-legend.js"></script>
    <script src="./libraries/Chart.bundle.js"></script>

    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Planner | MPP</title>
</head>

<body>


    <?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // echo "Logged in already" . $_SESSION['email'];
    ?>
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
                <li class="nav-item ">
                    <a class="nav-link" href="powerRequests.php">Power</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="ssuRequests.php">SSU</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="fdfRequests.php">FDF</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="cableTrayRequests.php">Cable Tray</a>
                </li>
                <li class="nav-item active">
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


        <h1>General Requests</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Total Request</b></h4>
                    <h2 class="mlSmall">
                        <b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(id) as `count` FROM generalRequests";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b>
                    </h2>
                    <br>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="tableBoundingBox">
                    <table class="table" id="sorted">
                        <thead>
                            <tr>
                                <th onclick="sortTable(0)">ID</th>
                                <th>Name/Department</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'database.php';
                                $pdo = Database::connect();
                                $sql = 'SELECT * FROM generalRequests ORDER BY id DESC';
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['id'] . '</td>';
                                    echo '<td>' . '<b>' . $row['requestorName'] . '</b>' . '<br>' . $row['requestorDepartment'] . '</td>';
                                    echo '<td>' . $row['requestorEmail'] . '</td>';
                                    echo '<td>' . $row['requestTimestamp'] . '</td>';
                                    echo '<td>' . $row['requestStatus'] . '</td>';

                                    echo '<td width=350>';
                                    echo '<a class="btn updateInfoButton" href="updateInfoGeneral.php?id=' . $row['id'] . '">Update</a>';
                                    echo ' ';
                                    echo '<a class="btn readInfoButton" href="viewInfoGeneral.php?id=' . $row['id'] . '">View</a>';
                                    echo ' ';
                                    echo '<a class="btn deleteInfoButton" href="deleteInfoGeneral.php?id=' . $row['id'] . '">Decline</a>';

                                    echo '</td>';
                                    echo '</tr>';
                                }
                                Database::disconnect();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>

    <!-- START: display when planner is not logged in -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 authForm">
                <form action="authVerification.php" method="POST" id="authForm">
                    <div class="loginLogo">
                        <img src="./assets/singtelLogo.png">
                    </div>
                    <br>
                    <h2><b>Master Planner Portal</b></h2>
                    <h5>Planner Dashboard</h5>
                    <br>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    <br>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <br>
                    <button type="submit" class="btn btn-primary boxButton">Login</button>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!-- END: display when planner is not logged in -->
        <?php } ?>
</body>

</html>