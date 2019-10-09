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


    <title>User | ESM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png" alt="singtelLogo.png">
            </div>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>
            
                <li class="nav-item active">
                    <a class="nav-link" href="status.php">Status</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto">
                Exchange Space Management
            </span>
        </div>
    </nav>



    <div class="container">


        <h1>Status</h1>


        <div class="row">

            <div class="col-lg-12">

                <label for="rackSize">Ticket Number<span class="requiredField">*</span></label>
                <form action="" method="POST">

                    <div class="row">

                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="ticketNumber" placeholder="Enter ticket number"
                                name="ticketNumber" method="post" required>
                        </div>
                        
                        <br>
                        <br>

                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary ordinalButton" method="post">Check</button>
                        </div>
                    </div>
                </form>
              
            </div>

            <?php        
  
                func(); 
                function func()
                {
                    require 'connection.php';

                    $temp = $_POST['ticketNumber']; 
                    $sql = "SELECT * FROM `spaces` WHERE `id` = $temp";

                    


                    if($result = mysqli_query($conn, $sql)){

                        

                        if(mysqli_num_rows($result) > 0){
                            
                                while($row = mysqli_fetch_array($result)){

                                    
                                    ?>
                                    

                                    <div class="col-lg-12">
                                        <!-- <h1>Your Request</h1> -->
                                    </div>

                                    <div class="col-lg-12">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h5>Ticket Number</h5>
                                                        <?php echo "<h2>" . $row['id'] . "</h2>"; ?>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h5>Status</h5>
                                                        <?php echo "<h2>" . $row['status'] . "</h2>"; ?>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="col-lg-12 topSpace">
                                                <h3><b>Requested</b></h3>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h5>Rack Size (Breadth)</h5>   
                                                        <?php echo "<h2>" . $row['rack_size_breadth'] . "<span class='units'>mm</span></h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-3">
                                                        <h5>Rack Size (Length)</h5>   
                                                        <?php echo "<h2>" . $row['rack_size_length'] . "<span class='units'>mm</span></h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h5 class="topSpaceLow">Breaker Size</h5>   
                                                        <?php echo "<h2>" . $row['breaker_size'] . "</h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-3">
                                                        <h5 class="topSpaceLow">Breaker Quantity</h5>   
                                                        <?php echo "<h2>" . $row['breaker_quantity'] . "</h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-3">
                                                        <h5 class="topSpaceLow">Power Type</h5>   
                                                        <h2>AC</h2>
                                                        <?php echo "<h2>" . $row['power'] . "</h2>";?>
                                                    </div>
                                                </div>

                                                

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h5 class="topSpaceLow">Preferred Location</h5>
                                                        <?php echo "<h2>" . $row['location'] . "</h2>";?>

                                                        <h5 class="topSpaceLow">Room</h5>
                                                        <?php echo "<h2>PCM " . $row['room'] . "</h2>";?>

                                                        <h5 class="topSpaceLow">Time / Date</h5>
                                                        <?php echo "<h2>" . $row['time_date'] . "</h2>";?>
                                                    </div>
                                                </div>

                                                <br>
                                                <hr>
                                                
                                                <h3><b>Given</b></h3>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h5>Rack Size (Breadth)</h5>  
                                                        <?php echo "<h2>" . $row['rack_size_breadth'] . "<span class='units'>mm</span></h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-3">
                                                        <h5>Rack Size (Length)</h5>   
                                                        <?php echo "<h2>" . $row['rack_size_length'] . "<span class='units'>mm</span></h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                  
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h5 class="topSpaceLow">Breaker Size</h5>   
                                                        <?php echo "<h2>" . $row['breaker_size'] . "</h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-3">
                                                        <h5 class="topSpaceLow">Breaker Quantity</h5>   
                                                        <?php echo "<h2>" . $row['breaker_quantity'] . "</h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                               
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h5 class="topSpaceLow">Power Type</h5>   
                                                        <h2>AC</h2>
                                                        <?php echo "<h2>" . $row['power'] . "</h2>";?>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-3">
                                                        <h5 class="topSpaceLow">PDB Feeds</h5>   
                                                        <?php echo "<h2>" . $row['pdb_feeds'] . "</h2>";?>
                                                    </div>
                                                 
                                                 
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h5 class="topSpaceLow">Location</h5>
                                                        <?php echo "<h2>" . $row['location'] . "</h2>";?>

                                                        <h5 class="topSpaceLow">Room</h5>
                                                        <?php echo "<h2>PCM " . $row['room'] . "</h2>";?>

                                                        <h5 class="topSpaceLow">Rack Location</h5>
                                                        <?php echo "<h2>AA45</h2>";?>

                                                        <h5 class="topSpaceLow">SLA</h5>
                                                        <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Timestamp</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td><h2>Submitted</h2></td>
                                                            <td><?php echo "<h2>" . $row['time_date'] . "</h2>";?>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td><h2>In Progress</h2></td>
                                                            <td><?php echo "<h2>" . $row['timestamp_inprogress'] . "</h2>";?>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td><h2>Assigned</h2></td>
                                                            <td><?php echo "<h2>" . $row['timestamp_assigned'] . "</h2>";?>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td><h2>Plan?</h2></td>
                                                            <td><?php echo "<h2>" . $row['timestamp_x'] . "</h2>";?>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td><h2>Completed</h2></td>
                                                            <td><?php echo "<h2>" . $row['timestamp_completed'] . "</h2>";?>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td><h2>Closed</h2></td>
                                                            <td><?php echo "<h2>" . $row['timestamp_closed'] . "</h2>";?>
                                                            </td>
                                                            </tr>
                                                        </tbody>
                                                        </table>

                                                        

                                                    </div>
                                                </div>

                                            
                                       

                                                <?php 
                                                
                                               
                                                
                                                if ($row['status'] == "Submitted") {
                                                    echo "<h2>Submitted status</h2>";


                                                } 
                                                
                                                if ($row['status'] == "Assigned") {
                                                    echo "<h2>Assigned status</h2>";

                                                }
                                                if ($row['status'] == "In Progress") {

                                                 
                                                } 

                                                if ($row['status'] == "Installed") {
                                                    echo "<form>
                                                    <div class='form-group'>
                                                    <h5 class='topSpaceLow'>Image Upload</h5>
                                                    on breaker, equip, flooring 
                                                    <input id='browse' type='file' onchange='previewFiles()' multiple>
                                                    <div id='preview'></div>
                                                    </div>
                                                    </form>";
                                                    echo "<button type='submit' class='btn btn-primary ordinalButton marginDec' method='post'>Submit</button>";
                                                }

                                                if ($row['status'] == "Completed") {
                                                    echo "<div class='topSpaceMid'></div>";
                                                 

                                                    echo "<button type='submit' class='btn btn-primary ordinalButton marginDec' method='post'>Completed</button>";

                                                    
                                                } 
                                                
                                                ?>

                                            </div>
                                        </div>

                                    </div>
                                    <?php

                                }
                        }        
                    }                 
                }

                ?>


           

            

                                         


       
            <!-- </div> -->
        </div>
    </div>
</body>

</html>