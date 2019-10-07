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
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">


    <title>Admin | ESM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png" alt="singtelLogo.png">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">All Requests<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <span class="navbar-text">
                <!-- <button type="button" class="btn btn-primary btn-sm" onclick="logoutPressed()">Logout</button> -->
                <a href="terminate.php">Logout</a>
            </span>
        </div>
    </nav>


    <script>
        function logoutPressed() {
            <?php
                // header("Location: auth.php");
                // session_destroy();
                // $_SESSION['loggedin'] = false;
            ?>
        }
    </script>

    <?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // echo "Logged in already" . $_SESSION['email'];
    ?>     
    
    <div class="container">
    


        <h1>All Requests</h1>

        <div class="row">


            <div class="col-lg-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 1%">Ticket Number</th>
                            <th scope="col" style="width: 1%">Rack Size (Breadth)</th>
                            <th scope="col" style="width: 1%">Rack Size (Length)</th>
                            <th scope="col" style="width: 1%">Breaker Quantity</th>
                            <th scope="col" style="width: 1%">Breaker Size</th>
                            <th scope="col" style="width: 1%">PDB Feeds</th>
                            <th scope="col" style="width: 1%">Location</th>
                            <th scope="col" style="width: 1%">Room</th>
                            <th scope="col" style="width: 4%">Time / Date</th>
                            <th scope="col" style="width: 1%">Status</th>
                            <th scope="col" style="width: 10%">Options</th>

                        </tr>
                        <?php 

                            $sql = "SELECT * FROM spaces";
                            $link = mysqli_connect("localhost", "root", "password", "singtel_esm");

                            if($result = mysqli_query($link, $sql)){

                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['rack_size_breadth'] . "</td>";
                                        echo "<td>" . $row['rack_size_length'] . "</td>";
                                        echo "<td>" . $row['breaker_quantity'] . "</td>";
                                        echo "<td>" . $row['breaker_size'] . "</td>";
                                        echo "<td>" . $row['pdb_feeds'] . "</td>";
                                        echo "<td>" . $row['location'] . "</td>";
                                        echo "<td>" . $row['room'] . "</td>";
                                        echo "<td>" . $row['time_date'] . "</td>";
                                        echo "<td>" . $row['status'] . "</td>";

                                        echo "<td>
                                        <form action='index.php' method='post'>                       
                                            <div class='form-group'>
                                                <select id='inputState' class='form-control' name='statusUpdate' onchange='this.form.submit()'>
                                                    <option selected value=''>Select Below</option>
                                                    <option value='Submitted' id='submitted'>Submitted</option>
                                                    <option value='In Progress' id='inProgress'>In Progress</option>
                                                    <option value='Assigned' id='assigned'>Assigned</option>
                                                    <option value='x' id='assigned'>x</option>

                                                    <option value='Completed' id='installed'>Completed</option>
                                                    <option value='Closed' id='installed'>Closed</option>

                                                </select>
                                            </div>                
                                        </form>
                                    </td>";



                                        // foreach ($row['id'] as $index => $id) {
                                        //     $sqlUpdate = "UPDATE spaces SET status='".$_POST['ststatusUpdate'][$index]."'";
                                        //     $result=mysql_query($sqlUpdate);

                                        // }

                                   
            
                                        
                

                        ?>

                        <?php

                       
                        ?>

                        <?php
                                    echo "</tr>";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            }
                        }

                        ?>
                        
                    </thead> 
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

