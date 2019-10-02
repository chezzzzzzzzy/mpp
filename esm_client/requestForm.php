
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

    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">


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
                    <a class="nav-link" href="requestForm.php">Request <span class="sr-only">(current)</span></a>
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


        <div class="row">
           

            <div class="col-lg-6">


                <form action="index.php" method="post" class="needs-validation" novalidate >



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
                        <label for="pdbFeeds">PDB Feeds<span class="requiredField">*</span></label>
                        <input type="text" class="form-control" id="pdbFeeds" placeholder="Enter PDB feeds"
                            name="pdbFeeds" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                    <label for="inputState">Location</label>
                    <select id="inputState" class="form-control" name="location">
                        <option value="Anywhere" selected>Anywhere</option>
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
                        <label for="inputState">Equipment Room</label>
                        <select id="inputState" class="form-control" name="room">
                            <option value="Anywhere" selected>Anywhere</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary ordinalButton">Submit</button>
                </form>
            </div>

            <div class="col-lg-6">

                <img src="server.svg" id="serverImg">
            </div>




        </div>
    </div>

</body>

</html>