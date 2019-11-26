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
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js">
    </script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js">
    </script>


    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="othersForm.css">




    <title>Requestor | ESM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png"
                    alt="singtelLogo.png">
            </div>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="allForms.php">Request<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="status.php">Status</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="guide.php">Guide</a>
                </li>
            </ul>
            <span class="navbar-text ml-auto">
                Exchange Space Management
            </span>
        </div>
    </nav>


    <div class="container">

        <h1>Request for SSU</h1>
        <p class="formDescription">This request form allows you to request for the installation of ... </p>




        <div class="row">

            <div class="col-lg-12">

                <ul id="othersForm">
                    <li class="active">Personal Information</li>
                    <li>Technical Information</li>
                </ul>


            </div>
            <div class="col-lg-12">

                <form action="ssuFormProcess.php" id="msform" method="post" class="needs-validation">

                    <fieldset id="personalInformation">
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

                        <input type="button" id="next" name="next" class="next action-button" value="Next" />

                    </fieldset>


                    <fieldset>
                        <h2 class="fs-title">Technical Information</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following fields</h3>


                        <div class="row">

                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="rackSize">Number of Ports<span class="requiredField">*</span></label>
                                    <input type="text" id="numberOfPorts" placeholder="Enter number of ports"
                                        name="numberOfPorts" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>


                                <div class="form-group">
                                    <label for="inputState">Transmission Type<span
                                            class="requiredField">*</span></label>
                                    <select id="inputState" class="form-control" name="transmissionType" required>
                                        <option value="2mb" selected>2M/b</option>
                                        <option value="2mhz">2Mhz</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Interfacing Type<span class="requiredField">*</span></label>
                                    <select id="inputState" class="form-control" name="interfacingType" required>
                                        <option value="75Ω" selected>75Ω</option>
                                        <option value="120Ω">120Ω</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="startDate">Completion Date<span
                                            class="requiredField">*</span></label>

                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" id="data-date" name="endDate" required>
                                        <div class="input-group-addon">
                                        </div>
                                    </div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>



                                <div class="form-group">
                                    <label for="inputState">Exchange<span
                                            class="requiredField">*</span></label>

                                    <select id="cat" name="exchange" class="form-control" required>
                                        <option value>Please select below</option>
                                        <option value="AM">Ang Mo Kio Exchange (AM)</option>
                                        <option value="AR">Ayer Rajah Exchange (AR)</option>
                                        <option value="BD">Bedok Exchange (BD)</option>
                                        <option value="BP">Bukit Panjang Exchange (BP)</option>
                                        <option value="CG">Changi Exchange (CG)</option>
                                        <option value="POC">Pickering Operations Complex (POC)</option>
                                        <option value="ES">East Exchange (ES)</option>
                                        <option value="GL">Geylang Exchange (GL)</option>
                                        <option value="HG">Hougang Exchange (HG)</option>
                                        <option value="JE">Jurong East Exchange (JE)</option>
                                        <option value="JW">Jurong West Exchange (JW)</option>
                                        <option value="KT">Katong Exchange (KT)</option>
                                        <option value="NT">North Exchange (NT)</option>
                                        <option value="OC">Orchard Exchange (OC)</option>
                                        <option value="PL">Paya Lebar Exchange (PL)</option>
                                        <option value="PR">Pasir Ris Exchange (PR)</option>
                                        <option value="QT">Queenstown Exchange (QT)</option>
                                        <option value="TB">Telok Blangah Exchange (TB)</option>
                                        <option value="TP">Tampines Exchange (TP)</option>
                                        <option value="TS">Tuas Exchange (TS)</option>


                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Room<span class="requiredField">*</span></label>

                                    <select id="subcat" name="room" disabled="disabled" class="form-control" required>
                                        <option value>Please select below</option>
                                        <option rel="AM" value="AM Level 4 PCM 1">AM Level 4 PCM 1</option>

                                        <option rel="AR" value="AR Level 1 PCM 1">AR Level 1 PCM 1</option>

                                        <option rel="BD" value="BD Level 1 PCM 1">BD Level 1 PCM 1</option>
                                        <option rel="BD" value="BDN1 Level 1 PCM 1">BDN1 Level 1 PCM 1</option>
                                        <option rel="BD" value="BD033 Level 3 PCM 1">BD033 Level 3 PCM 1</option>

                                        <option rel="BP" value="BP Level 1 PCM 1">BP Level 1 PCM 1</option>
                                        <option rel="BP" value="BPN Level 2 PCM 1">BPN Level 2 PCM 1</option>

                                        <option rel="CG" value="CG Level 1 PCM 1">CG Level 1 PCM 1</option>

                                        <option rel="POC" value="POC Level 8 PCM 1">POC Level 8 PCM 1</option>
                                        <option rel="POC" value="POC Level 7 PCM 1">POC07 Level 7 PCM 1</option>

                                        <option rel="ES" value="ES Level 4 PCM 1">ES Level 4 PCM 1</option>

                                        <option rel="GL" value="GL Level 1 PCM 1">GL Level 1 PCM 1</option>
                                        <option rel="GL" value="GLN Level 2 PCM 1">GLN Level 2 PCM 1</option>

                                        <option rel="HG" value="HG Level 2 PCM 1">HG Level 2 PCM 1</option>

                                        <option rel="JE" value="JE Level 1 PCM 1">JE Level 1 PCM 1</option>

                                        <option rel="JW" value="JW Level 2 PCM 1">JW Level 2 PCM 1</option>
                                        <option rel="JW" value="JW03 Level 3 PCM 1">JW03 Level 3 PCM 1</option>

                                        <option rel="KT" value="KT Level 4 PCM 1">KT Level 4 PCM 1</option>

                                        <option rel="NT" value="NT Level 3 PCM 1">NT Level 3 PCM 1</option>

                                        <option rel="OC" value="OC Level 2 PCM 1">OC Level 2 PCM 1</option>
                                        <option rel="OC" value="OCT Level 2 PCM 1">OCT Level 2 PCM 1</option>
                                        <option rel="OC" value="OCN Level 3 PCM 1">OCN Level 3 PCM 1</option>

                                        <option rel="PL" value="PL Level 1 PCM 1">PL Level 1 PCM 1</option>

                                        <option rel="PR" value="PR Level 2 PCM 1">PR Level 2 PCM 1</option>

                                        <option rel="QT" value="QT Level 2 PCM 1">QT Level 2 PCM 1</option>

                                        <option rel="TB" value="TB Level 1 PCM 1">TB Level 1 PCM 1</option>

                                        <option rel="TP" value="TP Level 1 PCM 1">TP Level 1 PCM 1</option>

                                        <option rel="TS" value="TS Level 1 PCM 1">TS Level 1 PCM 1</option>
                                        <option rel="TS" value="TS2C Level 2 PCM 2">TS2C Level 2 PCM 2</option>



                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>




                                <div id="form1"></div>



                            </div>


                        </div>





                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />

                    </fieldset>
                    <!-- <fieldset>
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

                    </fieldset> -->

                </form>

                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
                <script src="./othersForm.js"></script>









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

    <script>
    $(function() {

        var $cat = $("#cat"),
            $subcat = $("#subcat");

        $cat.on("change", function() {
            var _rel = $(this).val();
            $subcat.find("option").attr("style", "");
            $subcat.val("");
            if (!_rel) return $subcat.prop("disabled", true);
            $subcat.find("[rel=" + _rel + "]").show();
            $subcat.prop("disabled", false);
        });

    });
    </script>

</body>

</html>