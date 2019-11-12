<?php        
  spaceRequestStatus(); 
  function spaceRequestStatus() {

      require 'connection.php';
      $temp = $_POST['ticketNumber']; 
      $sql = "SELECT * FROM spaceRequests WHERE `requestId` = '$temp'";

      if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
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
                        <?php echo "<h3><b>" . $row['requestId'] . "</b></h3>"; ?>

                        <br>


                        <h6><b>Status</b></h6>


                        <div class="row">
                            <div class="col-lg-5">
                                <?php echo "<h3><b>" . $row['requestStatus'] ."</b></h3>";?>

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
                        <?php echo "<h3><b>" . $row['requestorName'] . "</b></h3>"; ?>

                        <br>

                        <h6><b>Requestor Department</b></h6>
                        <?php echo "<h3><b>" . $row['requestorDepartment'] . "</b></h3>"; ?>

                        <br>

                        <h6><b>Requestor Email</b></h6>
                        <?php echo "<h3><b>" . $row['requestorEmail'] . "</b></h3>"; ?>

                        <br>



                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="https://img.icons8.com/nolan/64/000000/city.png">
                                <h6><b>Exchange</b></h6>
                                <?php 
                                    if ($row['requestStatus'] == 'Assigned' || $row['requestStatus'] == 'In Progress' || $row['requestStatus'] == 'Completed' || $row['requestStatus'] == 'Closed') {
                                        echo "<h3 class='valueEmphasis'><b>" . $row['exchange'] . "</b></h3>"; 
                                    } else {
                                        echo "<h3 class='valueEmphasis'><b>Pending</b></h3>"; 
                                    }
                                ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="https://img.icons8.com/nolan/64/000000/city.png">
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
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="https://img.icons8.com/nolan/64/000000/calendar.png">
                                <h6><b>Installation Date</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['startDate'] . "</b></h3>"; ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="https://img.icons8.com/nolan/64/000000/calendar.png">
                                <h6><b>Completion Date</b></h6>
                                <?php echo "<h3 class='valueEmphasis'><b>" . $row['startDate'] . "</b></h3>"; ?>
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
                                <td>

                                    <h4>Submitted</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestTimestamp'] . "</h4>";?></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Acknowledged</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusAcknowledged'] . "</h4>";?></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Assigned</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusAssigned'] . "</h4>";?></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>In Progress</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusInProgress'] . "</h4>";?></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Completed</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusCompleted'] . "</h4>";?></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Closed</h4>
                                </td>
                                <td><?php echo "<h4>" . $row['requestStatusClosed'] . "</h4>";?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <h4 class="mlSmall"><b>Expected date for Acknowledgment: 31/12/2020 </b></h4>
                <h4 class="mlSmall"><b>10 days left </b></h4>




            </div>

            <div class="bgcolors boundingBox2">

                <div class="row">

                    <div class="col-lg-12 mlSmall">
                        <h4><b>Actions</b></h4>
                        <?php 

                            if ($row['requestStatus'] == "Submitted") {
                            echo "Please check your email for a your request submission";


                           
                            }

                            if ($row['requestStatus'] == "Acknowledged") {
                            echo "Your request has been received";

                            $changeToAcknowledged = date('Y-m-d H:i:s');;
                            $sqlChangeToAcknowledged = "UPDATE spaceRequests
                            SET requestStatusAcknowledged = '$changeToAcknowledged' where requestID = '$temp'";
                            mysqli_query($conn, $sqlChangeToAcknowledged);

                           

                            }

                            // $changeToAssigned = date('Y-m-d H:i:s');;
                            // $sqlChangeToAssigned= "UPDATE spaceRequests
                            // SET requestStatusAssigned = '$changeToAssigned' where requestID = '$temp'";
                            // mysqli_query($conn, $sqlChangeToAssigned);



                            if ($row['requestStatus'] == "Assigned") {
                            echo "Your request has been updated with some other relevant information. <br><br>
                                Please refer to the following attachment for placement of your equipment. <br><br>
                                Please input the relevant information into the FNT DCIM App before you continue to the next step. <br><br>";
                                


                            $updateStatus = "UPDATE spaceRequests
                            SET requestStatus = 'In Progress' where requestID = '$temp'";
                            mysqli_query($conn, $updateStatus);

                            // echo "<div class='custom-control custom-checkbox'>
                            // <input type='checkbox' class='custom-control-input' id='customCheck1'>
                            // <label class='custom-control-label' for='customCheck1'>I have entered all the relevant information into FNT DCIM App </label>
                            // </div>";

                            echo " <div class='custom-control custom-checkbox'>
                            <input type='checkbox' class='custom-control-input' id='toggle'>
                            <label class='custom-control-label' for='toggle'>I have entered all the relevant information
                                into FNT
                                DCIM App</label>
                        </div>";
                            echo "<input type='submit' name='sendNewSms' class='btn selectorButton2' id='sendNewSms' value='Proceed'/>";

                            header('Location: spaceFormStatus.php');



                            // echo "<button type='submit' class='btn selectorButton2' id='checkStatus' method='post'>Change Status</button>";

                            $changeToInProgress = date('Y-m-d H:i:s');;
                            $sqlChangeToInProgress = "UPDATE spaceRequests
                            SET requestStatusInProgress = '$changeToInProgress' where requestID = '$temp'";
                            mysqli_query($conn, $sqlChangeToInProgress);
                            

                            }



                            if ($row['requestStatus'] == "In Progress") {
                            echo "Please compress all your pictures into a folder before submitting it as a ZIP file.  <br><br>";



                                $updateStatus = "UPDATE spaceRequests
                                SET requestStatus = 'Completed' where requestID = '$temp'";
                                mysqli_query($conn, $updateStatus);

                                if( $row['rackSizeLength1'] != NULL) {

                                    echo "<h6><b>Rack 1</b></h6>";


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
                                header("Location:status.php");

                                $changeToCompleted = date('Y-m-d H:i:s');;
                                $sqlChangeToCompleted = "UPDATE spaceRequests
                                SET requestStatusCompleted = '$changeToCompleted' where requestID = '$temp'";
                                mysqli_query($conn, $sqlChangeToCompleted);


                                
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

                            echo "Your request has been completed<br><br>";

                            // $changeToClosed = date('Y-m-d H:i:s');
                            // $sqlChangeToClosed = "UPDATE spaceRequests
                            // SET requestStatusClosed = '$changeToClosed' where requestID = '$temp'";
                            // mysqli_query($conn, $sqlChangeToClosed);

                            }

                            if ($row['requestStatus'] == "Closed") {



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
                                <img src="https://img.icons8.com/nolan/64/000000/google-web-search.png"
                                    class="mlExtraSmall metricsImage">

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

                        <h6><b>Rack Supply</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>Requestor's Rack</b></h3>"; ?>
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


                        <br>

                        <?php
                            if ($row['requestStatus'] == "In Progress") {
                                
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
                                <img src="https://img.icons8.com/nolan/64/000000/processor.png" class="mlExtraSmall">

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
                                <img src="https://img.icons8.com/nolan/64/000000/lightning-bolt.png"
                                    class="mlExtraSmall">
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

                        <h6><b>Rack Supply</b></h6>
                        <?php echo "<h3 class='valueEmphasis'><b>Singtel's Rack</b></h3>"; ?>
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
                  
              }  
                         
          }
  
      }
?>
