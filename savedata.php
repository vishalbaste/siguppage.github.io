<?php

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$password= $_POST['password'];
$gender= $_POST['gender'];

// Connection database

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','php_crud');

    $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

    if($conn==true){
        echo "<h1 style='text-align:center;'>Processing Your Requast...</h1>";
    }
    else{
        echo "<h1 style='text-align:center;'>Database Connection Fail (: </h1>";
    }

    $qure = "INSERT INTO `php_crud`.`sform` (`fname`,`lname`,`email`,`dob`,`password`,`gender`) VALUE ('$fname','$lname','$email','$dob','$password','$gender');";

    $result = mysqli_query($conn,$qure);

    if($result == true){
        echo "<h1 style='text-align:center;'>Sucessfull</h1>";
    }
    else{
        echo "<h1 style='text-align:center;'>Data Save Fail</h1>";
    }

    ?>
    <script>
    setInterval(()=>{window.location.href="index.html"},2000);
    </script>


