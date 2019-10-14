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
                              <h5>Ticket Number</h5>
                              <?php echo "<h2>" . $row['id'] . "</h2>"; ?>
                          </div>
                          <div class="col-lg-4">
                              <h5>Status</h5>
                              <?php echo "<h2>" . $row['requestStatus'] . "</h2>"; ?>
                          </div>
                      </div>
                  </div>
                  <!-- end of ticketInfo -->

                  <!-- start of request -->
                  <div class="col-lg-12">
                        <h2 class="topSpaceMid"><b>Requested</b></h2>
                        <div class="row topSpaceLow">
                            <div class="col-lg-4">
                                <h5>Breaker Size</h5>  
                                <?php echo "<h2>" . $row['breakerSize'] . "</h2>"; ?>
                            </div>
                            <div class="col-lg-4">
                                <h5>Breaker Quantity</h5>  
                                <?php echo "<h2>" . $row['breakerQuantity'] . "</h2>"; ?>
                            </div>
                            <div class="col-lg-4">
                                
                            </div>
                        </div>

                        <h5 class="topSpaceLow">Rack Location</h5>  
                        <?php echo "<h2>" . $row['rackLocation'] . "</h2>"; ?>

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
                                <h5>Breaker Size</h5>  
                                <?php echo "<h2>" . $row['breakerSize'] . "</h2>"; ?>
                            </div>
                            <div class="col-lg-4">
                                <h5>Breaker Quantity</h5>  
                                <?php echo "<h2>" . $row['breakerQuantity'] . "</h2>"; ?>
                            </div>
                            <div class="col-lg-4">
                                
                            </div>
                        </div>

                        <h5 class="topSpaceLow">Rack Location</h5>  
                        <?php echo "<h2>" . $row['rackLocation'] . "</h2>"; ?>

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
                                        <td><h2>Submitted</h2></td>
                                        <td><?php echo "<h2>" . $row['requestTimestamp'] . "</h2>";?></td>
                                    </tr>
                                    <tr>
                                        <td><h2>In Progress</h2></td>
                                        <td><?php echo "<h2>" . $row['timestamp_inprogress'] . "</h2>";?></td>
                                    </tr>
                                    <tr>
                                        <td><h2>Assigned</h2></td>
                                        <td><?php echo "<h2>" . $row['timestamp_assigned'] . "</h2>";?></td>
                                    </tr>
                                    <tr>
                                        <td><h2>Plan?</h2></td>
                                        <td><?php echo "<h2>" . $row['timestamp_x'] . "</h2>";?></td>
                                    </tr>
                                    <tr>
                                        <td><h2>Completed</h2></td>
                                        <td><?php echo "<h2>" . $row['timestamp_completed'] . "</h2>";?></td>
                                    </tr>
                                    <tr>
                                        <td><h2>Closed</h2></td>
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
