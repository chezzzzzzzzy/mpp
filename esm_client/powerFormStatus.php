<?php        
  
  powerRequestStatus(); 
  function powerRequestStatus() {

      require 'connection.php';
      $temp = $_POST['ticketNumber']; 
      $sql = "SELECT * FROM powerRequests WHERE `id` = '$temp'";

      if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
?>
<!-- start of ticketInfo -->
<div class="col-lg-12">
    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <!-- ticket number is defined as the id for the entire list of requests -->
            <h5>Ticker Number</h5>
            <?php echo "<h2>ST20191011X</h2>"; ?>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <!-- request number is defined as the id for each individual request -->
            <h5>Request Number</h5>
            <?php echo "<h2>" . $row['id'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">

            <h5>Status</h5>
            <div class="row">
                <div class="col-lg-5">
                    <?php echo "<h2>" . $row['requestStatus'] ."</h2>";?>
                </div>
                <div class="col-lg-7">
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


    <!-- start of rack 1 -->
    <h4 class="topSpaceMid"><b>Rack 1</b></h4>
    <div class="row topSpaceLow ">
        <div class="col-lg-4">
            <h5>Rack Location</h5>
            <?php echo "<h2>" . $row['rackLocation1'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Size</h5>
            <?php echo "<h2>" . $row['breakerSize1'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Quantity</h5>
            <?php echo "<h2>" . $row['breakerQuantity1'] . "</h2>"; ?>
        </div>
    </div>
    <!-- end of rack 1 -->

    <!-- start of rack 2 -->
    <h4 class="topSpaceMid"><b>Rack 2</b></h4>
    <div class="row topSpaceLow ">
        <div class="col-lg-4">
            <h5>Rack Location</h5>
            <?php echo "<h2>" . $row['rackLocation2'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Size</h5>
            <?php echo "<h2>" . $row['breakerSize2'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Quantity</h5>
            <?php echo "<h2>" . $row['breakerQuantity2'] . "</h2>"; ?>
        </div>
    </div>
    <!-- end of rack 2 -->

    <!-- start of rack 3 -->
    <h4 class="topSpaceMid"><b>Rack 3</b></h4>
    <div class="row topSpaceLow ">
        <div class="col-lg-4">
            <h5>Rack Location</h5>
            <?php echo "<h2>" . $row['rackLocation3'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Size</h5>
            <?php echo "<h2>" . $row['breakerSize3'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Quantity</h5>
            <?php echo "<h2>" . $row['breakerQuantity3'] . "</h2>"; ?>
        </div>
    </div>
    <!-- end of rack 3 -->

    <!-- start of rack 4 -->
    <h4 class="topSpaceMid"><b>Rack 4</b></h4>
    <div class="row topSpaceLow ">
        <div class="col-lg-4">
            <h5>Rack Location</h5>
            <?php echo "<h2>" . $row['rackLocation4'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Size</h5>
            <?php echo "<h2>" . $row['breakerSize4'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Quantity</h5>
            <?php echo "<h2>" . $row['breakerQuantity4'] . "</h2>"; ?>
        </div>
    </div>
    <!-- end of rack 4 -->


    <!-- start of rack 5 -->
    <h4 class="topSpaceMid"><b>Rack 5</b></h4>
    <div class="row topSpaceLow ">
        <div class="col-lg-4">
            <h5>Rack Location</h5>
            <?php echo "<h2>" . $row['rackLocation5'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Size</h5>
            <?php echo "<h2>" . $row['breakerSize5'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Breaker Quantity</h5>
            <?php echo "<h2>" . $row['breakerQuantity5'] . "</h2>"; ?>
        </div>
    </div>
    <!-- end of rack 5 -->




    <h5 class="topSpaceLow">Power Type</h5>
    <?php echo "<h2>" . $row['powerType'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Exchange</h5>
    <?php echo "<h2>" . $row['exchange'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Room</h5>
    <?php echo "<h2>" . $row['room'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Timestamp</h5>
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
        <div class="col-lg-4 ">
            <h5>Breaker</h5>
            <?php echo "<h2>" . $row['breaker'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4 ">
            <h5>Breaker Size</h5>
            <?php echo "<h2>" . $row['breakerSize'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4 ">
            <h5>Breaker Quantity</h5>
            <?php echo "<h2>" . $row['breakerQuantity'] . "</h2>"; ?>
        </div>
    </div>

    <div class="row topSpaceLow">
        <div class="col-lg-4">
            <h5>Main PDU</h5>
            <?php echo "<h2>" . $row['mainPdu'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">
            <h5>Sub PDU</h5>
            <?php echo "<h2>" . $row['subPdu'] . "</h2>"; ?>
        </div>
        <div class="col-lg-4">

        </div>
    </div>


    <h5 class="topSpaceLow">Feed</h5>
    <?php echo "<h2>" . $row['feed'] . "</h2>"; ?>


    <h5 class="topSpaceLow">Rack Location</h5>
    <?php echo "<h2>" . $row['rackLocation'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Exchange</h5>
    <?php echo "<h2>" . $row['exchange'] . "</h2>"; ?>

    <h5 class="topSpaceLow">Room</h5>
    <?php echo "<h2>" . $row['room'] . "</h2>"; ?>



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
                    <h2>In Progress</h2>
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
                    <h2>Plan?</h2>
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

    <?php 

                                if ($row['requestStatus'] == "Submitted") {
                                    echo "xxx";
                                }

                                if ($row['requestStatus'] == "Installed") {
                                    echo "<form>
                                    <div class='form-group'>
                                    <h5 class='topSpaceLow'>Image Upload</h5>
                                    <input id='browse' type='file' onchange='previewFiles()' multiple>
                                    <div id='preview'></div>
                                    </div>
                                    </form>";
                                    echo "<button type='submit' class='btn btn-primary ordinalButton marginDec' method='post'>Submit</button>";
                                }
                            
                            ?>
</div>
<!-- end of given -->

<?php
                  }    
                  
              }  
                         
          }
  
      }
?>