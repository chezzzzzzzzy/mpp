<?php        
  
  ssuRequestStatus(); 
  function ssuRequestStatus() {

      require 'connection.php';
      $temp = $_POST['ticketNumber']; 
      $sql = "SELECT * FROM ssuRequests WHERE `requestId` = '$temp'";

      if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){

?>
<!-- start of ticketInfo -->
<div class="col-lg-12">
    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <h5>Ticket ID</h5>
            <?php echo "<h2>" . $row['requestId'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Status</h5>
            <div class="row">
                <div class="col-lg-5">
                    <?php echo "<h2>" . $row['requestStatus'] ."</h2>";?>
                </div>
                <div class="col-lg-2">
                    <?php       
                    if ($row['requestStatus'] == 'Submitted') {
                    ?>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets7.lottiefiles.com/datafiles/Wv6eeBslW1APprw/data.json"
                        mode="bounce" background="transparent" speed=".7" style="width: 40px; height: 40px;" autoplay>
                    </lottie-player>
                    <?php
                    }
                    ?>
                </div>

            </div>
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
    <h2 class="topSpaceMid"><b>Requested</b></h2>
    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <h5>Number of Ports</h5>
            <?php echo "<h2>" . $row['numberOfPorts'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Transmission Type</h5>
            <?php echo "<h2>" . $row['transmissionType'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Interfacing Type</h5>
            <?php echo "<h2>" . $row['interfacingType'] . "</h2>"; ?>
        </div>
    </div>

    <h5 class="topSpaceLow">Installation Date (Start)</h5>
    <?php echo "<h2>" . $row['startDate'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Completion Date (End)</h5>
    <?php echo "<h2>" . $row['endDate'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Room</h5>
    <?php echo "<h2>PCM " . $row['room'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Exchange</h5>
    <?php echo "<h2>" . $row['exchange'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Request Timestamp</h5>
    <?php echo "<h2>" . $row['requestTimestamp'] . "</h2>"; ?>
</div>
<!-- end of request -->

<!-- start of given -->
<div class="col-lg-12">
    <br>
    <br>
    <br>
    <h2><b>Outcome</b></h2>
    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <h5>Number of Ports</h5>
            <?php echo "<h2>" . $row['numberOfPorts'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Transmission Type</h5>
            <?php echo "<h2>" . $row['transmissionType'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Interfacing Type</h5>
            <?php echo "<h2>" . $row['interfacingType'] . "</h2>"; ?>
        </div>
    </div>

    <h5 class="topSpaceLow">End Date</h5>
    <?php echo "<h2>" . $row['endDate'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Room</h5>
    <?php echo "<h2>PCM " . $row['room'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Exchange</h5>
    <?php echo "<h2>" . $row['exchange'] . "</h2>"; ?>

    <h5 class="topSpaceLow">SLA</h5>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Timestamp</th>
            </tr>
        </thead>

        <tbody>
        <tr>
                <td>
                    <h2>Submitted</h2>
                </td>
                <td><?php echo "<h2>" . $row['requestTimestamp'] . "</h2>";?></td>
            </tr>
            <tr>
                <td>
                    <h2>Acknowledged</h2>
                </td>
                <td><?php echo "<h2>" . $row['timestamp_inprogress'] . "</h2>";?></td>
            </tr>
            <tr>
                <td>
                    <h2>Assigned</h2>
                </td>
                <td><?php echo "<h2>" . $row['timestamp_assigned'] . "</h2>";?></td>
            </tr>
            <tr>
                <td>
                    <h2>Installation in Progress</h2>
                </td>
                <td><?php echo "<h2>" . $row['timestamp_x'] . "</h2>";?></td>
            </tr>
            <tr>
                <td>
                    <h2>Completed</h2>
                </td>
                <td><?php echo "<h2>" . $row['timestamp_completed'] . "</h2>";?></td>
            </tr>
            <tr>
                <td>
                    <h2>Closed</h2>
                </td>
                <td><?php echo "<h2>" . $row['timestamp_closed'] . "</h2>";?></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- end of given -->


<?php
                  }    
                  
              }  
                         
          }
  
      }
?>