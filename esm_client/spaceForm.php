<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- libraries -->
    <script src="./libraries/jquery-3.4.1.min.js"></script>
    <script src="./libraries/jquery.validate.js"></script>
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
    <title>Requestor | ESM</title>

</head>

<body>

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
                    <a class="nav-link" href="allForms.php">Request</a>
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


    <div class="container">

        <h1>Request for Space</h1>
        <p class="formDescription">This request form allows you to request for the installation of ... </p>

        <div class="row">
            <div class="col-lg-12">
                <ul id="normalForm">
                    <li class="active">Personal Information</li>
                    <li>Racks</li>
                    <li>Technical Information</li>
                </ul>
            </div>

            <div class="col-lg-12">
                <form action="spaceFormProcess.php" id="msform" method="post" class="needs-validation">
                    <!-- START: personal information -->
                    <fieldset>
                        <h2 class="fs-title">Personal Information</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following fields</h3>
                        <label for="inputState">Name<span class="requiredField">*</span></label>
                        <input type="text" name="requestorName" placeholder="" required />

                        <label for="inputState">Email<span class="requiredField">*</span></label>
                        <input type="text" name="requestorEmail" placeholder="" required />

                        <label for="inputState">Department<span class="requiredField">*</span></label>
                        <input type="text" name="requestorDepartment" placeholder="" required />

                        <label for="inputState">Reason<span class="requiredField">*</span></label>
                        <input type="text" name="requestorReason" placeholder="" required />

                        <input type="button" id="next" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <!-- END: personal information -->


                    <!-- START: number of racks -->

                    <fieldset>
                        <h2 class="fs-title">Number Of Racks</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following field</h3>

                        <div id="selected_form_code">
                            <label for="inputState">Number of Racks<span class="requiredField">*</span></label>
                            <select id="select_btn" class="form-control" required>
                                <option value="0" selected="selected">Please choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <!-- <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option> -->
                            </select>
                        </div>

                        <div class="form1"></div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <!-- END: number of racks -->


                    <!-- START: technical information -->
                    <fieldset>
                        <h2 class="fs-title">Technical Information</h2>
                        <h3 class="fs-subtitle">Please kindly complete the following fields</h3>

                        <div class="row">
                            <div class="col-lg-12">


                                <div class="form-group">
                                    <label for="inputState">Power Type<span class="requiredField">*</span></label>
                                    <select required id="inputState" class="form-control" name="powerType" required>
                                        <option value="AC">AC</option>
                                        <option value="DC" selected>DC</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Rack Supply<span class="requiredField">*</span></label>
                                    <select required id="inputState" class="form-control" name="rackType" required>
                                        <option value="Requestor Rack">Requestor Racks</option>
                                        <option value="Singtel Racks" selected>Singtel Racks</option>

                                    </select>
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
                                    <label for="inputState">Preferred Exchange<span
                                            class="requiredField">*</span></label>

                                    <select id="cat" name="exchange" class="form-control">
                                        <option value>No Preference</option>
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
                                    <label for="inputState">Preferred Room<span class="requiredField">*</span></label>

                                    <select id="subcat" name="room" disabled="disabled" class="form-control">
                                        <option class="lablel" value>No Preference</option>
                                        <option rel="AM" value="AM Level 4 PCM 1">AM Level 4 PCM 1</option>
                                        <option rel="AM" value="AM3A Level 3 PCM 2">AM3A Level 3 PCM 2</option>
                                        <option rel="AM" value="AM Level 2 MDF">AM Level 2 MDF</option>

                                        <option rel="AR" value="AR Level 1 PCM 1">AR Level 1 PCM 1</option>
                                        <option rel="AR" value="AR05C Level 5 PCM 2">AR05C Level 5 PCM 2</option>
                                        <option rel="AR" value="AR Level 1 MDF">AR Level 1 MDF</option>


                                        <option rel="BD" value="BD Level 1 PCM 1">BD Level 1 PCM 1</option>
                                        <option rel="BD" value="BDN1 Level 1 PCM 1">BDN1 Level 1 PCM 1</option>
                                        <option rel="BD" value="BD033 Level 3 PCM 1">BD033 Level 3 PCM 1</option>
                                        <option rel="BD" value="BD5C5 Level 5 PCM 2">BD5C5 Level 5 PCM 2</option>
                                        <option rel="BD" value="BD Level 1 MDF">BD Level 1 MDF</option>


                                        <option rel="BP" value="BP Level 1 PCM 1">BP Level 1 PCM 1</option>
                                        <option rel="BP" value="BPN Level 2 PCM 1">BPN Level 2 PCM 1</option>
                                        <option rel="BP" value="BP3A Level 3 PCM 2">BP3A Level 3 PCM 2</option>
                                        <option rel="BP" value="BP Level 2 MDF">BP Level 2 MDF</option>

                                        <option rel="CG" value="CG Level 1 PCM 1">CG Level 1 PCM 1</option>
                                        <option rel="CG" value="CG Level 2 MDF">CG Level 2 MDF</option>

                                        <option rel="POC" value="POC Level 8 PCM 1">POC Level 8 PCM 1</option>
                                        <option rel="POC" value="POC07 Level 7 PCM 1">POC07 Level 7 PCM 1</option>
                                        <option rel="POC" value="POC Level 7 MDF">POC Level 7 MDF</option>


                                        <option rel="ES" value="ES Level 4 PCM 1">ES Level 4 PCM 1</option>
                                        <option rel="ES" value="ES2A Level 2 PCM 2">ES2A Level 2 PCM 2</option>
                                        <option rel="ES" value="ES Level 1 MDF">ES Level 1 MDF</option>


                                        <option rel="GL" value="GL Level 1 PCM 1">GL Level 1 PCM 1</option>
                                        <option rel="GL" value="GLN Level 2 PCM 1">GLN Level 2 PCM 1</option>
                                        <option rel="GL" value="GL Level 2 MDF">GL Level 2 MDF</option>

                                        <option rel="HG" value="HG Level 2 PCM 1">HG Level 2 PCM 1</option>
                                        <option rel="HG" value="HG Level 2 MDF">HG Level 2 MDF</option>


                                        <option rel="JE" value="JE Level 1 PCM 1">JE Level 1 PCM 1</option>
                                        <option rel="JE" value="JE Level 2 PCM 3">JE Level 2 PCM 3</option>
                                        <option rel="JE" value="JE Level 2 MDF">JE Level 2 MDF</option>

                                        <option rel="JW" value="JW Level 2 PCM 1">JW Level 2 PCM 1</option>
                                        <option rel="JW" value="JW03 Level 3 PCM 1">JW03 Level 3 PCM 1</option>
                                        <option rel="JW" value="JW3A Level 3 PCM 2">JW3A Level 3 PCM 2</option>
                                        <option rel="JW" value="JW Level 2 MDF">JW Level 2 MDF</option>

                                        <option rel="KT" value="KT Level 4 PCM 1">KT Level 4 PCM 1</option>
                                        <option rel="KT" value="KT Level 4 PCM 1">KT Level 4 PCM 1</option>
                                        <option rel="KT" value="KT Level 2 MDF">KT Level 2 MDF</option>

                                        <option rel="NT" value="NT Level 3 PCM 1">NT Level 3 PCM 1</option>
                                        <option rel="NT" value="NT Level 1 MDF">NT Level 1 MDF</option>
                                        <option rel="NT" value="NT Level 2 MDF">NT Level 2 MDF</option>


                                        <option rel="OC" value="OC Level 2 PCM 1">OC Level 2 PCM 1</option>
                                        <option rel="OC" value="OCT Level 2 PCM 1">OCT Level 2 PCM 1</option>
                                        <option rel="OC" value="OCN Level 3 PCM 1">OCN Level 3 PCM 1</option>
                                        <option rel="OC" value="OC3A Level 3 PCM 2">OC3A Level 3 PCM 2</option>
                                        <option rel="OC" value="OC Level 1 MDF">OC Level 1 MDF</option>


                                        <option rel="PL" value="PL Level 1 PCM 1">PL Level 1 PCM 1</option>
                                        <option rel="PL" value="PL Level 1 MDF">PL Level 1 MDF</option>

                                        <option rel="PR" value="PR Level 2 PCM 1">PR Level 2 PCM 1</option>
                                        <option rel="PR" value="PR Level 2 PCM 1">PR Level 2 MDF</option>


                                        <option rel="QT" value="QT Level 2 PCM 1">QT Level 2 PCM 1</option>
                                        <option rel="QT" value="QT Level 1 MDF">QT Level 1 MDF</option>


                                        <option rel="TB" value="TB Level 1 PCM 1">TB Level 1 PCM 1</option>
                                        <option rel="TB" value="TB Level 1 PCM 1">TB Level 1 PCM 1</option>
                                        <option rel="TB" value="TB Level 2 MDF">TB Level 2 MDF</option>


                                        <option rel="TP" value="TP Level 1 PCM 1">TP Level 1 PCM 1</option>
                                        <option rel="TP" value="TP3A Level 3 PCM 2">TP3A Level 3 PCM 2</option>
                                        <option rel="TP" value="TP Level 3 MDF">TP Level 3 MDF</option>

                                        <option rel="TS" value="TS Level 1 PCM 1">TS Level 1 PCM 1</option>
                                        <option rel="TS" value="TS2C Level 2 PCM 2">TS2C Level 2 PCM 2</option>
                                        <option rel="TS" value="TS Level 1 MDF">TS Level 1 MDF</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <br>
                                <br>


                                <div id="form_submit">
                                </div>



                            </div>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />

                    </fieldset>
                    <!-- END: technical information-->


                </form>


                <form action="spaceFormProcess.php" id="form_submit" method="post" name="form_submit">
                    <!-- Dynamic Registration Form Fields Creates Here -->
                </form>


                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
                <script src="./form1.js"></script>

            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('select#select_btn').change(function() {
            var sel_value = $('option:selected').val();
            console.log(sel_value);
            if (sel_value == 0) {
                $("#form_submit").empty(); // Resetting Form
                $("#form1").css({
                    'display': 'none'
                });
            } else {
                $("#form_submit").empty(); //Resetting Form
                // Below Function Creates Input Fields Dynamically
                create(sel_value);
                // Appending Submit Button To Form

                // $("#form_submit").append($("<input/>", {
                //     type: 'submit',
                //     value: 'Register'

                // }))
            }
        });

        function create(sel_value) {


            for (var i = 1; i <= sel_value; i++) {
                console.log(i);

                $("div#form1").append($("#form_submit").append($("<div/>", {
                        id: 'head'
                    }).append(

                        $("<h5/>").text("Rack " + i)),

                    $("<label/>").text("Rack Length (in mm)"),
                    $("<span/>").text("*"),
                    $("<input/>", {
                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter rack length',
                        name: 'rackSizeLength' + i
                    }),

                    $("<label/>").text("Rack Breadth (in mm)"),
                    $("<span/>").text("*"),
                    $("<input/>", {
                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter rack breadth',
                        name: 'rackSizeBreadth' + i
                    }),

                    $("<label/>").text("Rack Height (in mm)"),
                    $("<span/>").text("*"),
                    $("<input/>", {
                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter rack height',
                        name: 'rackSizeHeight' + i
                    }),

                    $("<label/>").text("Rack Weight (in kg)"),
                    $("<span/>").text("*"),
                    $("<input/>", {
                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter rack weight',
                        name: 'rackSizeWeight' + i
                    }),


                    $("<label/>").text("Breaker Size (in A)"),
                    $("<span/>").text("*"),
                    $("<input/>", {

                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter breaker size',
                        name: 'breakerSize' + i
                    }),


                    $("<label/>").text("Breaker Quantity (in pair/s)"),
                    $("<span/>").text("*"),
                    $('<select/>', {
                        id: 'inputState',
                        class: "form-control",
                        placeholder: 'Rack ' + i + ' - Enter breaker quantity',
                        name: 'breakerQuantity' + i
                    }).append(
                        $('<option />')
                        .text('1 pair')
                        .val('1'),

                        $('<option />')
                        .text('2 pairs')
                        .val('2')
                    ),

                    $("<label/>").text("Power Consumption (in kW)"),
                    $("<span/>").text("*"),
                    $('<select/>', {
                        id: 'inputState',
                        class: "form-control",
                        placeholder: 'Rack ' + i + ' - Enter power consumption',
                        name: 'powerConsumption' + i
                    }).append(
                        $('<option />')
                        .text('1 kW')
                        .val('1'),
                        $('<option />')
                        .text('2 kW')
                        .val('2'),
                        $('<option />')
                        .text('3 kW')
                        .val('3'),
                        $('<option />')
                        .text('4 kW')
                        .val('4'),
                        $('<option />')
                        .text('5 kW')
                        .val('5'),
                        $('<option />')
                        .text('6 kW')
                        .val('6'),
                        $('<option />')
                        .text('7 kW')
                        .val('7'),
                        $('<option />')
                        .text('8 kW')
                        .val('8'),
                        $('<option />')
                        .text('9 kW')
                        .val('9'),

                    ),


                    $("<br/>"), $("<br/>")))

                console.log(name);
            }
        }
    });

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