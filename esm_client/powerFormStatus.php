<?php


    powerRequestStatus(); 
    function powerRequestStatus() {
        require 'connection.php';
        $temp = $_POST['ticketNumber']; 
        $sql = "SELECT * FROM powerRequests WHERE `id` = '$temp'";
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




    <div class="row">


        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox2">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mlSmall"><b>Power Request</b></h4>
                    </div>
                    <br>
                    <br>





                    <div class="col-lg-12 mlSmall">

                        <h6><b>Request ID</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>" . $row['id'] . "</b></h3>"; ?>

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
                    <h6>Expected time remaining before Acknowledged: </h6>
                    <b><?php echo $testingSub = $expectedAcknowledgedDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes"); ?></b>
                    <?php  
                        $str = $testingSub ;

                        if (strpos($str, '+') !== false) {
                            echo '(Overdue)';
                        } else {
                            echo '(On Time)';
                        }

                    ?>
                    <?php } ?>


                    <?php if ($row['requestStatus'] == "Acknowledged") { ?>
                    <h6>Expected time remaining before Assigned: </h6>
                    <b><?php echo $testingSub = $expectedAssignedDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes"); ?></b>
                    <?php  
                        $str = $testingSub ;

                        if (strpos($str, '+') !== false) {
                            echo '(Overdue)';
                        } else {
                            echo '(On Time)';
                        }

                        ?>
                    <?php } ?>



                    <?php if ($row['requestStatus'] == "Assigned") { ?>
                    <h6>Expected time remaining before In Progress: </h6>
                    <b><?php echo $testingSub = $expectedInProgressDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes"); ?></b>
                    <?php  
                    $str = $testingSub ;

                    if (strpos($str, '+') !== false) {
                        echo '(Overdue)';
                    } else {
                        echo '(On Time)';
                    }

                    ?>
                    <?php } ?>





                    <?php if ($row['requestStatus'] == "In Progress") { ?>
                    <h6>Expected time remaining before Completed: </h6>
                    <b><?php echo $testingSub = $expectedCompletedDate->diff($currentDatetime)->format("T%R %a days, %h hours and %i minutes"); ?></b>
                    <?php  

                        $str = $testingSub ;
                        
                        if (strpos($str, '+') !== false) {
                            echo '(Overdue)';
                        } else {
                            echo '(On Time)';
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
                                echo "Please input all the relvant information into the DCIM software by FNT <a class='fntHyperlink' href='https://singtel.fntcloud.sg/command.html' target = '_blank'>here</a><br>Please be reminded to enable Adobe Flash Player for the software to load properly<br><br>";

                                
                                if ($row['requestStatusAssigned'] == NULL) {
                                    $changeToAssigned = date('Y-m-d H:i:s');;
                                    $sqlChangeToAssigned= "UPDATE spaceRequests
                                    SET requestStatusAssigned = '$changeToAssigned' where requestID = '$temp'";
                                    mysqli_query($conn, $sqlChangeToAssigned);
                                }

                                if ($row['adminFileUpload'] != NULL) {
                                    echo "<div class='layoutImage'>
                                    <img style='width: 500px; margin-top: 20px; margin-bottom: 20px; border-radius: 4px; ' src='/esm_admin/uploads/".$row['adminFileUpload']."' >
                                    </div>";
                                }



                                echo "<div class='custom-control custom-checkbox'>
                                <input type='checkbox' class='custom-control-input checks' value='accepted' id='toggle'>
                                <label class='custom-control-label' for='toggle'>I have entered all the relevant information
                                    into FNT
                                    DCIM App</label>
                                </div>
                                <br>

                                <form method='POST'>
                                    <button type='submit' class='btn selectorButton2' id='checkStatus' method='post' name='checked'>Submit</button>
                                </form>";


                                if (isset($_POST['checked'])) {
                                    $temp = $_POST['ticketNumber']; 
                                    $updateStatus = "UPDATE spaceRequests
                                    SET requestStatus = 'In Progress' where requestID = '$temp'";
                                    mysqli_query($conn, $updateStatus);
                                }

                            }

                            




                            if ($row['requestStatus'] == "In Progress") {
                            echo "Please kindly adhere to the Image Guidelines below as to how the images should be taken before your upload them<br><br>";

                            ?>




                        <div class='custom-control custom-checkbox'>
                            <br>
                            <input type='checkbox' class='custom-control-input checks' value='accepted' id='toggle'>
                            <label class='custom-control-label' for='toggle'>I have uploaded all the relevant images for
                                all the racks listed below</label>
                        </div>



                        <input type="submit" class='btn selectorButton2' id='checkStatus'
                            onclick="submitForm('spaceFormStatus.php')" value="Update Status" />




                        <br>

                        <?php
                            if ($row['requestStatusInProgress'] == NULL) {
                                    $changeToCompleted = date('Y-m-d H:i:s');;
                                    $sqlChangeToCompleted = "UPDATE spaceRequests
                                    SET requestStatusInProgress = '$changeToCompleted' where requestID = '$temp'";
                                    mysqli_query($conn, $sqlChangeToCompleted);
                                }
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
    <?php if ($row['breakerSize1'] != NULL || $row['breakerQuantity1'] != NULL) {
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
                                if ($row['breakerName1FeedA1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedA1'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName1FeedB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedB1'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName1FeedA2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedA2'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName1FeedB2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName1FeedB2'] . "</b></h3>";
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
                                        if ($row['subPdu1FeedA1'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedA1'] . "</b></h6>";
                                        } else {
                                        echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?></h6>
                            </div>

                            <div clas="col-lg-6">

                                <h6>Feed B


                                    <?php 
                                        if ($row['subPdu1FeedB1'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedB1'] . "</b></h6>";
                                        } else {
                                            echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?>
                                </h6>


                            </div>

                            <div class="col-lg-6">

                                <h6>Feed A

                                    <?php 
                                        if ($row['subPdu1FeedA2'] != NULL) {
                                        echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedA2'] . "</b></h6>";
                                        } else {
                                        echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
                                        }; ?></h6>
                            </div>

                            <div clas="col-lg-6">

                                <h6>Feed B


                                    <?php 
                                        if ($row['subPdu1FeedB2'] != NULL) {
                                            echo "<h6 class='valueEmphasis'><b>" . $row['subPdu1FeedB2'] . "</b></h6>";
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


                        <form method='post' enctype='multipart/form-data'>
                            <!-- <input type='file' name='file' /> -->
                            <h6><b>Rack Front</b></h6>
                            <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            <div id='preview'></div>
                            <input type='submit' value='Save name' name='but_upload' method='post'>

                        </form>

                        <br>
                        <br>


                        <?php 


                            $file_path = 'upload' . "/" . $row['requestId'] . "/";
                            echo $file_path;


                            if (!file_exists($file_path)) {
                                mkdir($file_path);
                            }


                            if(isset($_POST['but_upload'])){


                                $name = $_FILES['file']['name'];
                                $target_dir = $file_path;
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);

                                // Select file type
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                // Valid file extensions
                                $extensions_arr = array("jpg","jpeg","png");

                                $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                mysqli_query($conn,$query);

                                    // Check extension
                                    if( in_array($imageFileType,$extensions_arr) ){
                                    
                                        // Insert record
                                        $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                        mysqli_query($conn,$query);
                                    
                                        // Upload file
                                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                    }
                                }
                            ?>

                    </div>
                </div>
            </div>
        </div>



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
                                <h6 class="mlSmall">Breaker Verification</h6>
                            </div>
                        </div>

                        <br>

                    </div>



                    <div class='col-lg-12 mlSmall'>


                        <form method='post' enctype='multipart/form-data'>
                            <!-- <input type='file' name='file' /> -->
                            <h6><b>Rack Front</b></h6>
                            <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            <div id='preview'></div>
                            <input type='submit' value='Save name' name='but_upload' method='post'>

                        </form>

                        <br>
                        <br>


                        <?php 

                            $file_path = 'upload' . "/" . $row['requestId'] . "/";
                            echo $file_path;


                            if (!file_exists($file_path)) {
                                mkdir($file_path);
                            }

                            if(isset($_POST['but_upload'])){

                                $name = $_FILES['file']['name'];
                                $target_dir = $file_path;
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);

                                // Select file type
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                // Valid file extensions
                                $extensions_arr = array("jpg","jpeg","png");

                                $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                mysqli_query($conn,$query);

                                    // Check extension
                                    if( in_array($imageFileType,$extensions_arr) ){
                                    
                                        // Insert record
                                        $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                        mysqli_query($conn,$query);
                                    
                                        // Upload file
                                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                                    }
                                    
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>




        <?php } ?>

    </div>

    <hr class='specialHr'>



    <?php } ?>
    <!-- end of rack 1 -->




    <!-- start of rack 2 -->
    <?php if ($row['breakerSize2'] != NULL || $row['breakerQuantity2'] != NULL) { ?>


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
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName2FeedB1'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2FeedB1'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?>
                                </h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed A
                                    <?php 
                                if ($row['breakerName2FeedA2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2FeedA2'] . "</b></h3>";
                                } else {
                                    echo "<h3 class='valueEmphasis'><b>Pending</b></h3>";
                                }; ?></h6>
                            </div>

                            <div class="col-lg-6">
                                <h6>Feed B
                                    <?php 
                                if ($row['breakerName2FeedB2'] != NULL) {
                                    echo "<h3 class='valueEmphasis'><b>" . $row['breakerName2FeedB2'] . "</b></h3>";
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
                                        echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
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
                                            echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
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
                                        echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
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
                                            echo "<h6 class='valueEmphasis'><b>Pending</b></h6>";
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
                                <h4 class="mlSmall"><b>Rack 2</b></h4>
                                <h6 class="mlSmall">Rack Verification</h6>
                            </div>
                        </div>
                        <br>
                    </div>



                    <div class='col-lg-12 mlSmall'>


                        <form method='post' enctype='multipart/form-data'>
                            <!-- <input type='file' name='file' /> -->
                            <h6><b>Rack Front</b></h6>
                            <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            <div id='preview'></div>
                            <input type='submit' value='Save name' name='but_upload' method='post'>

                        </form>

                        <br>
                        <br>


                        <?php 


                            $file_path = 'upload' . "/" . $row['requestId'] . "/";
                            echo $file_path;


                            if (!file_exists($file_path)) {
                                mkdir($file_path);
                            }


                            if(isset($_POST['but_upload'])){

                                $name = $_FILES['file']['name'];
                                $target_dir = $file_path;
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);

                                // Select file type
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                // Valid file extensions
                                $extensions_arr = array("jpg","jpeg","png");

                                $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                mysqli_query($conn,$query);

                                    // Check extension
                                    if( in_array($imageFileType,$extensions_arr) ){
                                    
                                        // Insert record
                                        $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                        mysqli_query($conn,$query);
                                    
                                        // Upload file
                                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                    }
                                }
                            ?>

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
                                <i class="fal fa-camera-retro fa-3x mlSmall2 mtSmall"></i>
                            </div>

                            <div class="col-lg-10">
                                <h4 class="mlSmall"><b>Rack 2</b></h4>
                                <h6 class="mlSmall">Breaker Verification</h6>
                            </div>
                        </div>

                        <br>

                    </div>



                    <div class='col-lg-12 mlSmall'>


                        <form method='post' enctype='multipart/form-data'>
                            <!-- <input type='file' name='file' /> -->
                            <h6><b>Rack Front</b></h6>
                            <input id='browse' type='file' accept='.jpg, .png, .jpeg' onchange='previewFiles()'>
                            <div id='preview'></div>
                            <input type='submit' value='Save name' name='but_upload' method='post'>

                        </form>

                        <br>
                        <br>


                        <?php 

                            $file_path = 'upload' . "/" . $row['requestId'] . "/";
                            echo $file_path;


                            if (!file_exists($file_path)) {
                                mkdir($file_path);
                            }

                            if(isset($_POST['but_upload'])){

                                $name = $_FILES['file']['name'];
                                $target_dir = $file_path;
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);

                                // Select file type
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                // Valid file extensions
                                $extensions_arr = array("jpg","jpeg","png");

                                $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                mysqli_query($conn,$query);

                                    // Check extension
                                    if( in_array($imageFileType,$extensions_arr) ){
                                    
                                        // Insert record
                                        $query = "INSERT into spaceRequests(requestorFileUpload) values('".$name."')";
                                        mysqli_query($conn,$query);
                                    
                                        // Upload file
                                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                                    }
                                    
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>




        <?php } ?>

    </div>






    <?php } ?>
    <!-- end of rack 2 -->





</div>


<!-- start of checkbox checked -->
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
<!-- end of checkbox checked -->









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