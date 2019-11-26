<?php

require 'connection.php';
$temp = 'SP20191117206';

            // Do some stuff with it here
            $file_path = 'upload' . "/" . $temp . "/";

            if (!file_exists($file_path)) {
                mkdir($file_path);
            }
            if(isset($_POST['but_upload'])){

                $name = $_FILES['file']['name'];
                $target_dir = $file_path;
                $target_file = $target_dir . basename($_FILES["file"]["name"]);

                // Select file type
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Valid file extensions
                $extensions_arr = array("jpg","jpeg","png");

                    // Check extension
                    if( in_array($imageFileType,$extensions_arr) ){
                    
                        // Insert record
                        $query = "UPDATE spaceRequests SET requestorFileUpload = '".$name."' WHERE requestId = '$temp'";
                        // mysqli_query($conn,$query);

                        // insert into table
                        if (mysqli_query($conn, $query)) {
                            // echo "New record created successfully";
                            // echo "<br>";
                            // echo $sql;
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    
                        // Upload file
                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                    }
                
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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js">
    </script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js">
    </script>


    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="form1.css">
    <title>Requestor | ESM</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png"
                    alt="./assets/singtelLogo.png">
            </div>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="guide.php">Guide</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto">
                Exchange Space Management
            </span>
        </div>
    </nav>

    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <h1 class=" topSpaceLarge">Onboarding</h1>
                <h5 class=" x0">Guides as to how you should use the app</h5>


                <h4 class=""><b>Uploading Images</b></h4>
                <!-- <button type='submit' class='btn selectorButton2' id='x' method='post'>Learn More</button> -->

                <h4 class="topSpaceMid"><b>Submitting Requests</b></h4>
                <!-- <button type='submit' class='btn selectorButton2' id='x' method='post'>Learn More</button> -->

            </div>

        </div>
        <br>
        <br>
        <br>
        <br>


        <form method="post" enctype='multipart/form-data'>
            <input type='file' name='file' />
            <input type='submit' value='Save name' name='but_upload'>
        </form>



    </div>


</body>

</html>