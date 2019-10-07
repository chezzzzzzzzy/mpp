<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
       
    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="form1.css">




    <title>User | ESM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png" alt="singtelLogo.png">
            </div>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="requestForm.php">Request<span class="sr-only">(current)</span></a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto">
            Exchange Space Management
            </span>
        </div>
    </nav>


    <div class="container">

        <h1>Request Form</h1>

        <!-- <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form id="msform">
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Social Profiles</li>
                        <li>Social Profiles</li>
                        <li>Account Setup</li>
                    </ul>
                    <fieldset>
                        <h2 class="fs-title">Personal Details</h2>
                        <h3 class="fs-subtitle">Tell us something more about you</h3>
                        <input type="text" name="fname" placeholder="First Name"/>
                        <input type="text" name="lname" placeholder="Last Name"/>
                        <input type="text" name="phone" placeholder="Phone"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Social Profiles</h2>
                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                        <input type="text" name="twitter" placeholder="Twitter"/>
                        <input type="text" name="facebook" placeholder="Facebook"/>
                        <input type="text" name="gplus" placeholder="Google Plus"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Social Profiles</h2>
                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                        <input type="text" name="twitter" placeholder="Twitter"/>
                        <input type="text" name="facebook" placeholder="Facebook"/>
                        <input type="text" name="gplus" placeholder="Google Plus"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Create your account</h2>
                        <h3 class="fs-subtitle">Fill in your credentials</h3>
                        <input type="text" name="email" placeholder="Email"/>
                        <input type="password" name="pass" placeholder="Password"/>
                        <input type="password" name="cpass" placeholder="Confirm Password"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                    </fieldset>
                </form>
            
            </div>
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
        <script  src="./form1.js"></script>


        -->

        <div class="row">

            <div class="col-lg-12">

          


                    <ul id="progressbar">
                        <li class="active">Type</li>
                        <li>Personal Information</li>
                        <li>Racks</li>
                        <li>Technical Information</li>
                        <li>Confirmation</li>
                    </ul>



            </div>
            <div class="col-lg-12">

                <form action="index.php" id="msform" method="post" class="needs-validation">

                    <!-- <ul id="progressbar">
                        <li class="active">Personal Information</li>
                        <li>Racks</li>
                        <li>Technical Information</li>
                        <li>Confirmation</li>
                    </ul> -->
                    <fieldset>  
                    <h2 class="fs-title">Type</h2>
                    <h3 class="fs-subtitle">Please kindly select from the following forms</h3>
                    <!-- <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">Space</button>
                    <button type="button" class="btn btn-secondary">Power</button>

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Others
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">FDF</a>
                            <a class="dropdown-item" href="#">Cable Tray</a>
                            </div>
                        </div>
                    </div> -->

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Power
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Space
                        </label>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Others
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">FDF</a>
                            
                            <a class="dropdown-item" href="#">Cable Tray</a>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="next" class="next action-button" value="Next" />


                    </fieldset>

                    <fieldset>
                    <h2 class="fs-title">Personal Information</h2>
                    <h3 class="fs-subtitle">Please kindly complete the following fields</h3>
                    <label for="inputState">Name<span class="requiredField">*</span></label>
                    <input type="text" name="requestorName" placeholder="" />

                    <label for="inputState">Email<span class="requiredField">*</span></label>
                    <input type="text" name="requestorEmail" placeholder="" />

                    <label for="inputState">Department<span class="requiredField">*</span></label>
                    <input type="text" name="requestorDepartment" placeholder="" />

                    <label for="inputState">Reason<span class="requiredField">*</span></label>
                    <input type="text" name="requestorReason" placeholder="" />

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />

                    </fieldset>

                    <fieldset>

                        <h2 class="fs-title">Number Of Racks</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following field</h3>

                        <div id="selected_form_code">
                            <label for="inputState">Number of Racks<span class="requiredField">*</span></label>
                            <select id="select_btn" class="form-control">
                                <option value="0">Select below</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                        </div>

                        <!-- <h2 class="fs-title">Number Of Racks</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following field</h3>
                        <div class="form-group">
                            <label for="inputState">Number of Racks<span class="requiredField">*</span></label>
                            <select id="inputState" class="form-control" name="room">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div> -->
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                    <h2 class="fs-title">Technical Information</h2>
                    <h3 class="fs-subtitle">Please kindly complete the following fields</h3>


                    <div class="row">
                        <!-- <div class="col-lg-3">
                            <a href="#" class="rackCount">Rack 1</a>
                            <br>
                            <br>
                            <a href="#" class="rackCount">Rack 2</a>
                            <br>
                            <br>
                            <a href="#" class="rackCount">Rack 3</a>
                            <br>
                            <br>
                            <a href="#" class="rackCount">Rack 4</a>
                            <br>
                            <br>
                            <a href="#" class="rackCount">Rack 5</a>

                        </div> -->
                        <div class="col-lg-12">
                            <div id="form1"> </div>

                            <div class="form-group">
                        <label for="power">Power Type<span class="requiredField">*</span></label>
                        <br>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="radio" name="powerType" id="AC" autocomplete="off" checked> AC
                            </label>
                         
                            <label class="btn btn-secondary">
                                <input type="radio" name="powerType" id="DC" autocomplete="off"> DC
                            </label>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="rackSize">Rack Size (Length in mm)<span class="requiredField">*</span></label>
                        <input type="text" id="rackSizeLength"
                            placeholder="Enter rack size (length)" name="rackSizeLength" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="rackSize">Rack Size (Breadth in mm)<span class="requiredField">*</span></label>
                        <input type="text" id="rackSizeBreadth"
                            placeholder="Enter rack size (breadth)" name="rackSizeBreadth" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="breakerSize">Breaker Size<span class="requiredField">*</span></label>
                        <input type="text" id="breakerSize" placeholder="Enter breaker size"
                            name="breakerSize" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="breakerQuantity">Breaker Quantity<span class="requiredField">*</span></label>
                        <input type="text" id="breakerQuantity"
                            placeholder="Enter breaker quantity" name="breakerQuantity" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
               

                    <div class="form-group">
                        <label for="startDate">Start Date<span class="requiredField">*</span></label>
                    
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" id="data-date">
                                <div class="input-group-addon">
                                </div>
                            </div>

                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="endDate">End Date<span class="requiredField">*</span></label>
                    
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" id="data-date">
                                <div class="input-group-addon">
                                </div>
                            </div>

                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>


                    

                   

                    <div class="form-group">
                        <label for="inputState">Preferred Location</label>
                        <select id="inputState" class="form-control" name="location">
                            <option value="No Preference" selected>No Preference</option>
                            <option value="Ang Mo Kio Exchange (AM)">Ang Mo Kio Exchange (AM)</option>
                            <option value="Ayer Rajah Exchange (AR)">Ayer Rajah Exchange (AR)</option>
                            <option value="Bedok Exchange (BD)">Bedok Exchange (BD)</option>
                            <option value="Bukit Panjang Exchange (BP)">Bukit Panjang Exchange (BP)</option>
                            <option value="Changi Exchange (CG)">Changi Exchange (CG)</option>
                            <option value="East Exchange (ES)">East Exchange (ES)</option>
                            <option value="Geylang Exchange (GL)">Geylang Exchange (GL)</option>
                            <option value="Hougang Exchange (HG)">Hougang Exchange (HG)</option>
                            <option value="Jurong East Exchange (JE)">Jurong East Exchange (JE)</option>
                            <option value="Jurong West Exchange (JW)">Jurong West Exchange (JW)</option>
                            <option value="Katong Exchange (KT)">Katong Exchange (KT)</option>
                            <option value="North Exchange (NT)">North Exchange (NT)</option>
                            <option value="Orchard Exchange (OC)">Orchard Exchange (OC)</option>
                            <option value="Paya Lebar Exchange (PL)">Paya Lebar Exchange (PL)</option>
                            <option value="Pasir Ris Exchange (PR)">Pasir Ris Exchange (PR)</option>
                            <option value="Queenstown Exchange (QT)">Queenstown Exchange (QT)</option>
                            <option value="Telok Blangah Exchange (TB)">Telok Blangah Exchange (TB)</option>
                            <option value="Tampines Exchange (TP)">Tampines Exchange (TP)</option>
                            <option value="Tuas Exchange (TS)">Tuas Exchange (TS)</option>
                        </select>
                    </div>


                        </div>


                    </div>

                    
  

                   
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />

                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Confirmation</h2>
                    <h3 class="fs-subtitle">Please kindly review the following</h3>

              
                    <h5><b>Rack 1</b></h5>

                    <div class="form-group">
                        <label for="rackSize">Power</label>
                        <h2>AC</h2>
                    </div>


                    <div class="form-group">
                        <label for="rackSize">Rack Size (Length)</label>
                        <h2>5<span class='units'>mm</span></h2>
                    </div>

                    <div class="form-group">
                        <label for="rackSize">Rack Size (Breadth)</label>
                        <h2>5<span class='units'>mm</span></h2>

                       
                    </div>

                    <div class="form-group">
                        <label for="breakerSize">Breaker Size</label>
                        <h2>5</h2>

                       
                    </div>
                    <div class="form-group">
                        <label for="breakerQuantity">Breaker Quantity</label>
                        <h2>5</h2>

                        
                    </div>
                    <div class="form-group">
                        <label for="pdbFeeds">PDB Feeds</label>
                        <h2>A</h2>

                    
                    </div>

                    <div class="form-group">
                        <label for="inputState">Preferred Location</label>
                        <h2>Changi Exchange</h2>

                        
                    </div>

                    <hr class="specialHr">

                    <h5><b>Rack 2</b></h5>

                    <div class="form-group">
                        <label for="rackSize">Power</label>
                        <h2>AC</h2>
                    </div>


                    <div class="form-group">
                        <label for="rackSize">Rack Size (Length)</label>
                        <h2>5<span class='units'>mm</span></h2>
                    </div>

                    <div class="form-group">
                        <label for="rackSize">Rack Size (Breadth)</label>
                        <h2>5<span class='units'>mm</span></h2>

                    
                    </div>

                    <div class="form-group">
                        <label for="breakerSize">Breaker Size</label>
                        <h2>5</h2>

                    
                    </div>
                    <div class="form-group">
                        <label for="breakerQuantity">Breaker Quantity</label>
                        <h2>5</h2>

                        
                    </div>
                    <div class="form-group">
                        <label for="pdbFeeds">PDB Feeds</label>
                        <h2>A</h2>


                    </div>

                    <div class="form-group">
                        <label for="inputState">Preferred Location</label>
                        <h2>Changi Exchange</h2>

                        
                    </div>

                    <hr class="specialHr">

                    <h5><b>Rack 3</b></h5>

                    <div class="form-group">
                        <label for="rackSize">Power</label>
                        <h2>AC</h2>
                    </div>


                    <div class="form-group">
                        <label for="rackSize">Rack Size (Length)</label>
                        <h2>5<span class='units'>mm</span></h2>
                    </div>

                    <div class="form-group">
                        <label for="rackSize">Rack Size (Breadth)</label>
                        <h2>5<span class='units'>mm</span></h2>


                    </div>

                    <div class="form-group">
                        <label for="breakerSize">Breaker Size</label>
                        <h2>5</h2>


                    </div>
                    <div class="form-group">
                        <label for="breakerQuantity">Breaker Quantity</label>
                        <h2>5</h2>

                        
                    </div>
                    <div class="form-group">
                        <label for="pdbFeeds">PDB Feeds</label>
                        <h2>A</h2>


                    </div>

                    <div class="form-group">
                        <label for="inputState">Preferred Location</label>
                        <h2>Changi Exchange</h2>

                        
                    </div>



                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />

                </fieldset>

                </form>

                <form action="#" id="form_submit" method="post" name="form_submit">
                                <!-- Dynamic Registration Form Fields Creates Here -->
                            </form>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
                <script src="./form1.js"></script>



            





                <!-- <form action="index.php" method="post" class="needs-validation" novalidate >


                    <h4><b>Personal Information</b></h4>
                    <div class="form-group" >
                        <label for="rackSize">Name<span class="requiredField">*</span></label>
                        <input type="text" class="form-control" id="rackSizeLength" placeholder="Enter your name"
                            name="requestorName" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>


                    <div class="form-group" >
                        <label for="rackSize">Department<span class="requiredField">*</span></label>
                        <input type="text" class="form-control" id="rackSizeLength" placeholder="Enter your department"
                            name="requestorDepartment" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group" >
                        <label for="rackSize">Reason for Installation<span class="requiredField">*</span></label>
                        <textarea type="text" class="form-control" id="rackSizeLength" placeholder="Enter your reason for installation"
                            name="requestorReason" rows="5" required></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <br>
                    <br>

                    <h4><b>Technical Information</b></h4>

                    <br>
                    <br>

                    


                    <div class="form-group" >
                        <label for="rackSize">Rack Size (Length)<span class="requiredField">*</span></label>
                        <input type="text" class="form-control" id="rackSizeLength" placeholder="Enter rack size (length)"
                            name="rackSizeLength" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group" >
                        <label for="rackSize">Rack Size (Breadth)<span class="requiredField">*</span></label>
                        <input type="text" class="form-control" id="rackSizeBreadth" placeholder="Enter rack size (breadth)"
                            name="rackSizeBreadth" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="breakerSize">Breaker Size<span class="requiredField">*</span></label>
                        <input type="text" class="form-control" id="breakerSize" placeholder="Enter breaker size"
                            name="breakerSize" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="breakerQuantity">Breaker Quantity<span class="requiredField">*</span></label>
                        <input type="text" class="form-control" id="breakerQuantity"
                            placeholder="Enter breaker quantity" name="breakerQuantity" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="pdbFeeds">PDB Feeds</label>
                        <input type="text" class="form-control" id="pdbFeeds" placeholder="Enter PDB feeds"
                            name="pdbFeeds">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                    <label for="inputState">Preferred Location</label>
                    <select id="inputState" class="form-control" name="location">
                        <option value="No Preference" selected>No Preference</option>
                        <option value="Ang Mo Kio Exchange (AM)">Ang Mo Kio Exchange (AM)</option>
                        <option value="Ayer Rajah Exchange (AR)">Ayer Rajah Exchange (AR)</option>
                        <option value="Bedok Exchange (BD)">Bedok Exchange (BD)</option>
                        <option value="Bukit Panjang Exchange (BP)">Bukit Panjang Exchange (BP)</option>
                        <option value="Changi Exchange (CG)">Changi Exchange (CG)</option>
                        <option value="East Exchange (ES)">East Exchange (ES)</option>
                        <option value="Geylang Exchange (GL)">Geylang Exchange (GL)</option>
                        <option value="Hougang Exchange (HG)">Hougang Exchange (HG)</option>
                        <option value="Jurong East Exchange (JE)">Jurong East Exchange (JE)</option>
                        <option value="Jurong West Exchange (JW)">Jurong West Exchange (JW)</option>
                        <option value="Katong Exchange (KT)">Katong Exchange (KT)</option>
                        <option value="North Exchange (NT)">North Exchange (NT)</option>
                        <option value="Orchard Exchange (OC)">Orchard Exchange (OC)</option>
                        <option value="Paya Lebar Exchange (PL)">Paya Lebar Exchange (PL)</option>
                        <option value="Pasir Ris Exchange (PR)">Pasir Ris Exchange (PR)</option>
                        <option value="Queenstown Exchange (QT)">Queenstown Exchange (QT)</option>
                        <option value="Telok Blangah Exchange (TB)">Telok Blangah Exchange (TB)</option>
                        <option value="Tampines Exchange (TP)">Tampines Exchange (TP)</option>
                        <option value="Tuas Exchange (TS)">Tuas Exchange (TS)</option>
                    </select>
                    </div>


                    <div class="form-group">
                        <label for="inputState">Number of Racks<span class="requiredField">*</span></label>
                        <select id="inputState" class="form-control" name="room">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>


                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary ordinalButton">Submit</button>
                </form> -->


            </div>

            <!-- <div class="col-lg-0">
                <img src="server.svg" id="serverImg">
            </div> -->




        </div>
    </div>

</body>

</html>