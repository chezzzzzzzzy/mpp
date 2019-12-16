<?php

require 'connection.php';


$statusUpdate = $_POST['statusUpdate'];

$sql2 = "SELECT * FROM spaceRequests";
if ($result2 = mysqli_query($conn, $sql2)) {
    while($row = mysqli_fetch_array($result2)) {
        $rowSpec = $row['requestId'];
        echo $rowSpec;
    }
}       



// Attempt insert query execution
$sql = "UPDATE spaceRequests SET requestStatus='$statusUpdate' WHERE requestId = '$rowSpec'";
// echo $sql;
// echo "<br>";

$result = mysqli_query($conn, $sql) or die(mysqli_connect_error($conn));
header("Location: spaceRequests.php");



?>