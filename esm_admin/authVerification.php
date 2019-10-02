<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "singtel_esm";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        if (isset($_POST['email']) and isset($_POST['password'])){
            
            // Assigning POST values to variables.
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // CHECK FOR THE RECORD FROM TABLE
            $query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
            
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $count = mysqli_num_rows($result);
            
            if ($count == 1){
            
                //echo "Login Credentials verified";
                header("Location: admin.php");
                $_SESSION['loggedin'] = true;
                echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

            } else {

                //echo "Invalid Login Credentials";
                header("Location: auth.php");
                echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
            }
        }  
?>
