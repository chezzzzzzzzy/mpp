<?php
header('Location: status.php');    

require('../filepath.php');



$temp = $_GET['id'];


$file_path = "../" . 'mpp_storage' . "/" . $temp . "/" ;
$rack1Init = "../" . 'mpp_storage' . "/" . $temp . "/Rack 1" . "/" ;
$rack2Init = "../" . 'mpp_storage' . "/" . $temp . "/Rack 2" . "/" ;
$rack3Init = "../" . 'mpp_storage' . "/" . $temp . "/Rack 3" . "/" ;
$rack4Init = "../" . 'mpp_storage' . "/" . $temp . "/Rack 4" . "/" ;
$rack5Init = "../" . 'mpp_storage' . "/" . $temp . "/Rack 5" . "/" ;

// echo $file_path;


if (!file_exists($file_path)) {
    mkdir($file_path);
    mkdir($rack1Init);
    mkdir($rack2Init);
    mkdir($rack3Init);
    mkdir($rack4Init);
    mkdir($rack5Init);

}


$rackFront1 = $_FILES['rackFront1']['name'];
$rackFloor1 = $_FILES['rackFloor1']['name'];
$rackBack1 = $_FILES['rackBack1']['name'];
$breakerLabel1 = $_FILES['breakerLabel1']['name'];
$breaker1 = $_FILES['breaker1']['name'];
$subPdu1 = $_FILES['subPdu1']['name'];

$rackFront2 = $_FILES['rackFront2']['name'];



$target_dir = $rack1Init;
$target_dir2 = $rack2Init;


$target_file = $target_dir . basename($_FILES["rackFront1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["rackFloor1"]["name"]);
$target_file3 = $target_dir . basename($_FILES["rackBack1"]["name"]);
$target_file4 = $target_dir . basename($_FILES["breakerLabel1"]["name"]);
$target_file5 = $target_dir . basename($_FILES["breaker1"]["name"]);
$target_file6 = $target_dir . basename($_FILES["subPdu1"]["name"]);


$target_file7 = $target_dir2 . basename($_FILES["rackFront2"]["name"]);


// echo $target_file;
// echo $target_file2;
// echo $target_file3;
// echo $target_file4;
// echo $target_file5;
// echo $target_file6;



// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file7,PATHINFO_EXTENSION));


// Valid file extensions
$extensions_arr = array("jpg","jpeg","png");


    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

    
        // Upload file
        move_uploaded_file($_FILES['rackFront1']['tmp_name'],$target_dir.$rackFront1);
        move_uploaded_file($_FILES['rackFloor1']['tmp_name'],$target_dir.$rackFloor1);
        move_uploaded_file($_FILES['rackBack1']['tmp_name'],$target_dir.$rackBack1);
        move_uploaded_file($_FILES['breakerLabel1']['tmp_name'],$target_dir.$breakerLabel1);
        move_uploaded_file($_FILES['breaker1']['tmp_name'],$target_dir.$breaker1);
        move_uploaded_file($_FILES['subPdu1']['tmp_name'],$target_dir.$subPdu1);

        move_uploaded_file($_FILES['rackFront2']['tmp_name'],$target_dir2.$rackFront2);


    }


    // Check extension
    if( in_array($imageFileType2,$extensions_arr) ){

    
        // Upload file
        move_uploaded_file($_FILES['rackFront2']['tmp_name'],$target_dir2.$rackFront2);


    }


$updateStatus = "UPDATE powerRequests SET requestStatus = 'Completed', requestorFileUpload = '$file_path' where id = '$temp' ";
// echo $updateStatus;
mysqli_query($conn, $updateStatus);
    
    

?>