<?php

$conn=mysqli_connect("localhost","root","xxx123xxx");
mysqli_select_db($conn,"minor_new");


if (!$conn) {
    die("Database connection failed: " . mysqli_error());
}

?>