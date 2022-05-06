<?php

$conn=mysqli_connect("localhost","root","xxx123xxx");
mysqli_select_db($conn,"cms_cms");


if (!$conn) {
    die("Database connection failed: " . mysqli_error());
}

?>