<?php        
  
  generalRequestStatus(); 
  function generalRequestStatus() {

      require 'connection.php';
      $temp = $_POST['ticketNumber']; 
      $sql = "SELECT * FROM generalRequests WHERE `id` = '$temp'";

      if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){

?>
<!-- start of ticketInfo -->
<div class="col-lg-12">
    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <h5>Ticket ID</h5>
            <?php echo "<h2>" . $row['id'] . "</h2>"; ?>
        </div>
       
    </div>

    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <h5>Requestor Name</h5>
            <?php echo "<h2>" . $row['requestorName'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Requestor Department</h5>
            <?php echo "<h2>" . $row['requestorDepartment'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Requestor Email</h5>
            <?php echo "<h2>" . $row['requestorEmail'] . "</h2>"; ?>
        </div>
    </div>
</div>
<!-- end of ticketInfo -->

<!-- start of request -->
<div class="col-lg-12">
    <h2 class="topSpaceMid"><b>Query</b></h2>
    <div class="row topSpaceLow">
        <div class="col-lg-6">
            <h5>Query</h5>
            <?php echo "<h2>" . $row['query'] . "</h2>"; ?>
        </div>
       
    </div>

  
</div>
<!-- end of request -->



<?php
                  }    
                  
              }  
                         
          }
  
      }
?>