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
                    <a class="nav-link" href="requestForm.php">Request <span class="sr-only">(current)</span></a>
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

                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="ticketNumber" placeholder="Enter ticket number"
                                name="ticketNumber" method="post" required>
                        </div>
                        
                        <br>
                        <br>

                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary ordinalButton" method="post">Check</button>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
            </div>


          
                <table class="table">
                    <thead>
                        <?php          
                            // if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ticketNumber']))
                            // {
                                func();
                            // }   
                            function func()
                            {

                                $temp = $_POST['ticketNumber']; 
                                $sql = "SELECT * FROM `spaces` WHERE `id` = $temp";
                                $link = mysqli_connect("localhost", "root", "password", "singtel_esm");
    
                                if($result = mysqli_query($link, $sql)){
    
                                    if(mysqli_num_rows($result) > 0){
                                        
                                            while($row = mysqli_fetch_array($result)){


                                            echo "<div class='col-lg-12 statusBox'>";

                                                echo "<div class='row'>";

                                                    echo "<div class='col-lg-2'>";
                                                    echo "<h5>Ticket Number</h5>";
                                                    echo "<h2>" . $row['id'] . "</h2>";
                                                    echo "</div>";
                                    
                                                    echo "<div class='col-lg-1'></div>";
                                                        
                                                    echo "<div class='col-lg-8'>"; 

                                                        echo "<div class='row'>";
                                                            echo "<div class='col-lg-4'>";    
                                                            echo "<h5>Rack Size (Breadth)</h5>";   
                                                            echo "<h2>" . $row['rack_size_breadth'] . "</h2>";
                                                            echo "</div>";   
                                                            
                                                            echo "<div class='col-lg-2'></div>"; 
        
                                                            echo "<div class='col-lg-4'>";    
                                                            echo "<h5>Rack Size (Length)</h5>";   
                                                            echo "<h2>" . $row['rack_size_length'] . "</h2>";
                                                            echo "</div>";  
                                                        echo "</div>";  

                                                        echo "<div class='row topSpaceLow'>";
                                                            echo "<div class='col-lg-4'>";    
                                                            echo "<h5>Breaker Size</h5>";   
                                                            echo "<h2>" . $row['breaker_size'] . "</h2>";
                                                            echo "</div>";   
        
                                                            echo "<div class='col-lg-2'></div>"; 
                                                        
                                                            echo "<div class='col-lg-4'>";    
                                                            echo "<h5>Breaker Quantity</h5>";   
                                                            echo "<h2>" . $row['breaker_quantity'] . "</h2>";
                                                            echo "</div>";  
                                                        echo "</div>";  

                                                        echo "<h5 class='topSpaceLow'>PDB Feeds</h5>";
                                                        echo "<h2>" . $row['pdb_feeds'] . "</h2>";

                                                        echo "<h5 class='topSpaceLow'>Location</h5>";
                                                        echo "<h2>" . $row['location'] . "</h2>";

                                                        echo "<h5 class='topSpaceLow'>Location</h5>";
                                                        echo "<h2>" . $row['room'] . "</h2>";

                                                        echo "<h5 class='topSpaceLow'>Time / Date</h5>";
                                                        echo "<h2>" . $row['time_date'] . "</h2>";

                                                        echo "<h5 class='topSpaceLow'>Status</h5>";
                                                        echo "<h2>" . $row['status'] . "</h2>";

                                                        if ($row['status'] == "In Progress") {

                                                            echo "<form>
                                                        <div class='form-group'>
                                                            <h5 class='topSpaceLow'>Image Upload</h5>
                                                            <input type='file' class='form-control-file' id='exampleFormControlFile1'
                                                                onchange='readURL(this);''>
                                                            <img id='blah'>
                                                        </div>
                                                        </form>";
                                                        echo "<button type='submit' class='btn btn-primary ordinalButton' method='post'>Submit</button>";

                                                        }

                                                        

                                                    echo "</div>";  
                                                echo "</div>";
                                            echo "</div>";



                         

                                           
                                           
                                           

                                            // echo "<tr>";
                                            //     echo "<td>" . $row['id'] . "</td>";
                                            //     echo "<td>" . $row['rack_size_breadth'] . "</td>";
                                            //     echo "<td>" . $row['rack_size_length'] . "</td>";
                                            //     echo "<td>" . $row['breaker_quantity'] . "</td>";
                                            //     echo "<td>" . $row['breaker_size'] . "</td>";
                                            //     echo "<td>" . $row['pdb_feeds'] . "</td>";
                                            //     echo "<td>" . $row['location'] . "</td>";
                                            //     echo "<td>" . $row['room'] . "</td>";
                                            //     echo "<td>" . $row['time_date'] . "</td>";
                                            //     echo "<td>" . $row['status'] . "</td>";

                                            // echo "</tr>";
                                        }
                                        // Free result set
                                        mysqli_free_result($result);
                                    }
                                }
                            }
                        ?>
                    </thead>
                </table>
            <!-- </div> -->
        </div>
    </div>
</body>

</html>