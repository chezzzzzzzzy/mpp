<?php 
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



        <h1>Space Requests (Edit Mode)</h1>

        <div class="row">


            <div class="col-lg-12">


                <table class="table">
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Requestor Name</th>
                            <th>Requestor Department</th>
                            <th>Requestor Email</th>
                            <th>Requestor Reason</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM spaceRequests ORDER BY requestId DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['requestId'] . '</td>';
                            echo '<td>'. $row['requestorName'] . '</td>';
                            echo '<td>'. $row['requestorDepartment'] . '</td>';
                            echo '<td>'. $row['requestorEmail'] . '</td>';
                            echo '<td>'. $row['requestorReason'] . '</td>';

                            echo '<td width=350>';
                            echo '<a class="btn updateInfoButton" href="updateInfo.php?requestId='.$row['requestId'].'">Update</a>';
                            echo ' ';
                            echo '<a class="btn readInfoButton" href="readInfo.php?requestId='.$row['requestId'].'">Read</a>';
                            echo ' ';
                            echo '<a class="btn deleteInfoButton" href="deleteInfo.php?requestId='.$row['requestId'].'">Cancel</a>';
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



    <?php } else {
        // echo "Please login.";
    }
    ?>



</body>

</html>