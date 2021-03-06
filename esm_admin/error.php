<?php
session_start();
?>

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

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


    <!-- dependencies -->
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="main.css">


    <title>Admin | ESM</title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="auth.php">
            <div class="authLogo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png"
                    alt="singtelLogo.png">
            </div>
        </a>
        <span class="navbar-text ml-auto">
            Exchange Space Management
        </span>
    </nav> -->
    <?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // echo "Logged in already";
    ?>

    <?php } else {
    // echo "Please login.";
      

    ?>

    <div class="container">


        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 authForm">
                <h2 class="centerAlign"><b>Page Not Found 😢</b></h2>
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_yN8pO6.json" background="transparent"
                    speed="1" style="width: 600px; height: 600px;" autoplay>
                </lottie-player>
            </div>
            <div class="col-lg-2"></div>

            <div class="col-lg-2"></div>
            <div class="col-lg-8 ">

                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Singtel_logo.svg/1200px-Singtel_logo.svg.png"
                    alt="singtelLogo.png" class="smallLogo">

            </div>
            <div class="col-lg-2"></div>
        </div>
       

    </div>
    <?php }
?>

</body>

</html>