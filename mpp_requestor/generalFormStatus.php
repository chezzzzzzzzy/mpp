<?php        
  
  generalRequestStatus(); 
  function generalRequestStatus() {

    
    
      require('../filepath.php');
      $temp = $_POST['ticketNumber']; 
      $sql = "SELECT * FROM generalRequests WHERE `id` = '$temp'";

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
                        <h4 class="mlSmall"><b>General Request</b></h4>
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



                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="bgcolors boundingBox2">

                <div class="row">

                    <div class="col-lg-12">
                        <div class='mlSmall'>
                            <h4><b>Requestor's Query</b></h4>
                            <?php echo $row['query'];?>
                        </div>
                    </div>


                    <br>

                </div>




            </div>

            <div class="bgcolors boundingBox2">

                <div class="row">
                    <div class="col-lg-12">
                        <div class='mlSmall'>
                            <h4><b>Planner's Query</b></h4>
                            <?php echo $row['remarks'];?>
                        </div>
                    </div>


                </div>






            </div>


        </div>


    </div>

</div>




<?php
                  }    
                  
              }  
                         
          }
  
      }
?>