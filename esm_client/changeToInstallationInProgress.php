<?php

require('connection.php');
$temp = $_GET['id'];
$requestorImageUpload = $_GET['requestorImageUpload'];
$updateStatus = "UPDATE spaceRequests SET requestStatus = 'Installation in Progress' where requestID = '$temp'";
echo $updateStatus;
mysqli_query($conn, $updateStatus);
header('Location: status.php');

?>