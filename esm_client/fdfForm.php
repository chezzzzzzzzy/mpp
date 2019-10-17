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


    <title>User | ESM</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                    <label for="rackSize">Number of Cable Ties<span class="requiredField">*</span></label>
                                    <input type="text" id="numberOfCableTies" placeholder="Enter number of cable ties"
                                        name="numberOfCableTies" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>


                                <div class="form-group">
                                    <label for="startDate">End Date<span class="requiredField">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" id="data-date" placeholder="Enter end date" name="endDate" required>
                                        <div class="input-group-addon">
                                        </div>
                                    </div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Room<span class="requiredField">*</span></label>
                                    <select id="inputState" class="form-control" name="room">
                                        <option value="2" selected>PCM 2</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="inputState">Exchange<span class="requiredField">*</span></label>
                                    <select required id="inputState" class="form-control" name="exchange" >
                                        <option value="No Preference">Please select below</option>
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









            </div>





        </div>
    </div>

</body>

</html>