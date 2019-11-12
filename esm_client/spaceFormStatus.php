<?php
  spaceRequestStatus(); 
  function spaceRequestStatus() {
      require 'connection.php';
      $temp = $_POST['ticketNumber']; 
      $sql = "SELECT * FROM spaceRequests WHERE `requestId` = '$temp'";
      if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0 ){
              while($row = mysqli_fetch_array($result)){
?>

<script src="faKit.js"></script>

<!-- start of ticketInfo -->





<!-- start of given -->
<div class="col-lg-12">
    <br>

    <h2><b>Status</b></h2>





    <script>
    $('#toggle').click(function() {
        //check if checkbox is checked
        if ($(this).is(':checked')) {

            $('#sendNewSms').removeAttr('disabled'); //enable input

        } else {
            $('#sendNewSms').attr('disabled', true); //disable input
        }
    });
    </script>



    <div class="row">


        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox2">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mlSmall"><b>Space Request</b></h4>


                    </div>
                    <br>
                    <br>





                    <div class="col-lg-12 mlSmall">

                        <h6><b>Request ID</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['requestId'] . "</b></h3>"; ?>

                        <br>


                        <h6><b>Status</b></h6>


                        <div class="row">
                            <div class="col-lg-5">
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['requestStatus'] ."</b></h3>";?>

                                <?php 
                                    if ($row['requestStatus'] == 'Submitted' || $row['requestStatus'] == 'Acknowledged' || $row['requestStatus'] == 'Completed') {
                                        echo '<p>Admin to follow up</p>';
                                    } 

                                    if ($row['requestStatus'] == 'Assigned' || $row['requestStatus'] == 'In Progress') {
                                        echo '<p>Requestor to follow up</p>';
                                    }

                                ?>





                            </div>
                            <div class="col-lg-7">

                                <?php       
                                    if ($row['requestStatus'] == 'Submitted') {
                                    ?>
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                                </script>
                                <lottie-player src="https://assets7.lottiefiles.com/datafiles/Wv6eeBslW1APprw/data.json"
                                    mode="bounce" background="trxansparent" speed=".7"
                                    style="width: 40px; height: 40px; margin-left: -80px; margin-top: -4px;" autoplay>
                                </lottie-player>

                                <?php
                                    }
                                ?>




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
                                <!-- <img src="https://img.icons8.com/nolan/64/000000/city.png"> -->
                                <i class="fal fa-warehouse-alt fa-3x mbSmall"></i>

                                <h6><b>Exchange</b></h6>
                                <?php 
                                    if ($row['requestStatus'] == 'Assigned' || $row['requestStatus'] == 'In Progress' || $row['requestStatus'] == 'Completed' || $row['requestStatus'] == 'Closed') {
                                        echo "<h3 class='valueEmphasis'><b>" . $row['exchange'] . "</b></h3>"; 
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>"; 
                                    }
                                ?>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <i class="fal fa-door-open fa-3x mbSmall"></i>
                                <h6><b>Room</b></h6>
                                <?php 
                                    if ($row['requestStatus'] == 'Assigned' || $row['requestStatus'] == 'In Progress' || $row['requestStatus'] == 'Completed' || $row['requestStatus'] == 'Closed') {
                                        echo "<h3 class='valueEmphasis'><b>" . $row['room'] . "</b></h3>"; 
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>"; 
                                    }
                                ?>
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
                        <thead>
                            <!-- <tr>
                      <th scope="col">Status</th>
                      <th scope="col">Timestamp</th>
                  </tr> -->
                        </thead>

                        <tbody>
                            <tr>
                                <td>Status</td>
                                <td>Actual</td>
                                <td>Expected</td>
                            </tr>
                            <tr>
                                <td>

                                    <h4>Submitted</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestTimestamp'] . "</h4>";?></td>
                                <td>-</td>

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
                                        echo "<h4>". $expectedAcknowledgedDate . "</h4>";


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
                                    echo "<h4>". $expectedAssignedDate . "</h4>";

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
                                    echo "<h4>". $expectedInProgressDate . "</h4>";

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
                                    echo "<h4>". $expectedCompletedDate . "</h4>";

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
                                    echo "<h4>". $expectedClosedDate . "</h4>";

                                    $expectedClosedDate = new DateTime($expectedClosedDate);
                                    $actualCompletedDate = new DateTime($row['requestStatusCompleted']);
                                ?>

                                </td>


                            </tr>
                        </tbody>




                    </table>
                </div>

                <?php
                $currentDatetime = new DateTime();
                // echo $currentDatetime->format('Y-m-d H:i:s');
                ?>


                <div class="mlSmall">


                    <?php if ($row['requestStatus'] == "Submitted") {?>
                    <h5>Expected time remaining before Acknowledged: </h5>
                    <b><?php echo $diff = $expectedAcknowledgedDate->diff($currentDatetime)->format("%d days, %h hours and %i minutes"); 

                        // if ($diff == 0 || $diff == '0') {
                        //     echo "Time's up";
                        // }
                    
                    
                    ?></b>

                    <?php } ?>


                    <?php if ($row['requestStatus'] == "Acknowledged") { ?>
                    <h5>Expected time remaining before Assigned: </h5>
                    <b><?php echo $expectedAssignedDate->diff($currentDatetime)->format("%d days, %h hours and %i minutes"); ?></b>

                    <?php } ?>



                    <?php if ($row['requestStatus'] == "Assigned") { ?>
                    <h5>Expected time remaining before In Progress: </h5>
                    <b><?php echo $expectedInProgressDate->diff($currentDatetime)->format("%d days, %h hours and %i minutes"); ?></b>

                    <?php } ?>





                    <?php if ($row['requestStatus'] == "In Progress") { ?>
                    <h5>Expected time remaining before Completed: </h5>
                    <b><?php echo $expectedCompletedDate->diff($currentDatetime)->format("%d days, %h hours and %i minutes"); ?></b>

                    <?php } ?>




                </div>
















            </div>

            <div class="bgcolors boundingBox2">

                <div class="row">

                    <div class="col-lg-12 mlSmall">



                        <h4><b>Actions</b></h4>
                        <?php 

                            if ($row['requestStatus'] == "Submitted") {
                            echo "Please check your email for a your request submission";
                            // header('Location: spaceForm.php');  



                           
                            }

                            if ($row['requestStatus'] == "Acknowledged") {
                            echo "Your request has been received";

                                if ($row['requestStatusAcknowledged'] == NULL) {
                                    $changeToAcknowledged = date('Y-m-d H:i:s');
                                    $sqlChangeToAcknowledged = "UPDATE spaceRequests
                                    SET requestStatusAcknowledged = '$changeToAcknowledged' where requestID = '$temp'";
                                    mysqli_query($conn, $sqlChangeToAcknowledged);

                                }
                            }

                      



                            if ($row['requestStatus'] == "Assigned") {
                                
                                if ($row['requestStatusAssigned'] == NULL) {
                                    $changeToAssigned = date('Y-m-d H:i:s');;
                                    $sqlChangeToAssigned= "UPDATE spaceRequests
                                    SET requestStatusAssigned = '$changeToAssigned' where requestID = '$temp'";
                                    mysqli_query($conn, $sqlChangeToAssigned);
                                }
                                // header('Location: spaceFormStatusAction.php');  
                                // echo "Your request has been updated with some other relevant information. <br><br>
                                // Please refer to the following attachment for placement of your equipment. <br><br>
                                // Please input the relevant information into the FNT DCIM App before you continue to the next step. <br><br>";
                                
                                // // header('Location: spaceFormStatusAction.php');


                                // $updateStatus = "UPDATE spaceRequests
                                // SET requestStatus = 'In Progress' where requestID = '$temp'";
                                // mysqli_query($conn, $updateStatus);

                   
                                // echo "<div class='custom-control custom-checkbox'>
                                // <input type='checkbox' class='custom-control-input' id='toggle'>
                                // <label class='custom-control-label' for='toggle'>I have entered all the relevant information
                                //     into FNT
                                //     DCIM App</label>
                                // </div>";


                                // echo "<button type='submit' class='btn selectorButton2' id='checkStatus' method='post'>Change Status</button>";

                            }





                            if ($row['requestStatus'] == "In Progress") {
                            // echo "Please compress all your pictures into a folder before submitting it as a ZIP file.  <br><br>";

                                



                            //     $updateStatus = "UPDATE spaceRequests
                            //     SET requestStatus = 'Completed' where requestID = '$temp'";
                            //     mysqli_query($conn, $updateStatus);

                            //     if( $row['rackSizeLength1'] != NULL) {

                            //         echo "<h6><b>Rack 1</b></h6>";


                            //         echo "<form>
                            //         <div class='form-group'>
                            //             <h6 class='topSpaceLow'><b>Rack Front</b></h6>
                            //             <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            //             <div id='preview'></div>

                            //             <h6 class='topSpaceLow'><b>Rack Back</b></h6>
                            //             <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            //             <div id='preview'></div>

                            //             <h6 class='topSpaceLow'><b>Rack Left</b></h6>
                            //             <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            //             <div id='preview'></div>

                            //             <h6 class='topSpaceLow'><b>Rack Right</b></h6>
                            //             <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            //             <div id='preview'></div>
                            //         </div>
                            //         </form>";
                            //         echo "<br>";
                            //     } 

                                if( $row['rackSizeLength2'] != NULL) {

                                    echo "<h6><b>Rack 2</b></h6>";


                                    echo "<form>
                                    <div class='form-group'>
                                        <h6 class='topSpaceLow'><b>Rack Front</b></h6>
                                        <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                                        <div id='preview'></div>

                                        <h6 class='topSpaceLow'><b>Rack Back</b></h6>
                                        <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                                        <div id='preview'></div>

                                        <h6 class='topSpaceLow'><b>Rack Left</b></h6>
                                        <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                                        <div id='preview'></div>

                                        <h6 class='topSpaceLow'><b>Rack Right</b></h6>
                                        <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                                        <div id='preview'></div>
                                    </div>
                                    </form>";
                                    echo "<br>";
                                } 

                                

                                echo "<button type='submit' class='btn selectorButton2' method='post'>Submit</button>";

                                if ($row['requestStatusInProgress'] == NULL) {
                                    $changeToCompleted = date('Y-m-d H:i:s');;
                                    $sqlChangeToCompleted = "UPDATE spaceRequests
                                    SET requestStatusInProgress = '$changeToCompleted' where requestID = '$temp'";
                                    mysqli_query($conn, $sqlChangeToCompleted);
                                }


                              

                                
                                // old upload

                                // echo "<form>
                                // <div class='form-group'>
                                // <h4 class='topSpaceLow'><b>Image Upload</b></h4>
                                // <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()' multiple>
                                // <div id='preview'></div>
                                // </div>
                                // </form>";
                                // echo "<button type='submit' class='btn selectorButton2' method='post'>Submit</button>";

                            }

                            if ($row['requestStatus'] == "Completed") {

                            echo "Your request has been completed.<br>Pleaese give us some time to review your images and confirm the installation before closing this request.";

                                if ($row['requestStatusCompleted'] == NULL) {
                                    $changeToClosed = date('Y-m-d H:i:s');
                                    $sqlChangeToClosed = "UPDATE spaceRequests
                                    SET requestStatusCompleted = '$changeToClosed' where requestID = '$temp'";
                                    mysqli_query($conn, $sqlChangeToClosed);
                                }

            

                            }

                            if ($row['requestStatus'] == "Closed") {

                                echo "Your request has been closed.<br>Please keep this Request ID should you need to refer to it in the future.";

                                if ($row['requestStatusClosed'] == NULL) {
                                    $changeToClosed = date('Y-m-d H:i:s');
                                    $sqlChangeToClosed = "UPDATE spaceRequests
                                    SET requestStatusClosed = '$changeToClosed' where requestID = '$temp'";
                                    mysqli_query($conn, $sqlChangeToClosed);
                                }



                            }

                        ?>
                    </div>


                </div>






            </div>


        </div>






    </div>





    <h2 class="topSpaceMid"><b>Metrics</b></h2>




    <!-- start of rack 1 -->
    <?php if ($row['rackSizeLength1'] != NULL || $row['rackSizeBreadth1'] != NULL || $row['breakerSize1'] != NULL || $row['breakerQuantity1'] != NULL) {
        ?>




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
                        if ($row['rackLocation1'] != NULL) {
                            echo "<h3 class='valueEmphasis'><b>" . $row['rackLocation1'] . "</b></h3>";
                        } else {
                            echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                        }; ?>

                        <br>

                        <h6><b>Rack Type</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackType'] .  "</b></h3>"; ?>
                        <br>

                        <h6><b>Rack Length</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeLength1'] .  "mm</b></h3>"; ?>

                        <br>

                        <h6><b>Rack Breadth</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeBreadth1'] .  "mm</b></h3>"; ?>

                        <br>

                        <h6><b>Rack Height</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeHeight'] .  "mm</b></h3>"; ?>


                        <br>

                        <h6><b>Rack Weight</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackWeight1'] .  "kg</b></h3>"; ?>






                    </div>

                </div>
            </div>
        </div>



        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <!-- <img src="https://img.icons8.com/nolan/64/000000/processor.png" class="mlExtraSmall"> -->
                                <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>

                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 1</b></h4>
                                <h6 class="mlSmall">Breaker</h6>
                            </div>
                        </div>



                        <br>



                    </div>



                    <div class="col-lg-12 mlSmall">

                        <h6><b>Breaker Name</b></h6>


                        <div class="row">

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerNameB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerNameB1'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerNameB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerNameB1'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?>
                                </h6>
                            </div>

                        </div>






                        <br>
                        <h6><b>Breaker Size</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerSize1'] .  "A</b></h3>"; ?>

                        <br>
                        <h6><b>Breaker Quantity</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerQuantity1'] .  " pairs</b></h3>"; ?>




                    </div>

                </div>
            </div>
        </div>



        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <!-- <img src="https://img.icons8.com/nolan/64/000000/lightning-bolt.png"
                                    class="mlExtraSmall"> -->
                                <i class="fal fa-bolt fa-3x mlSmall3 mtSmall"></i>

                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 1</b></h4>
                                <h6 class="mlSmall">Power</h6>
                            </div>
                        </div>



                        <br>



                    </div>


                    <div class="col-lg-12 mlSmall">

                        <h6><b>Sub PDU</b></h6>


                        <div class="row">

                            <div class="col-lg-6">

                                <h6>Feed A

                                    <?php 
                                        if ($row['subPdu1'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1'] . "</b></h6>";
                                        } else {
                                        echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?></h6>
                            </div>

                            <div clas="col-lg-6">

                                <h6>Feed B


                                    <?php 
                                        if ($row['subPduB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1'] . "</b></h6>";
                                        } else {
                                            echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?>
                                </h6>


                            </div>

                            <div class="col-lg-6">

                                <h6>Feed A

                                    <?php 
                                        if ($row['subPdu1'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1'] . "</b></h6>";
                                        } else {
                                        echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?></h6>
                            </div>

                            <div clas="col-lg-6">

                                <h6>Feed B


                                    <?php 
                                        if ($row['subPduB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1'] . "</b></h6>";
                                        } else {
                                            echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?>
                                </h6>


                            </div>

                        </div>


                        <br>
                        <h6><b>Power Consumption</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['powerConsumption1'] .  "kW</b></h3>"; ?>

                        <br>
                        <h6><b>Power Type</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['powerType'] .  "</b></h3>"; ?>


                    </div>

                </div>
            </div>
        </div>


        <?php

        if ($row['requestStatus'] == "In Progress") {
        
        ?>

        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <i class="fal fa-camera-retro fa-3x mlSmall2 mtSmall"></i>

                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 1</b></h4>
                                <h6 class="mlSmall">Photo Verification</h6>
                            </div>
                        </div>

                        <br>

                    </div>

                    <?php

                  
                        echo "<div class='col-lg-12 mlSmall'>";


                            echo "<form>
                            <div class='form-group'>
                                <h6 class='topSpaceLow'><b>Rack Front</b></h6>
                                <input id='browse' class='uploadButton' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>

                                <h6 class='topSpaceLow'><b>Rack Back</b></h6>
                                <input id='browse'  class='uploadButton'  type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>

                                <h6 class='topSpaceLow'><b>Rack Left</b></h6>
                                <input id='browse'  class='uploadButton'  type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>

                                <h6 class='topSpaceLow'><b>Rack Right</b></h6>
                                <input id='browse'  class='uploadButton'  type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                                <div id='preview'></div>
                            </div>
                            </form>";
                        echo "</div>";

                    ?>
                </div>
            </div>
        </div>
        <?

        }

        ?>








    </div>



    <?php
    }
    ?>
    <!-- end of rack 1 -->


    <!-- start of rack 2 -->
    <?php if ($row['rackSizeLength2'] != NULL || $row['rackSizeBreadth2'] != NULL || $row['breakerSize2'] != NULL || $row['breakerQuantity2'] != NULL) {
        ?>




    <div class="row">


        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <img src="https://img.icons8.com/nolan/64/000000/google-web-search.png"
                                    class="mlExtraSmall">

                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 2</b></h4>
                                <h6 class="mlSmall">Specifications</h6>
                            </div>
                        </div>

                        <br>

                    </div>


                    <div class="col-lg-12 mlSmall">

                        <!-- <i class="fad fa-server fa-3x"></i> -->

                        <h6><b>Rack Location</b></h6>
                        <?php 
                        if ($row['rackLocation2'] != NULL) {
                            echo "<h3 class='valueEmphasis'><b>" . $row['rackLocation2'] . "</b></h3>";
                        } else {
                            echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                        }; ?>

                        <br>

                        <h6><b>Rack Type</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackType'] .  "mm</b></h3>"; ?>
                        <br>


                        <h6><b>Rack Length</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeLength2'] .  "mm</b></h3>"; ?>

                        <br>

                        <h6><b>Rack Breadth</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeBreadth2'] .  "mm</b></h3>"; ?>

                        <br>

                        <h6><b>Rack Height</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeHeight2'] .  "mm</b></h3>"; ?>


                        <br>

                        <h6><b>Rack Weight</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackWeight2'] .  "kg</b></h3>"; ?>


                        <br>




                    </div>

                </div>
            </div>
        </div>



        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <img src="https://img.icons8.com/nolan/64/000000/processor.png" class="mlExtraSmall">

                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 2</b></h4>
                                <h6 class="mlSmall">Breaker</h6>
                            </div>
                        </div>

                        <br>


                    </div>



                    <div class="col-lg-12 mlSmall">

                        <h6><b>Breaker Name</b></h6>

                        <div class="row">

                            <div class="col-lg-6">

                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?></h6>

                            </div>

                            <div class="col-lg-6">

                                <h6>Feed B
                                    <?php 
                                if ($row['breakerNameB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerNameB2'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?>
                                </h6>

                            </div>


                        </div>



                        <br>
                        <h6><b>Breaker Size</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerSize2'] .  "A</b></h3>"; ?>

                        <br>
                        <h6><b>Breaker Quantity</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerQuantity2'] .  " pairs</b></h3>"; ?>




                    </div>

                </div>
            </div>
        </div>



        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <img src="https://img.icons8.com/nolan/64/000000/lightning-bolt.png"
                                    class="mlExtraSmall">
                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 2</b></h4>
                                <h6 class="mlSmall">Power</h6>
                            </div>
                        </div>


                        <br>



                    </div>


                    <div class="col-lg-12 mlSmall">

                        <h6><b>Sub PDU</b></h6>

                        <div class="row">

                            <div class="col-lg-6">

                                <h6>Feed A

                                    <?php 
                            if ($row['subPdu1'] != NULL) {
                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu2'] . "</b></h6>";
                            } else {
                            echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                            }; ?></h6>

                            </div>

                            <div class="col-lg-6">

                                <h6>Feed B

                                    <?php 
                                        if ($row['subPduB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu2'] . "</b></h6>";
                                        } else {
                                            echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?>
                                </h6>


                            </div>



                        </div>




                        <br>
                        <h6><b>Power Consumption</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['powerConsumption2'] .  "kW</b></h3>"; ?>

                        <br>
                        <h6><b>Power Type</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['powerType'] .  "</b></h3>"; ?>


                    </div>

                </div>
            </div>
        </div>




    </div>



    <?php
    }
    ?>
    <!-- end of rack 1 -->








    <br>
    <br>







</div>
<!-- end of given -->


<!-- end of ticketInfo -->


<?php
                  }    
                  
              }  else { 
                  
                    // echo "<div class='col-lg-12'>";
                    // echo "Request ID not found, please try again";
                    // echo "</div>";

              }
                         
          }
  
      }
?>