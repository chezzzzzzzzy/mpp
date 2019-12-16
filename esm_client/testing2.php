<?php

require 'connection.php';
// $temp = $_GET['requestId'];

// $requestorFileUpload = $_FILES['image']['name'];


// // Get image name

// // image file directory
// $target = "uploads/" . $temp ."/". basename($requestorFileUpload);

// // $sql = "INSERT INTO spaceRequests (adminFileUpload) VALUES ('$image')";
// // // execute query
// // mysqli_query($conn, $sql);

// if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//     $msg = "Image uploaded successfully";
// }else{
//     $msg = "Failed to upload image";
// }


// echo $requestorFileUpload;
// echo "<br>";
// echo $target;
// echo "<br>";



// $updateStatus = "UPDATE spaceRequests SET requestStatus = 'Completed', requestorFileUpload = '$requestorFileUpload' where requestID = '$temp' ";
// echo $updateStatus;
// mysqli_query($conn, $updateStatus);
// // header('Location: status.php');


$temp = $_GET['requestId'];


$file_path = 'upload' . "/" . $temp . "/";
// echo $file_path;


if (!file_exists($file_path)) {
    mkdir($file_path);
}


$name = $_FILES['image']['name'];
$target_dir = $file_path;
$target_file = $target_dir . basename($_FILES["image"]["name"]);
echo $target_file;

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png");


    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

    
        // Upload file
        move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);

    }


$updateStatus = "UPDATE spaceRequests SET requestStatus = 'Completed', requestorFileUpload = '$name' where requestID = '$temp' ";
echo $updateStatus;
mysqli_query($conn, $updateStatus);
// header('Location: status.php');    
    
    

?>