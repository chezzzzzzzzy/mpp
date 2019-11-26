
<?php
//  require 'connection.php';
//  $temp = $_POST['ticketNumber']; 
//  $sql = "SELECT * FROM spaceRequests WHERE `requestId` = '$temp'";

//  if($result = mysqli_query($conn, $sql)){
//      if(mysqli_num_rows($result) > 0){
//          while($row = mysqli_fetch_array($result)){

         

//              // Do some stuff with it here
//              $file_path = 'upload' . "/" . $temp . "/";

//              if (!file_exists($file_path)) {
//                  mkdir($file_path);
//              }
//              if(isset($_POST['but_upload'])){

 
     
//                  $name = $_FILES['file']['name'];
//                  $target_dir = $file_path;
//                  $target_file = $target_dir . basename($_FILES["file"]["name"]);
 
//                  // Select file type
//                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
//                  // Valid file extensions
//                  $extensions_arr = array("jpg","jpeg","png");
 
//                      // Check extension
//                      if( in_array($imageFileType,$extensions_arr) ){
                     
//                          // Insert record
//                          $query = "insert into images(name) values('".$name."')";
//                          mysqli_query($conn,$query);
                     
//                          // Upload file
//                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
 
//                      }
                 
//              }




//          }
//      }
//  }


 ?>
