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
$requestorName = $_POST[requestorName];
$requestorEmail = $_POST[requestorEmail];
$requestorDepartment = $_POST[requestorDepartment];
$requestorReason= $_POST[requestorReason];
$powerType = $_POST[powerType];
$startDate = $_POST[startDate];
$endDate = $_POST[endDate];
$preferredExchange = $_POST[preferredExchange];
$rackXRackSizeLength = $_POST[rackXRackSizeLength];
$rackXRackSizeBreadth = $_POST[rackXRackSizeBreadth];
$rackXBreakerSize = $_POST[rackXBreakerSize];
$rackXBreakerQuantity = $_POST[rackXBreakerQuantity];

// insert into table
$sql = "INSERT INTO spaceRequests (requestorName, requestorEmail, requestorDepartment, requestorReason, powerType, startDate, endDate, preferredExchange, rackXRackSizeLength, rackXRackSizeBreadth, rackXBreakerSize, rackXBreakerQuantity, status) 
        VALUES ($requestorName,$requestorEmail, $requestorDepartment, $requestorReason, $powerType, $startDate, $endDate, $preferredExchange, $rackXRackSizeLength, $rackXRackSizeBreadth, $rackXBreakerSize, $rackXBreakerQuantity, 'Submitted')";

?>