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
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">
    <script src="./libraries/js/bootstrap.min.js"></script>
    <script src="./libraries/jquery-3.4.1.min.js"></script>

    <script src="./libraries/chartist.min.js"></script>
    <script src="./libraries/chartist-plugin-legend.js"></script>
    <script src="./libraries/Chart.bundle.js"></script>

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

    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("sorted");
        switching = true;
        // Set the sorting direction to ascending:
        dir = "asc";
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /* Check if the two rows should switch place,
                based on the direction, asc or desc: */
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                // Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /* If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again. */
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
    </script>

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
                <!-- <button type="button" class="btn btn-primary btn-sm" onclick="logoutPressed()">Logout</button> -->
                <a href="terminate.php">Logout</a>
            </span>
        </div>
    </nav>


    <div class="container-fluid fluid2">


        <h1>FDF Requests</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Total Request</b></h4>
                    <h2 class="mlSmall"><b>
                            <?php
                                    $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests";
                                    $query = mysqli_query($conn, $sqlGetTotalInProgress);

                                    $row = $query->fetch_object();
                                    $classId = $row->count;
                                    echo $classId;
                                ?>
                        </b></h2>
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
                        $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='In Progress' ";
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
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='FNSE' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                    <?php
                        $sqlGetTotalInProgress = "SELECT COUNT(requestorDepartment) as `count` FROM fdfRequests WHERE requestorDepartment='NSOC' ";
                        $query = mysqli_query($conn, $sqlGetTotalInProgress);
                        $row = $query->fetch_object();
                        $classId = $row->count;
                        echo $classId;
                    ?>,

                   
                ],
                labels: ['FNSE', 'NSOC']
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
                    <h2 class="mlSmall"><b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Submitted' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b><span class="infoUnit">request/s</span></h2>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Acknowledged</b></h4>
                    <br>
                    <h2 class="mlSmall"><b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Acknowledged' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b><span class="infoUnit">request/s</span></h2>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Assigned</b></h4>
                    <br>
                    <h2 class="mlSmall"><b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Assigned' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b><span class="infoUnit">request/s</span></h2>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>In Progress</b></h4>
                    <br>
                    <h2 class="mlSmall"><b>
                            <?php
                                $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='In Progress' ";
                                $query = mysqli_query($conn, $sqlGetTotalInProgress);
                                $row = $query->fetch_object();
                                $classId = $row->count;
                                echo $classId;
                            ?>
                        </b><span class="infoUnit">request/s</span></h2>
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
                        </b><span class="infoUnit">request/s</span></h2>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="boundingBox2">
                    <h4 class="mlSmall"><b>Closed</b></h4>
                    <br>
                    <h2 class="mlSmall"><b>
                            <?php
                            $sqlGetTotalInProgress = "SELECT COUNT(requestStatus) as `count` FROM fdfRequests WHERE requestStatus='Closed' ";
                            $query = mysqli_query($conn, $sqlGetTotalInProgress);
                            $row = $query->fetch_object();
                            $classId = $row->count;
                            echo $classId;
                            ?>
                        </b><span class="infoUnit">request/s</span></h2>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="warningBoundingBox">

                    <h6 class="mlSmall warningText"><b>7 Overdue</b></h6>

                </div>
            </div>


            <div class="col-lg-2">
                <div class="warningBoundingBox">

                    <h6 class="mlSmall"><b>7 Overdue</b></h6>

                </div>
            </div>


            <div class="col-lg-2">
                <div class="warningBoundingBox">

                    <h6 class="mlSmall"><b>7 Overdue</b></h6>

                </div>
            </div>


            <div class="col-lg-2">
                <div class="warningBoundingBox">

                    <h6 class="mlSmall"><b>7 Overdue</b></h6>

                </div>
            </div>


            <div class="col-lg-2">
                <div class="warningBoundingBox">

                    <h6 class="mlSmall"><b>7 Overdue</b></h6>

                </div>
            </div>


            <div class="col-lg-2">
                <div class="normalBoundingBox">

                    <h6 class="mlSmall"><b>Normal</b></h6>

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
    <?php } else {
        // echo "Please login.";
    }
    ?>
</body>

</html>