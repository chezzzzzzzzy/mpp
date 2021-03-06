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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
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

    <!-- <img src="test.png" class="test"> -->


    <div class="container">


        <div class="row">

            <div class="col-lg-3"></div>

            <div class="col-lg-12">
                <h1 class="centerAlign topSpaceLarge">Request Type</h1>
                <h5 class="centerAlign x1">All the forms you need to request for resources</h5>
            </div>
            <div class="col-lg-3"></div>


        </div>


        <div class="row">

            <div class="col-lg-3"></div>

            <div class="col-lg-2">
                <a href="spaceForm.php"><button class="selectorButton2">Space</button></a>
                <p class="centerAlign2">For new spaces</p>
            </div>

            <div class="col-lg-2">
                <a href="powerForm.php"><button class="selectorButton2">Power</button></a>
                <p class="centerAlign2">For additional power</p>

            </div>


            <div class="col-lg-2">
                <!-- <a href="othersForm.php"><button class="selectorButton">Others</button></a> -->

                <div class="dropdown">
                    <button class="btn dropdown-toggle selectorButton2" type="button" data-toggle="dropdown">More
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <a href="fdfForm.php"><button class="selectorButton3">FDF</button></a>
                        <a href="ssuForm.php"><button class="selectorButton3">SSU</button></a>
                        <a href="cableTrayForm.php"><button class="selectorButton3">Cable Tray</button></a>
                        <a href="generalForm.php"><button class="selectorButton3">Others</button></a>

                      
                    </ul>
                </div>
            </div>
            <div class="col-lg-3"></div>


        </div>

        <div class="row">
            <div class="col-lg-3"></div>

            <div class="col-lg-6">
                <img src="server.svg" id="serverImg">
            </div>
            <div class="col-lg-3"></div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <footer class="centerAlign">&copy 2019 Singtel (Fixed Network Strategy and Evolution)</footer>


</body>

</html>