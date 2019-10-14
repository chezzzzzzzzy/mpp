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
$requestorName = $_POST['requestorName'];
$requestorEmail = $_POST['requestorEmail'];
$requestorDepartment = $_POST['requestorDepartment'];
$requestorReason= $_POST['requestorReason'];
$powerType = $_POST['powerType'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$exchange = $_POST['exchange'];
$rackSizeLength = $_POST['rackSizeLength'];
$rackSizeBreadth = $_POST['rackSizeBreadth'];
$breakerSize = $_POST['breakerSize'];
$breakerQuantity = $_POST['breakerQuantity'];

// insert into table
$sql = "INSERT INTO spaceRequests (requestorName, requestorEmail, requestorDepartment, requestorReason, powerType, startDate, endDate, exchange, rackSizeLength, rackSizeBreadth, breakerSize, breakerQuantity, requestStatus) 
        VALUES ('$requestorName','$requestorEmail', '$requestorDepartment', '$requestorReason', '$powerType', '$startDate', '$endDate', '$exchange', $rackSizeLength, $rackSizeBreadth, $breakerSize, $breakerQuantity, 'Submitted')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

?>




