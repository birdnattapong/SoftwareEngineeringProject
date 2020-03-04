<?php
    $dbhost = "10.199.66.227";
    $username = "20S2_g6";
    $password = "xNib9gFf";
    $dbname = "20S2_g6";

    $conn = mysqli_connect($dbhost,$username,$password,$dbname) or die("Error: " . mysqli_error($conn));
    mysqli_query($conn,"SET CHARACTER SET utf8");
?>