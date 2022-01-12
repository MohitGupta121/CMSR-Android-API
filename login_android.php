<?php
$conn=mysqli_connect("localhost","root","xxx123xxx");
mysqli_select_db($conn,"demo");

$user_id=trim($_POST['user_id']);
$pswd=trim($_POST['password']);
$hash_val = md5($pswd);

$qry="select * from login where user_id='$user_id' and password='$hash_val'";
$raw=mysqli_query($conn,$qry);
$count=mysqli_num_rows($raw);

if (!$conn) {
    die("Database connection failed: " . mysqli_error());
}

if($count>0){
    $response['message']="exist";
}
else{
    $response['message']="failed";
}

echo json_encode($response);
?>