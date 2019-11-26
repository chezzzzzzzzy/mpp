

<?php 
    require 'connection.php';
    $temp = $_POST['ticketNumber']; 
    $updateStatus = "UPDATE spaceRequests SET requestStatus = 'Completed' where requestID = '$temp'";
    echo $updateStatus;
    mysqli_query($conn, $updateStatus);


?>



