<?php
header('Location: status.php');    


require('../filepath.php');

$temp = $_GET['id'];
$requestorImageUpload = $_GET['requestorImageUpload'];
$updateStatus = "UPDATE powerRequests SET requestStatus = 'Installation in Progress' where id = '$temp'";
// echo $updateStatus;
mysqli_query($conn, $updateStatus);

?>