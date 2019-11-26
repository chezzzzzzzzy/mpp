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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist-plugin-legend/0.6.2/chartist-plugin-legend.js"></script>

    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Admin | ESM</title>
</head>

<body>


    <script>
    function logoutPressed() {
        <
        ?
        php
            // header("Location: auth.php");
            // session_destroy();
            // $_SESSION['loggedin'] = false;
            ?
            >
    }
    </script>

    <?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // echo "Logged in already" . $_SESSION['email'];
    ?>
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
                    <!-- <button type="button" class="btn btn-primary btn-sm" onclick="logoutPressed()">Logout</button> -->
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
                        <h2 class="mlSmall"><b>
                                <?php
                                    $sqlGetTotalInProgress = "SELECT COUNT(id) as `count` FROM generalRequests";
                                    $query = mysqli_query($conn, $sqlGetTotalInProgress);

                                    $row = $query->fetch_object();
                                    $classId = $row->count;
                                    echo $classId;
                                ?>
                            </b></h2>
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
                                        echo '<td>'. $row['id'] . '</td>';
                                        echo '<td>'. '<b>' . $row['requestorName'] . '</b>' . '<br>' . $row['requestorDepartment'] . '</td>';
                                        echo '<td>'. $row['requestorEmail'] . '</td>';
                                        echo '<td>'. $row['requestTimestamp'] . '</td>';
                                        echo '<td>'. $row['requestStatus'] . '</td>';


                                        echo '<td width=350>';
                                        echo '<a class="btn updateInfoButton" href="updateInfoGeneral.php?id='.$row['id'].'">Update</a>';
                                        echo ' ';
                                        echo '<a class="btn readInfoButton" href="viewInfoGeneral.php?id='.$row['id'].'">View</a>';
                                        echo ' ';
                                        echo '<a class="btn deleteInfoButton" href="deleteInfoGeneral.php?id='.$row['id'].'">Decline</a>';
                                        
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
    <?php } else {
        // echo "Please login.";
    }
    ?>
</body>

</html>