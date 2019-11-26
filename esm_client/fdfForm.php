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

        <h1>Request for FDF</h1>
        <p class="formDescription">This request form allows you to request for the installation of ... </p>


        <div class="row">
            <div class="col-lg-12">
                <ul id="othersForm">
                    <li class="active">Personal Information</li>
                    <li>Technical Information</li>
                </ul>
            </div>
            <div class="col-lg-12">

                <form action="fdfFormProcess.php" id="msform" method="post" class="needs-validation">

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
                                    <label for="rackSize">Number of Cable Ties<span
                                            class="requiredField">*</span></label>
                                    <input type="text" id="numberOfCableTies" placeholder="Enter number of cable ties"
                                        name="numberOfCableTies" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>


                                <div class="form-group">
                                    <label for="startDate">Completion Date<span class="requiredField">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" id="data-date" placeholder="Enter end date" name="endDate"
                                            required>
                                        <div class="input-group-addon">
                                        </div>
                                    </div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>




                                <div class="form-group">
                                    <label for="inputState">Exchange<span class="requiredField">*</span></label>

                                    <select id="cat" name="exchange" class="form-control" requ ired>
                                        <option value>Please select below</option>
                                        <option value="AM">Ang Mo Kio Exchange (AM)</option>
                                        <option value="AR">Ayer Rajah Exchange (AR)</option>
                                        <option value="BD">Bedok Exchange (BD)</option>
                                        <option value="BP">Bukit Panjang Exchange (BP)</option>
                                        <option value="ES">East Exchange (ES)</option>
                                        <option value="JW">Jurong West Exchange (JW)</option>
                                        <option value="OC">Orchard Exchange (OC)</option>
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
                                        <option rel="AM" value="AM3A Level 3 PCM 2">AM3A Level 3 PCM 2</option>
                                        <option rel="AR" value="AR05C Level 5 PCM 2">AR05C Level 5 PCM 2</option>
                                        <option rel="BD" value="BD5C5 Level 5 PCM 2">BD5C5 Level 5 PCM 2</option>
                                        <option rel="BP" value="P3A Level 3 PCM 2">BP3A Level 3 PCM 2</option>
                                        <option rel="ES" value="ES2A Level 2 PCM 2">ES2A Level 2 PCM 2</option>
                                        <option rel="JW" value="JW3A Level 3 PCM 2">JW3A Level 3 PCM 2</option>
                                        <option rel="OC" value="OC3A Level 3 PCM 2">OC3A Level 3 PCM 2</option>
                                        <option rel="TP" value="TP3A Level 3 PCM 2">TP3A Level 3 PCM 2</option>
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

                    <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->


                </form>


                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
                <script src="./othersForm.js"></script>

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







            </div>





        </div>
    </div>

</body>

</html>