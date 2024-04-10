<?php

// database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "assignment2";

// creating a connection
$con = mysqli_connect("localhost","root","","myblog");

// to ensure that the connection is made
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}

?>
