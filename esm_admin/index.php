<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "singtel_esm";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$statusUpdate = $_POST['statusUpdate'];

$sql2 = "SELECT * FROM spaces";
if ($result2 = mysqli_query($conn, $sql2)) {
    while($row = mysqli_fetch_array($result2)) {
        $rowSpec = $row['id'];
    }
}

// Attempt insert query execution
$sql = "UPDATE spaces SET status='$statusUpdate' WHERE id = $rowSpec";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

header("Location: admin.php");



?>

