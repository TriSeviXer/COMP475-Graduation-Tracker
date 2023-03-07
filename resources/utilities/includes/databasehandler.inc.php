<?php

//connection credentials as variables
$serverName = "localhost";
$dBUsername = "erickhoy_admin";
$dbPassword = "CWUGradTracker123";
$dbName = "erickhoy_graduation_tracker";

//connect to database function
$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dbName);

//handler for database connection function
if (!$conn){
    die("Connection failed: " .mysqli_connect_error());
}