<?php 
    require('../filepath.php');
    session_start();

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
        session_unset();
        session_destroy();
    }
    
    $_SESSION['LAST_ACTIVITY'] = time();
    
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

    <!-- START: navbar -->
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
    <!-- END: navbar -->


    
    <div class="container-fluid fluid2">
        <h1>FDF Requests</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Total Request</b></h4>
                    <h2 class="mlSmall">
                        <b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);

                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b>
                    </h2>
                    <br>
                    <div class="ct-chart3 ct-major-twelfth"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Department </b></h4>
                    <div class="ct-chart ct-square"></div>
                </div>
            </div>

            
            <script>
            START: 
            new Chartist.Bar('.ct-chart3', {
            labels: ['Submitted', 'Acknowledged', 'Assigned', 'Installation in Progress', 'Completed', 'Closed'],
            series: [

                <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Submitted' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Acknowledged' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Assigned' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Installation in Progress' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Completed' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Closed' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>
            ]
            }, {
            distributeSeries: true,

            });

            var chart = new Chartist.Pie('.ct-chart', {
                series: [ 
                    
                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='FISW' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='FNE/ATE' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='FNE/VE' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='IAR' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='IPTV' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='ITMC' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='MegaPop' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='MNE' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,



                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='SingNet' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,



                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='Broadcast TV' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='OSS' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,


                   
                ],
                labels: ['FISW', 'FNE/ATE', 'FNE/VE', 'IAR', 'IPTV', 'ITMC', 'MegaPop', 'MNE', 'SingNet', 'Broadcast TV', 'OSS']
            }, {
                donut: true,
                donutWidth: 40,

                showLabel: true,
                labelOffset: 40,
                labelDirection: 'explode',
                chartPadding: 50
            });
            

            chart.on('draw', function(data) {
                if (data.type === 'slice') {
                    // Get the total path length in order to use for dash array animation
                    var pathLength = data.element._node.getTotalLength();

                    // Set a dasharray that matches the path length as prerequisite to animate dashoffset
                    data.element.attr({
                        'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                    });

                    // Create animation definition while also assigning an ID to the animation for later sync usage
                    var animationDefinition = {
                        'stroke-dashoffset': {
                            id: 'anim' + data.index,
                            dur: 1000,
                            from: -pathLength + 'px',
                            to: '0px',
                            easing: Chartist.Svg.Easing.easeOutQuint,
                            // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
                            fill: 'freeze'
                        }
                    };

                    // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
                    if (data.index !== 0) {
                        animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) +
                            '.end';
                    }

                    // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
                    data.element.attr({
                        'stroke-dashoffset': -pathLength + 'px'
                    });

                    // We can't use guided mode as the animations need to rely on setting begin manually
                    // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
                    data.element.animate(animationDefinition, false);
                }
            });

            // For the sake of the example we update the chart every time it's created with a delay of 8 seconds
            chart.on('created', function() {
                if (window.__anim21278907124) {
                    clearTimeout(window.__anim21278907124);
                    window.__anim21278907124 = null;
                }
                window.__anim21278907124 = setTimeout(chart.update.bind(chart), 20000);
            });
            </script>



            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Submitted</b></h4>
                    <br>
                    <h2 class="mlSmall">
                        <b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Submitted' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b>
                        <span class="infoUnit">request/s</span>
                    </h2>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Acknowledged</b></h4>
                    <br>
                    <h2 class="mlSmall">
                        <b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Acknowledged' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b>
                        <span class="infoUnit">request/s</span>
                    </h2>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Assigned</b></h4>
                    <br>
                    <h2 class="mlSmall">
                        <b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Assigned' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b>
                        <span class="infoUnit">request/s</span>
                    </h2>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Installation in Progress</b></h4>
                    <br>
                    <h2 class="mlSmall">
                        <b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Installation in Progress' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b>
                        <span class="infoUnit">request/s</span>
                    </h2>
                </div>
            </div>


            <div class="col-lg-2">

                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Completed</b></h4>
                    <br>
                    <h2 class="mlSmall"><b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Completed' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b>
                        <span class="infoUnit">request/s</span>
                    </h2>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Closed</b></h4>
                    <br>
                    <h2 class="mlSmall">
                        <b>
                            <?php
                            $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Closed' ";
                            $query = mysqli_query($conn, $sqlGetTotalInProgress);
                            $row = $query->fetch_object();
                            $classId = $row->count;
                            echo $classId;
                            ?>
                        </b>
                        <span class="infoUnit">request/s</span>
                    </h2>
                </div>
            </div>




            <div class="col-lg-12">
                <div class="tableBoundingBox">
                    <table class="table" id="sorted">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name/Department</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include '../filepath2.php';
                                $pdo = Database::connect();
                                $sql = 'SELECT * FROM fdfRequests ORDER BY id DESC';
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<tr>';
                                    echo '<td>'. $row['id'] . '</td>';
                                    echo '<td>'. '<b>' . $row['requestorName'] . '</b>' . '<br>' . $row['requestorDepartment'] . '</td>';
                                    echo '<td>'. $row['requestorEmail'] . '</td>';
                                    echo '<td>'. $row['requestTimestamp'] . '</td>';
                                    echo '<td>'. $row['requestStatus'] . '</td>';

                                    echo '<td width=350>';
                                    echo '<a class="btn updateInfoButton" href="updateInfoFdf.php?id='.$row['id'].'">Update</a>';
                                    echo ' ';
                                    echo '<a class="btn readInfoButton" href="viewInfoFdf.php?id='.$row['id'].'">View</a>';
                                    echo ' ';
                                    echo '<a class="btn deleteInfoButton" href="deleteInfoFdf.php?id='.$row['id'].'">Decline</a>';
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