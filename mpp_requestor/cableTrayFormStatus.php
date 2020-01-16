<?php        
  
  cableTrayRequestStatus(); 
  function cableTrayRequestStatus() {

      require('../filepath.php');
      $temp = $_POST['ticketNumber']; 
      $sql = "SELECT * FROM cableTrayRequests WHERE `id` = '$temp'";

      if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
?>

<script src="./libraries/faKit.js"></script>


<div class="col-lg-12">
    <br>
    <h2><b>Status</b></h2>
    <div class="row">


        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox2">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mlSmall"><b>Cable Tray Request</b></h4>
                    </div>
                    <br>
                    <br>


                    <div class="col-lg-12 mlSmall">

                        <h6><b>Request ID</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['id'] . "</b></h3>"; ?>

                        <br>

                        <h6><b>Status</b></h6>


                        <div class="row">
                            <div class="col-lg-8">
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['requestStatus'] ."</b></h3>";?>
                                <?php 
                                    if ($row['requestStatus'] == 'Submitted' || $row['requestStatus'] == 'Acknowledged' || $row['requestStatus'] == 'Completed') {
                                        echo '<p>Planner to follow up</p>';
                                    } 

                                    if ($row['requestStatus'] == 'Assigned' || $row['requestStatus'] == 'Installation in Progress') {
                                        echo '<p>Requestor to follow up</p>';
                                    }
                                ?>
                            </div>
                            <div class="col-lg-4">

                            </div>
                        </div>
                        <br>


                        <h6><b>Requestor Name</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['requestorName'] . "</b></h3>"; ?>

                        <br>

                        <h6><b>Requestor Department</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['requestorDepartment'] . "</b></h3>"; ?>

                        <br>

                        <h6><b>Requestor Email</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['requestorEmail'] . "</b></h3>"; ?>

                        <br>
                        <br>


                        <div class="row">

                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <i class="fal fa-warehouse-alt fa-3x mbSmall"></i>

                                <h6><b>Exchange</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['exchange'] . "</b></h3>"; ?>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <i class="fal fa-door-open fa-3x mbSmall"></i>
                                <h6><b>Room</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['room'] . "</b></h3>"; ?>

                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <i class="fal fa-calendar-day fa-3x mbSmall"></i>
                                <h6><b>Installation Date</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['startDate'] . "</b></h3>"; ?>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <i class="fal fa-calendar-day fa-3x mbSmall"></i>
                                <h6><b>Completion Date</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['endDate'] . "</b></h3>"; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox2">

                <div class="row">




                    <div class="col-lg-12">
                        <h4 class="mlSmall"><b>Timeline</b></h4>
                    </div>


                    <br>
                    <table class="table table-borderless mlSmall">

                        <tbody>
                            <tr>
                                <td>Status</td>
                                <td>Time</td>
                                <!-- <td>Expected</td> -->
                            </tr>
                            <tr>
                                <td>

                                    <h4>Submitted</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestTimestamp'] . "</h4>";?></td>
                                <!-- <td>-</td> -->
                            </tr>
                            <tr>
                                <td>
                                    <h4>Acknowledged</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusAcknowledged'] . "</h4>";?></td>
                                <td>

                                    <?php 
                                        # expcetd SLA date
                                        $expectedAcknowledgedDate = date('Y-m-d H:i:s', strtotime($row['requestTimestamp']. ' + 3 days'));
                                        // echo "<h4>". $expectedAcknowledgedDate . "</h4>";

                                        # convert requestTimestamp to DateTime format
                                        $convertedRT = new DateTime($expectedAcknowledgedDate);

                                        # convert SLA date to datetime format
                                        $expectedAcknowledgedDate = new DateTime($expectedAcknowledgedDate);

                                        # convert request date to datetime format
                                        $actualSubmittedDate = new DateTime($row['requestTimestamp']);
                                    ?>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <h4>Assigned</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusAssigned'] . "</h4>";?></td>
                                <td>

                                    <?php 
                                    $expectedAssignedDate = date('Y-m-d H:i:s', strtotime($row['requestStatusAcknowledged']. ' + 4 days'));
                                    // echo "<h4>". $expectedAssignedDate . "</h4>";

                                    $expectedAssignedDate = new DateTime($expectedAssignedDate);
                                    $actualAcknowledgedDate = new DateTime($row['requestStatusAcknowledged']);
                                ?>


                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Installation in Progress</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusInProgress'] . "</h4>";?></td>
                                <td>
                                    <!-- <?php $date = $row['requestStatusInProgress'];
                                    echo "<h4>". date('Y-m-d', strtotime($date. ' + 3 days')) . "</h4>"?> -->

                                    <?php 
                                    $expectedInProgressDate = date('Y-m-d H:i:s', strtotime($row['requestStatusAssigned']. ' + 4 days'));
                                    // echo "<h4>". $expectedInProgressDate . "</h4>";

                                    $expectedInProgressDate = new DateTime($expectedInProgressDate);
                                    $actualAssignedDate = new DateTime($row['requestStatusAssigned']);
                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Completed</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusCompleted'] . "</h4>";?></td>
                                <td>

                                    <!-- <?php $date = $row['requestStatusInProgress'];
                                    echo "<h4>". date('Y-m-d', strtotime($date. ' + 13 days')) . "</h4>"?> -->

                                    <?php 
                                    $expectedCompletedDate = date('Y-m-d H:i:s', strtotime($row['requestStatusInProgress']. ' + 4 days'));
                                    // echo "<h4>". $expectedCompletedDate . "</h4>";

                                    $expectedCompletedDate = new DateTime($expectedCompletedDate);
                                    $actualInProgressDate = new DateTime($row['requestStatusInProgress']);
                                ?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Closed</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusClosed'] . "</h4>";?></td>

                                <td>
                                    <?php 
                                    $expectedClosedDate = date('Y-m-d H:i:s', strtotime($row['requestStatusCompleted']. ' + 4 days'));
                                    // echo "<h4>". $expectedClosedDate . "</h4>";

                                    $expectedClosedDate = new DateTime($expectedClosedDate);
                                    $actualCompletedDate = new DateTime($row['requestStatusCompleted']);
                                ?>

                                </td>


                            </tr>
                        </tbody>




                    </table>
                </div>

                <?php


                $currentDatetime = new DateTime($currentDatetime);
                // echo $currentDatetime->format('Y-m-d H:i:s');
                ?>


                <div class="mlSmall">
                    <?php if ($row['requestStatus'] == "Submitted") {?>
                    <h6>Expected time remaining to Acknowledged: </h6>
                    <b><?php echo $testingSub = $expectedAcknowledgedDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes");?></b>
                    <?php  
                    $str = $testingSub ;

                    if (strpos($str, '+') !== false) {
                        echo '<b>(Overdue)</b>';
                    } else {
                        echo '<b>(On Time)</b>';
                    }

                    ?>
                    <?php } ?>


                    <?php if ($row['requestStatus'] == "Acknowledged") { ?>
                    <h6>Expected time remaining to Assigned: </h6>
                    <b><?php echo $testingSub = $expectedAssignedDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes"); ?></b>
                    <?php  

                    $str = $testingSub ;

                    if (strpos($str, '+') !== false) {
                        echo '<b>(Overdue)</b>';
                    } else {
                        echo '<b>(On Time)</b>';
                    }

                    ?>
                    <?php } ?>



                    <?php if ($row['requestStatus'] == "Assigned") { ?>
                    <h6>Expected time remaining to Installation in Progress: </h6>
                    <b><?php echo $testingSub = $expectedInProgressDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes"); ?></b>
                    <?php  

                    $str = $testingSub ;

                    if (strpos($str, '+') !== false) {
                        echo '<b>(Overdue)</b>';
                    } else {
                        echo '<b>(On Time)</b>';
                    }

                    ?>
                    <?php } ?>



                    <?php if ($row['requestStatus'] == "Installation in Progress") { ?>
                    <h6>Expected time remaining to Completed: </h6>
                    <b><?php echo $testingSub = $expectedCompletedDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes"); ?></b>
                    <?php  

                        $str = $testingSub ;
                        
                        if (strpos($str, '+') !== false) {
                            echo '<b>(Overdue)</b>';
                        } else {
                            echo '<b>(On Time)</b>';
                        }
                    
                    ?>
                    <?php } ?>
                </div>



            </div>

            <div class="bgcolors boundingBox2">

                <div class="row">

                    <div class="col-lg-12 mlSmall">



                        <h4><b>Actions</b></h4>
                        <?php 

                            if ($row['requestStatus'] == "Submitted") {
                            echo "Please check your email for your request submission";
                            // header('Location: spaceForm.php');  


                            }

                            if ($row['requestStatus'] == "Acknowledged") {
                            echo "Your request has been received";

                                if ($row['requestStatusAcknowledged'] == NULL) {
                                    $changeToAcknowledged = date('Y-m-d H:i:s');
                                    $sqlChangeToAcknowledged = "UPDATE spaceRequests
                                    SET requestStatusAcknowledged = '$changeToAcknowledged' where id = '$temp'";
                                    mysqli_query($conn, $sqlChangeToAcknowledged);

                                }
                            }


                            if ($row['requestStatus'] == "Assigned") {
                                echo "Please input all the relvant information into FNT Command<br>Please be reminded to enable Adobe Flash Player for the software to load properly<br><br>";

                                
                                if ($row['requestStatusAssigned'] == NULL) {
                                    $changeToAssigned = date('Y-m-d H:i:s');;
                                    $sqlChangeToAssigned= "UPDATE spaceRequests
                                    SET requestStatusAssigned = '$changeToAssigned' where id = '$temp'";
                                    mysqli_query($conn, $sqlChangeToAssigned);
                                }

                                if ($row['adminFileUpload'] != NULL) {
                                    echo "<div>


                                        <div style='display: inline-block'>
                                            <a class='btn statusCheckButton' href='https://singtel.fntcloud.sg/html' target = '_blank'>FNT Command</a>
                                            <a href=".$row['adminFileUpload']." class='btn statusCheckButton' download='layout_" . $row['id']."'>Download Layout</a>
                                        </div>
                                        

                                        <div>
                                            <img style='width: 500px; margin-top: 30px; margin-bottom: 30px; border-radius: 4px; ' src='".$row['adminFileUpload']."' >
                                        </div>

                                    
                                    </div>


                                    ";


                                }


                                
                                
                                echo "<div class='custom-control-lg custom-control custom-checkbox'>
                                <input type='checkbox' class='custom-control-input checks' value='accepted' id='toggle'>
                                <label class='custom-control-label' for='toggle'>I have entered all the relevant information
                                    into FNT
                                    DCIM App</label>
                                </div>
                                <br>";

                                ?>

                        <script type="text/javascript">
                        function submitForm(action) {
                            var form = document.getElementById('form1');
                            form.action = action;
                            form.submit();
                        }
                        </script>

                        <form id="form1">
                            <input id='checkStatus' class='btn selectorButton2' type="button"
                                onclick="submitForm('changeToInstallationInProgress.php?id=<?php echo $temp?>')"
                                value="Change State" />
                                
                        </form>

                        <?php
                            }

                        

                            if ($row['requestStatus'] == "Installation in Progress") {
                            echo "Please kindly adhere to the Image Guidelines below as to how the images should be taken before your upload them<br><br>";
                            

                                if ($row['requestStatusInProgress'] == NULL) {
                                    $changeToCompleted = date('Y-m-d H:i:s');;
                                    $sqlChangeToCompleted = "UPDATE spaceRequests
                                    SET requestStatusInProgress = '$changeToCompleted' where id = '$temp'";
                                    mysqli_query($conn, $sqlChangeToCompleted);
                                }
                                     
                                      
                                echo "<div class='custom-control-lg custom-control custom-checkbox'>
                                <input type='checkbox' class='custom-control-input checks' value='accepted' id='toggle'>
                                <label class='custom-control-label' for='toggle'>I have uploaded all the relevant images for
                                all the racks listed below</label>
                                </div>
                                <br>";


                                ?>  

                        <script type="text/javascript">
                        function submitForm(action) {
                            var form = document.getElementById('form1');
                            form.action = action;
                            form.submit();
                        }
                        </script>

                        <form id="form1">
                            <input id='checkStatus' class='btn selectorButton2' type="button"
                                onclick="submitForm('changeToCompleted.php?id=<?php echo $temp?>&requestorFileUpload=<?php echo $requestorFileUpload?>')"
                                value="Change State" />
                            <!-- <input type='submit' value='Save name' name='but_upload'> -->

                        </form>

                        <?php
                                echo $temp;
                                echo $requestorFileUpload;

                            }

                            if ($row['requestStatus'] == "Completed") {
                                echo "Your request has been completed.<br>Pleaese give us some time to review your images and confirm the installation before closing this request.";
                                if ($row['requestStatusCompleted'] == NULL) {
                                    $changeToClosed = date('Y-m-d H:i:s');
                                    $sqlChangeToClosed = "UPDATE spaceRequests
                                    SET requestStatusCompleted = '$changeToClosed' where id = '$temp'";
                                    mysqli_query($conn, $sqlChangeToClosed);
                                }
                            }

                            if ($row['requestStatus'] == "Closed") {
                                echo "Your request has been closed.<br>Please keep this Request ID should you need to refer to it in the future.";
                                if ($row['requestStatusClosed'] == NULL) {
                                    $changeToClosed = date('Y-m-d H:i:s');
                                    $sqlChangeToClosed = "UPDATE spaceRequests
                                    SET requestStatusClosed = '$changeToClosed' where id = '$temp'";
                                    mysqli_query($conn, $sqlChangeToClosed);
                                }
                            }

                            if ($row['requestStatus'] == "Declined") {
                                echo "Your request has been declined because of the following reason/s<br><br>";
                                echo $row['remarks']; 

                            }
                        ?>
                    </div>


                </div>






            </div>


        </div>






    </div>




    <h2 class="topSpaceMid"><b>Metrics</b></h2>








    <div class="row">


        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <!-- <img src="https://img.icons8.com/nolan/64/000000/google-web-search.png"
                                    class="mlExtraSmall metricsImage"> -->
                                <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>


                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 1</b></h4>
                                <h6 class="mlSmall">Specifications</h6>
                            </div>
                        </div>

                        <br>

                    </div>


                    <div class="col-lg-12 mlSmall">

                        <!-- <i class="fad fa-server fa-3x"></i> -->

                        <h6><b>Rack Location</b></h6>
                        <?php 
                        if ($row['rackLocation'] != NULL) {
                            echo "<h3 class='valueEmphasis'><b>" . $row['rackLocation'] . "</b></h3>";
                        } else {
                            echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                        }; ?>

                        <br>

                        <h6><b>FDF Rack Location</b></h6>
                        <?php 
                        if ($row['fdfRackLocation'] != NULL) {
                            echo "<h3 class='valueEmphasis'><b>" . $row['fdfRackLocation'] . "</b></h3>";
                        } else {
                            echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                        }; ?>

                        <br>



                    </div>

                </div>
            </div>
        </div>




        <?php

        if ($row['requestStatus'] == "Installation in Progress") {
        
        ?>

        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors verificationBoundingBox">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <i class="fal fa-camera-retro fa-3x mlSmall2 mtSmall"></i>

                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 1</b></h4>
                                <h6 class="mlSmall">Rack Verification</h6>
                            </div>
                        </div>

                        <br>

                    </div>



                    <div class='col-lg-12 mlSmall'>



                        <!-- adding image upload together with status update -->
                        <!-- <div class="form-group">
                            <label class="control-label">Upload Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="browse" accept='.jpeg, .png, .jpg'
                                    onchange='previewFiles()' name="image">
                                <label class="custom-file-label" for="browse"></label>
                                <div id='preview'></div>
                            </div>
                        </div> -->


                        <!-- adding image upload together with status update -->



                        <!-- <form method='post' enctype='multipart/form-data'>
                            <h6><b>Rack Front</b></h6>
                            <input type='file' name='file' onchange='previewFiles()' />
                            <div id='preview'></div>
                            <input type='submit' value='Save name' name='but_upload'>
                        </form> -->

                        <form method='POST' action='changeToCompleted.php?id=<?php echo $temp ?>'
                            enctype='multipart/form-data'>
                            <h6><b>Rack Front</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackFront1" />

                            <h6><b>Rack Floor</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackFloor1" />

                            <h6><b>Rack Back</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackBack1" />

                            <h6><b>Breaker Label</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breakerLabel1" />

                            <h6><b>Breakers</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breaker1" />

                            <h6><b>Sub PDU</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="subPdu1" />

      
                            <!-- <div id='preview'></div> -->
                            <input type='submit' value='Save name' name='but_upload'>
                        </form> 








                        <br>
                        <br>



                    </div>
                </div>
            </div>
        </div>



      




        <?php } ?>

    </div>




   







</div>


<?php
                  }    
                  
              }  
                         
          }
  
      }
?>