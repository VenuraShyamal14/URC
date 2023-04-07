<?php
/* Database connection start */
$servername = "sql313.epizy.com";
$username = "epiz_33741504";
$password = "LIgaCYqiLA5m";
$dbname = "epiz_33741504_urc_database";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>