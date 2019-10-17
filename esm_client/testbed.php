<?php
// general
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "singtel_esm";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get data from spaceForm.php
$rackSizeLength1 = $_POST['rackSizeLength1'];
$rackSizeLength2 = $_POST['rackSizeLength2'];
$rackSizeLength3 = $_POST['rackSizeLength3'];
$rackSizeLength4 = $_POST['rackSizeLength4'];
$rackSizeLength5 = $_POST['rackSizeLength5'];


$rackSizeBreadth1 = $_POST['rackSizeBreadth1'];
$rackSizeBreadth2 = $_POST['rackSizeBreadth2'];
$rackSizeBreadth3 = $_POST['rackSizeBreadth3'];
$rackSizeBreadth4 = $_POST['rackSizeBreadth4'];
$rackSizeBreadth5 = $_POST['rackSizeBreadth5'];


$breakerSize1 = $_POST['breakerSize1'];
$breakerSize2 = $_POST['breakerSize2'];
$breakerSize3 = $_POST['breakerSize3'];
$breakerSize4 = $_POST['breakerSize4'];
$breakerSize5 = $_POST['breakerSize5'];



$breakerQuantity1 = $_POST['breakerQuantity1'];
$breakerQuantity2 = $_POST['breakerQuantity2'];
$breakerQuantity3 = $_POST['breakerQuantity3'];
$breakerQuantity4 = $_POST['breakerQuantity4'];
$breakerQuantity5 = $_POST['breakerQuantity5'];


// insert into table
$sql = "INSERT INTO spaceRequests (rackSizeLength_1, rackSizeLength_2, rackSizeLength_3, rackSizeLength_4,rackSizeLength_5, rackSizeBreadth_1, rackSizeBreadth_2, rackSizeBreadth_3, rackSizeBreadth_4, rackSizeBreadth_5, breakerSize_1, breakerSize_2, breakerSize_3, breakerSize_4, breakerSize_5, breakerQuantity_1, breakerQuantity_2, breakerQuantity_3, breakerQuantity_4, breakerQuantity_5 ) 
        VALUES ('$rackSizeLength1', '$rackSizeLength2', '$rackSizeLength3','$rackSizeLength4', '$rackSizeLength5', '$rackSizeBreadth1', '$rackSizeBreadth2', '$rackSizeBreadth3', '$rackSizeBreadth4', '$rackSizeBreadth5', '$breakerSize1', '$breakerSize2', '$breakerSize3', '$breakerSize4', '$breakerSize5', '$breakerQuantity1', '$breakerQuantity2','$breakerQuantity3', '$breakerQuantity4', '$breakerQuantity5' )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

?>




