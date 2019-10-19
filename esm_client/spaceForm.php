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
    <link rel="stylesheet" href="form1.css">
    <title>User | ESM</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <div class="authLogo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png"
                    alt="./assets/singtelLogo.png">
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
            </ul>
            <span class="navbar-text ml-auto">
                Exchange Space Management
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
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="form1"></div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>


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
                                    <label for="startDate">Start Date<span class="requiredField">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" id="data-date" name="startDate" required>
                                        <div class="input-group-addon"></div>
                                    </div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="endDate">End Date<span class="requiredField">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" id="data-date" name="endDate" required>
                                        <div class="input-group-addon"></div>
                                    </div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>



                                <!-- <div class="form-group">
                                    <label for="inputState">Level<span class="requiredField">*</span></label>
                                    <input type="text" name="level" placeholder="" required />
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div> -->


                                <div class="form-group">
                                    <label for="inputState">Preferred Exchange<span class="requiredField">*</span></label>

                                    <select id="cat" name="exchange" class="form-control" >
                                        <option value>No Preferrnce</option>
                                        <option value="AM">Ang Mo Kio Exchange (AM)</option>
                                        <option value="AR">Ayer Rajah Exchange (AR)</option>
                                        <option value="BD">Bedok Exchange (BD)</option>
                                        <option value="BP">Bukit Panjang Exchange (BP)</option>
                                        <option value="CG">Changi Exchange (CG)</option>
                                        <option value="CY">??</option>
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
                                    <label for="inputState">Preferred Room<span
                                            class="requiredField">*</span></label>
                                            
                                    <select id="subcat" name="room" disabled="disabled" class="form-control">
                                        <option class="lablel" value>No Preference</option>
                                        <option rel="AM" value="AM Level 4 PCM 1">AM Level 4 PCM 1</option>
                                        <option rel="AM" value="AM3A Level 3 PCM 2">AM3A Level 3 PCM 2</option>

                                        <option rel="AR" value="AR Level 1 PCM 1">AR Level 1 PCM 1</option>
                                        <option rel="AR" value="AR05C Level 5 PCM 2">AR05C Level 5 PCM 2</option>

                                        <option rel="BD" value="BD Level 1 PCM 1<">BD Level 1 PCM 1</option>
                                        <option rel="BD" value="BDN1 Level 1 PCM 1">BDN1 Level 1 PCM 1</option>
                                        <option rel="BD" value="BD033 Level 3 PCM 1<">BD033 Level 3 PCM 1</option>
                                        <option rel="BD" value="BD5C5 Level 5 PCM 2">BD5C5 Level 5 PCM 2</option>

                                        <option rel="BP" value="BP Level 1 PCM 1<">BP Level 1 PCM 1</option>
                                        <option rel="BP" value="BPN Level 2 PCM 1">BPN Level 2 PCM 1</option>
                                        <option rel="BP" value="P3A Level 3 PCM 2<">BP3A Level 3 PCM 2</option>

                                        <option rel="CG" value="CG Level 1 PCM 1">CG Level 1 PCM 1</option>

                                        <option rel="ES" value="ES Level 4 PCM 1">ES Level 4 PCM 1</option>
                                        <option rel="ES" value="ES2A Level 2 PCM 2<">ES2A Level 2 PCM 2</option>

                                        <option rel="GL" value="GL Level 1 PCM 1">GL Level 1 PCM 1</option>
                                        <option rel="GL" value="GLN Level 2 PCM 1">GLN Level 2 PCM 1</option>

                                        <option rel="HG" value="HG Level 2 PCM 1">HG Level 2 PCM 1</option>

                                        <option rel="JE" value="JE Level 1 PCM 1">JE Level 1 PCM 1</option>
                                        <option rel="JE" value="JE Level 2 PCM 3">JE Level 2 PCM 3</option>

                                        <option rel="JW" value="JW Level 2 PCM 1">JW Level 2 PCM 1</option>
                                        <option rel="JW" value="JW03 Level 3 PCM 1">JW03 Level 3 PCM 1</option>
                                        <option rel="JW" value="JW3A Level 3 PCM 2">JW3A Level 3 PCM 2</option>

                                        <option rel="KT" value="KT Level 4 PCM 1">KT Level 4 PCM 1</option>

                                        <option rel="KT" value="NT Level 3 PCM 1">NT Level 3 PCM 1</option>

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



                                <!-- <div class="form-group">
                                    <label for="inputState">Preferred Exchange</label>
                                    <select required id="inputState" class="form-control" name="exchange">
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
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div> -->

                                <div id="form_submit">
                                </div>

                            </div>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />


                    </fieldset>

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
                    $("<label/>").text("Rack Size (Length in mm)"),
                    $("<input/>", {
                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter rack size (length)',
                        name: 'rackSizeLength' + i
                    }),
                    $("<label/>").text("Rack Size (Breadth in mm)"),
                    $("<input/>", {
                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter rack size (breadth)',
                        name: 'rackSizeBreadth' + i
                    }),
                    $("<label/>").text("Breaker Size"),
                    $("<input/>", {

                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter breaker size',
                        name: 'breakerSize' + i
                    }),
                    $("<label/>").text("Breaker Quantity"),
                    $("<input/>", {

                        type: 'text',
                        placeholder: 'Rack ' + i + ' - Enter breaker quantity',
                        name: 'breakerQuantity' + i
                    }),


                    $("<br/>"), $("<hr/>"), $("<br/>")))
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