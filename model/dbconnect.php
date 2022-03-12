<?php 

    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "sketchbook";

    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
?>