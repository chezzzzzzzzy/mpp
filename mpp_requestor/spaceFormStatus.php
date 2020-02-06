<?php

    spaceRequestStatus(); 
    function spaceRequestStatus() {
        require('../filepath.php');
        $temp = $_POST['ticketNumber']; 
    

        $sql = "SELECT * FROM spaceRequests WHERE `requestId` = '$temp'";


        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_array($result)){


?>




<style>
.custom-control-lg .custom-control-label::before,
.custom-control-lg .custom-control-label::after {
    top: -.1rem !important;
    left: -2rem !important;
    width: 1.75rem !important;
    height: 1.75rem !important;
}

.custom-control-lg .custom-control-label {
    margin-left: 0.5rem !important;
    font-size: 1rem !important;
}
</style>


<script src="./libraries/faKit.js"></script>

<!-- start of ticketInfo -->




<!-- start of given -->
<div class="col-lg-12">
    <br>
    <h2><b>Status</b></h2>
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
                                <?php 
                                    if ($row['requestStatus'] == 'Assigned' || $row['requestStatus'] == 'Installation in Progress' || $row['requestStatus'] == 'Completed' || $row['requestStatus'] == 'Closed') {
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
                                    if ($row['requestStatus'] == 'Assigned' || $row['requestStatus'] == 'Installation in Progress' || $row['requestStatus'] == 'Completed' || $row['requestStatus'] == 'Closed') {
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
                                    SET requestStatusAcknowledged = '$changeToAcknowledged' where requestId = '$temp'";
                                    mysqli_query($conn, $sqlChangeToAcknowledged);

                                }
                            }


                            if ($row['requestStatus'] == "Assigned") {
                                echo "Please input all the relvant information into FNT Command<br>Please be reminded to enable Adobe Flash Player for the software to load properly<br><br>";

                                
                                if ($row['requestStatusAssigned'] == NULL) {
                                    $changeToAssigned = date('Y-m-d H:i:s');;
                                    $sqlChangeToAssigned= "UPDATE spaceRequests
                                    SET requestStatusAssigned = '$changeToAssigned' where requestId = '$temp'";
                                    mysqli_query($conn, $sqlChangeToAssigned);
                                }

                                if ($row['adminFileUpload'] != NULL) {
                                    echo "<div>
                                        <div style='display: inline-block'>
                                            <a class='btn statusCheckButton' href='https://singtel.fntcloud.sg/html' target = '_blank'>FNT Command</a>
                                            <a href=".$row['adminFileUpload']." class='btn statusCheckButton' download='layout_" . $row['requestId']."'>Download Layout</a>
                                        </div>
                                        
                                        <div>
                                            <img style='width: 500px; margin-top: 30px; margin-bottom: 30px; border-radius: 4px; ' src='".$row['adminFileUpload']."' >
                                        </div>
                                    </div>
                                    ";
                                } else {
                                    echo "<div>
                                        No layout found
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
                                onclick="submitForm('spaceChangeToInstallationInProgress.php?id=<?php echo $temp?>')"
                                value="Submit" />
                                
                        </form>

                        <?php
                            }

                        

                            if ($row['requestStatus'] == "Installation in Progress") {
                            echo "Please kindly adhere to the Image Guidelines below as to how the images should be taken before your upload them<br><br>";
                            

                                if ($row['requestStatusInProgress'] == NULL) {
                                    $changeToCompleted = date('Y-m-d H:i:s');;
                                    $sqlChangeToCompleted = "UPDATE spaceRequests
                                    SET requestStatusInProgress = '$changeToCompleted' where requestId = '$temp'";
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
                                onclick="submitForm('spaceChangeToCompleted.php?id=<?php echo $temp?>&requestorFileUpload=<?php echo $requestorFileUpload?>')"
                                value="Submit" />
                            <!-- <input type='submit' value='Save name' name='but_upload'> -->

                        </form>

                        <?php
                        

                            }

                            if ($row['requestStatus'] == "Completed") {
                                echo "Your request has been completed.<br>Pleaese give us some time to review your images and confirm the installation before closing this request.";
                                if ($row['requestStatusCompleted'] == NULL) {
                                    $changeToClosed = date('Y-m-d H:i:s');
                                    $sqlChangeToClosed = "UPDATE spaceRequests
                                    SET requestStatusCompleted = '$changeToClosed' where requestId = '$temp'";
                                    mysqli_query($conn, $sqlChangeToClosed);
                                }
                            }

                            if ($row['requestStatus'] == "Closed") {
                                echo "Your request has been closed.<br>Please keep this Request ID should you need to refer to it in the future.";
                                if ($row['requestStatusClosed'] == NULL) {
                                    $changeToClosed = date('Y-m-d H:i:s');
                                    $sqlChangeToClosed = "UPDATE spaceRequests
                                    SET requestStatusClosed = '$changeToClosed' where requestId = '$temp'";
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



                        <div class="row">
                            <div class="col-lg-3">
                                <h6><b>Rack Length</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeLength1'] .  "mm</b></h3>"; ?>

                            </div>
                            <div class="col-lg-3">
                                <h6><b>Rack Breadth</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeBreadth1'] .  "mm</b></h3>"; ?>
                            </div>
                            <div class="col-lg-3">
                                <h6><b>Rack Height</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeHeight1'] .  "mm</b></h3>"; ?>
                            </div>
                        </div>






                        <br>

                        <h6><b>Rack Weight</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeWeight1'] .  "kg</b></h3>"; ?>






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
                                if ($row['breakerName1FeedA1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedA1'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName1FeedA1'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }                             
                               }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName1FeedB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedB1'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName1FeedB1'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }                               
                                }; ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName1FeedA2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedA2'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName1FeedA2'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName1FeedB2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedB2'] . "</b></h3>";
                                } else {

                                    if ($row['breakerName1FeedB2'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }

                                }; ?>
                                </h6>
                            </div>

                        </div>






                        <br>
                        <h6><b>Breaker Size</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerSize1'] .  "A</b></h3>"; ?>

                        <br>
                        <h6><b>Breaker Quantity</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerQuantity1'] .  " pair/s</b></h3>"; ?>




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
                                        if ($row['subPdu1FeedA1'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedA1'] . "</b></h6>";
                                        } else {

                                            if ($row['subPdu1FeedA1'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }
                                            
                                        }; ?></h6>
                            </div>

                            <div clas="col-lg-6">

                                <h6>Feed B


                                    <?php 
                                        if ($row['subPdu1FeedB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedB1'] . "</b></h6>";
                                        } else {

                                            if ($row['subPdu1FeedB1'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }

                                        }; ?>
                                </h6>


                            </div>

                            <div class="col-lg-6">

                                <h6>Feed A

                                    <?php 
                                        if ($row['subPdu1FeedA2'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedA2'] . "</b></h6>";
                                        } else {

                                            if ($row['subPdu1FeedA2'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }

                                        }; ?></h6>
                            </div>

                            <div clas="col-lg-6">

                                <h6>Feed B


                                    <?php 
                                        if ($row['subPdu1FeedB2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedB2'] . "</b></h6>";
                                        } else {

                                            if ($row['subPdu1FeedB2'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }

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

                        <form method='POST' action='spaceChangeToCompleted.php?requestId=<?php echo $temp ?>'
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

                            <h6><b>Breaker (Feed A)</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breakerA1" />

                            <h6><b>Breaker (Feed B)</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breakerB1" />

      
                            <!-- <div id='preview'></div> -->
                            <input type='submit' value='Save name'  class='btn selectorButton2' name='but_upload'>
                        </form> 






                        <br>
                        <br>



                    </div>
                </div>
            </div>
        </div>



      




        <?php } ?>

    </div>




    <?php } ?>
    <!-- end of rack 1 -->




    <!-- start of rack 2 -->
    <?php if ($row['rackSizeLength2'] != NULL || $row['rackSizeBreadth2'] != NULL || $row['breakerSize2'] != NULL || $row['breakerQuantity2'] != NULL) { ?>


    <div class="row">

        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>
                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 2</b></h4>
                                <h6 class="mlSmall">Specifications</h6>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-lg-12 mlSmall">
                        <h6><b>Rack Location</b></h6>
                        <?php 
                        if ($row['rackLocation2'] != NULL) {
                            echo "<h3 class='valueEmphasis'><b>" . $row['rackLocation2'] . "</b></h3>";
                        } else {
                            echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                        }; ?>

                        <br>

                        <h6><b>Rack Type</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackType'] .  "</b></h3>"; ?>
                        <br>

                        <div class="row">
                            <div class="col-lg-3">
                                <h6><b>Rack Length</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeLength2'] .  "mm</b></h3>"; ?>

                            </div>
                            <div class="col-lg-3">
                                <h6><b>Rack Breadth</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeBreadth2'] .  "mm</b></h3>"; ?>
                            </div>
                            <div class="col-lg-3">
                                <h6><b>Rack Height</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeHeight2'] .  "mm</b></h3>"; ?>
                            </div>
                        </div>




                        <br>

                        <h6><b>Rack Weight</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeWeight2'] .  "kg</b></h3>"; ?>
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
                                <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>
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
                                if ($row['breakerName2FeedA1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2FeedA1'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName2FeedA1'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }                                
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName2FeedB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2FeedB1'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName2FeedB1'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }                                
                                }; ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName2FeedA2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2FeedA2'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName2FeedA2'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName2FeedB2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2FeedB2'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName2FeedB2'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }
                                }; ?>
                                </h6>
                            </div>

                        </div>

                        <br>
                        <h6><b>Breaker Size</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerSize2'] .  "A</b></h3>"; ?>
                        <br>
                        <h6><b>Breaker Quantity</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerQuantity2'] .  " pair/s</b></h3>"; ?>
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
                                <i class="fal fa-bolt fa-3x mlSmall3 mtSmall"></i>
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
                                        if ($row['subPdu2FeedA1'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu2FeedA1'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu2FeedA1'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }
                                        }; 
                                    ?>
                                </h6>
                            </div>

                            <div clas="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                        if ($row['subPdu2FeedB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu2FeedB1'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu2FeedB1'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }                                        
                                        };
                                    ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                        if ($row['subPdu2FeedA2'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu2FeedA2'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu2FeedA2'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }                                        
                                        }; 
                                    ?>
                                </h6>
                            </div>

                            <div clas="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                        if ($row['subPdu2FeedB2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu2FeedB2'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu2FeedB2'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }                                        
                                        }; 
                                    ?>
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


        <?php

        if ($row['requestStatus'] == "Installation in Progress") {
        
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
                                <h4 class="mlSmall"><b>Rack 2</b></h4>
                                <h6 class="mlSmall">Rack Verification</h6>
                            </div>
                        </div>
                        <br>
                    </div>



                    <div class='col-lg-12 mlSmall'>
                    <form method='POST' action='changeToCompleted.php?requestId=<?php echo $temp ?>'
                            enctype='multipart/form-data'>
                            <h6><b>Rack Front</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackFront2" />

                            <h6><b>Rack Floor</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackFloor2" />

                            <h6><b>Rack Back</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackBack2" />

                            <h6><b>Breaker Label</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breakerLabel2" />

                            <h6><b>Breakers</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breaker2" />

                            <h6><b>Sub PDU</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="subPdu2" />

      
                            <!-- <div id='preview'></div> -->
                            <input type='submit' value='Save name' name='but_upload'>
                        </form> 



                    </div>
                </div>
            </div>
        </div>





        <?php } ?>

    </div>






    <?php } ?>
    <!-- end of rack 2 -->


    <!-- start of rack 3 -->
    <?php if ($row['rackSizeLength3'] != NULL || $row['rackSizeBreadth3'] != NULL || $row['breakerSize3'] != NULL || $row['breakerQuantity3'] != NULL) { ?>


    <div class="row">

        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox3">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-2">
                                <i class="fal fa-ruler-combined fa-3x mlSmall2 mtSmall"></i>
                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 3</b></h4>
                                <h6 class="mlSmall">Specifications</h6>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-lg-12 mlSmall">
                        <h6><b>Rack Location</b></h6>
                        <?php 
                        if ($row['rackLocation3'] != NULL) {
                            echo "<h3 class='valueEmphasis'><b>" . $row['rackLocation3'] . "</b></h3>";
                        } else {
                            echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                        }; ?>

                        <br>

                        <h6><b>Rack Type</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackType'] .  "</b></h3>"; ?>
                        <br>

                        <div class="row">
                            <div class="col-lg-3">
                                <h6><b>Rack Length</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeLength3'] .  "mm</b></h3>"; ?>

                            </div>
                            <div class="col-lg-3">
                                <h6><b>Rack Breadth</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeBreadth3'] .  "mm</b></h3>"; ?>
                            </div>
                            <div class="col-lg-3">
                                <h6><b>Rack Height</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeHeight3'] .  "mm</b></h3>"; ?>
                            </div>
                        </div>




                        <br>

                        <h6><b>Rack Weight</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['rackSizeWeight3'] .  "kg</b></h3>"; ?>
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
                                <i class="fal fa-microchip fa-3x mlSmall2 mtSmall"></i>
                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 3</b></h4>
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
                                if ($row['breakerName3FeedA1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName3FeedA1'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName3FeedA1'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }                                
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName3FeedB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName3FeedB1'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName3FeedB1'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }                                
                                }; ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName3FeedA2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName3FeedA2'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName3FeedA2'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName3FeedB2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName3FeedB2'] . "</b></h3>";
                                } else {
                                    if ($row['breakerName3FeedB2'] == NULL ) {
                                        echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                    }
                                }; ?>
                                </h6>
                            </div>

                        </div>

                        <br>
                        <h6><b>Breaker Size</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerSize3'] .  "A</b></h3>"; ?>
                        <br>
                        <h6><b>Breaker Quantity</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['breakerQuantity3'] .  " pair/s</b></h3>"; ?>
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
                                <i class="fal fa-bolt fa-3x mlSmall3 mtSmall"></i>
                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 3</b></h4>
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
                                        if ($row['subPdu3FeedA1'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu3FeedA1'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu3FeedA1'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }
                                        }; 
                                    ?>
                                </h6>
                            </div>

                            <div clas="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                        if ($row['subPdu3FeedB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu3FeedB1'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu3FeedB1'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }                                        
                                        };
                                    ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                        if ($row['subPdu3FeedA2'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu3FeedA2'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu3FeedA2'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }                                        
                                        }; 
                                    ?>
                                </h6>
                            </div>

                            <div clas="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                        if ($row['subPdu3FeedB2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu3FeedB2'] . "</b></h6>";
                                        } else {
                                            if ($row['subPdu3FeedB2'] == NULL ) {
                                                echo "<h3 class='valueEmphasis'><b>NA</b></h3>";
                                            } else {
                                                echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                            }                                        
                                        }; 
                                    ?>
                                </h6>
                            </div>
                        </div>


                        <br>
                        <h6><b>Power Consumption</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['powerConsumption3'] .  "kW</b></h3>"; ?>

                        <br>
                        <h6><b>Power Type</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['powerType'] .  "</b></h3>"; ?>


                    </div>

                </div>
            </div>
        </div>


        <?php

        if ($row['requestStatus'] == "Installation in Progress") {
        
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
                                <h4 class="mlSmall"><b>Rack 3</b></h4>
                                <h6 class="mlSmall">Rack Verification</h6>
                            </div>
                        </div>
                        <br>
                    </div>



                    <div class='col-lg-12 mlSmall'>
                    <form method='POST' action='changeToCompleted.php?requestId=<?php echo $temp ?>'
                            enctype='multipart/form-data'>
                            <h6><b>Rack Front</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackFront3" />

                            <h6><b>Rack Floor</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackFloor3" />

                            <h6><b>Rack Back</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="rackBack3" />

                            <h6><b>Breaker Label</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breakerLabel3" />

                            <h6><b>Breakers</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="breaker3" />

                            <h6><b>Sub PDU</b></h6>
                            <input type='file' id="browse" accept='.jpeg, .png, .jpg' onchange='previewFiles()'
                                name="subPdu3" />

    
                            <!-- <div id='preview'></div> -->
                            <input type='submit' value='Save name' class='btn selectorButton2' name='but_upload'>
                        </form> 



                    </div>
                </div>
            </div>
        </div>





        <?php } ?>

    </div>






    <?php } ?>
    <!-- end of rack 3 -->





</div>




<script>
$('#checkStatus').prop("disabled", true);
$('input:checkbox').click(function() {
    if ($(this).is(':checked')) {

        $('#checkStatus').prop("disabled", false);

    } else {
        if ($('.checks').filter(':checked').length < 1) {
            $('#checkStatus').attr('disabled', true);
        }
    }
});
</script>

<script>
function previewFiles() {

    var preview = document.querySelector('#preview');
    var files = document.querySelector('input[type=file]').files;

    function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
        if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
            var reader = new FileReader();


            reader.addEventListener("load", function() {
                var image = new Image();
                image.height = 200;
                image.title = file.name;
                image.style.marginTop = '10px';
                image.style.marginRight = '10px';
                image.style.borderRadius = '3px';
                image.style.marginBottom = '220px';




                image.src = this.result;
                preview.appendChild(image);
            }, false);

            reader.readAsDataURL(file);
        }

    }

    if (files) {
        [].forEach.call(files, readAndPreview);
    }

}
</script>




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