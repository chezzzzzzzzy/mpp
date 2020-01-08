<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- libraries -->
    <script src="./libraries/jquery-3.4.1.min.js"></script>
    <script src="./libraries/jquery.validate.js"></script>
    <script src="./libraries/jquery.easing.min.js"></script>
    <script src="./libraries/popper.min.js"></script>
    <script src="./libraries/js/bootstrap.min.js"></script>
    <script src="./libraries/additional-methods.js"></script>
    <script src="./libraries/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libraries/bootstrap-datepicker.css">


    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="form1.css">
    <title>Requestor | MPP</title>
</head>

<body>

    <!-- START: navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img src="./assets/singtelLogo.png">
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
                Master Planner Portal
            </span>
        </div>
    </nav>
    <!-- END: navbar -->



    <div class="container">

        <!-- START: title and subtitle -->
        <h1>Request for Cable Tray</h1>
        <p class="formDescription">This request form allows you to request for the installation of ... </p>
        <!-- END: title and subtitle -->


        <div class="row">
            <!-- START: progress bar -->
            <div class="col-lg-12">
                <ul id="othersForm">
                    <li class="active">Personal Information</li>
                    <li>Technical Information</li>
                </ul>
            </div>
            <!-- END: progress bar -->

            <!-- START: dynamic form -->
            <div class="col-lg-12">
                <form action="cableTrayFormProcess.php" id="msform" method="post" class="needs-validation">
                    <fieldset id="personalInformation">
                        <h2 class="fs-title">Personal Information</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following fields</h3>

                        <label for="inputState">Name<span class="requiredField">*</span></label>
                        <input type="text" name="requestorName" required />

                        <label for="inputState">Email<span class="requiredField">*</span></label>
                        <input type="text" name="requestorEmail" required />

                        <label for="inputState">Department<span class="requiredField">*</span></label>
                        <input type="text" name="requestorDepartment" required />

                        <label for="inputState">Reason<span class="requiredField">*</span></label>
                        <input type="text" name="requestorReason" required />

                        <input type="button" id="next" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Technical Information</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following fields</h3>

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="rackSize">Rack Location<span class="requiredField">*</span></label>
                                    <input type="text" id="rackSizeLength"
                                        name="rackLocation" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="rackSize">FDF Rack Location<span class="requiredField">*</span></label>
                                    <input type="text" id="rackSizeLength"
                                        name="fdfRackLocation" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="startDate">Installation Date (Start)<span
                                            class="requiredField">*</span></label>
                                    <div class="input-group date" data-provide="datepicker"
                                        data-date-format="dd/mm/yyyy">
                                        <input type="text" id="data-date" name="startDate" required>
                                        <div class="input-group-addon"></div>
                                    </div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="endDate">Completion Date (End)<span
                                            class="requiredField">*</span></label>
                                    <div class="input-group date" data-provide="datepicker"
                                        data-date-format="dd/mm/yyyy">
                                        <input type="text" id="data-date" name="endDate" required>
                                        <div class="input-group-addon"></div>
                                    </div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>


                                <div class="form-group">
                                    <label for="inputState">Exchange<span class="requiredField">*</span></label>

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
                                        <option rel="AM" value="AM3A Level 3 PCM 2">AM3A Level 3 PCM 2</option>

                                        <option rel="AR" value="AR Level 1 PCM 1">AR Level 1 PCM 1</option>
                                        <option rel="AR" value="AR05C Level 5 PCM 2">AR05C Level 5 PCM 2</option>

                                        <option rel="BD" value="BD Level 1 PCM 1">BD Level 1 PCM 1</option>
                                        <option rel="BD" value="BDN1 Level 1 PCM 1">BDN1 Level 1 PCM 1</option>
                                        <option rel="BD" value="BD033 Level 3 PCM 1">BD033 Level 3 PCM 1</option>
                                        <option rel="BD" value="BD5C5 Level 5 PCM 2">BD5C5 Level 5 PCM 2</option>

                                        <option rel="BP" value="BP Level 1 PCM 1">BP Level 1 PCM 1</option>
                                        <option rel="BP" value="BPN Level 2 PCM 1">BPN Level 2 PCM 1</option>
                                        <option rel="BP" value="BP3A Level 3 PCM 2">BP3A Level 3 PCM 2</option>

                                        <option rel="CG" value="CG Level 1 PCM 1">CG Level 1 PCM 1</option>

                                        <option rel="POC" value="POC Level 8 PCM 1">POC Level 8 PCM 1</option>
                                        <option rel="POC" value="POC Level 7 PCM 1">POC07 Level 7 PCM 1</option>

                                        <option rel="ES" value="ES Level 4 PCM 1">ES Level 4 PCM 1</option>
                                        <option rel="ES" value="ES2A Level 2 PCM 2">ES2A Level 2 PCM 2</option>

                                        <option rel="GL" value="GL Level 1 PCM 1">GL Level 1 PCM 1</option>
                                        <option rel="GL" value="GLN Level 2 PCM 1">GLN Level 2 PCM 1</option>

                                        <option rel="HG" value="HG Level 2 PCM 1">HG Level 2 PCM 1</option>

                                        <option rel="JE" value="JE Level 1 PCM 1">JE Level 1 PCM 1</option>

                                        <option rel="JW" value="JW Level 2 PCM 1">JW Level 2 PCM 1</option>
                                        <option rel="JW" value="JW03 Level 3 PCM 1">JW03 Level 3 PCM 1</option>
                                        <option rel="JW" value="JW3A Level 3 PCM 2">JW3A Level 3 PCM 2</option>

                                        <option rel="KT" value="KT Level 4 PCM 1">KT Level 4 PCM 1</option>

                                        <option rel="NT" value="NT Level 3 PCM 1">NT Level 3 PCM 1</option>

                                        <option rel="OC" value="OC Level 2 PCM 1">OC Level 2 PCM 1</option>
                                        <option rel="OC" value="OCT Level 2 PCM 1">OCT Level 2 PCM 1</option>
                                        <option rel="OC" value="OCN Level 3 PCM 1">OCN Level 3 PCM 1</option>
                                        <option rel="OC" value="OC3A Level 3 PCM 2">OC3A Level 3 PCM 2</option>

                                        <option rel="PL" value="PL Level 1 PCM 1">PL Level 1 PCM 1</option>

                                        <option rel="PR" value="PR Level 2 PCM 1">PR Level 2 PCM 1</option>

                                        <option rel="QT" value="QT Level 2 PCM 1">QT Level 2 PCM 1</option>

                                        <option rel="TB" value="TB Level 1 PCM 1">TB Level 1 PCM 1</option>

                                        <option rel="TP" value="TP Level 1 PCM 1">TP Level 1 PCM 1</option>
                                        <option rel="TP" value="TP3A Level 3 PCM 2">TP3A Level 3 PCM 2</option>

                                        <option rel="TS" value="TS Level 1 PCM 1">TS Level 1 PCM 1</option>
                                        <option rel="TS" value="TS2C Level 2 PCM 2">TS2C Level 2 PCM 2</option>

                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                    </fieldset>
                </form>

                <script src="./othersForm.js"></script>



            </div>
            <!-- END: dynamic form -->


            <script>
            // START: function to check for room/s in a specific exchange
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
            // END: function to check for room/s in a specific exchange
            </script>

        </div>
    </div>

</body>

</html>
