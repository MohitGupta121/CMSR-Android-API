<?php include("includes/connection.php");

// $conn=mysqli_connect("localhost","root","xxx123xxx");
// mysqli_select_db($conn,"minor_new");

$computer_code=trim($_POST['computer_code']);
$pswd=trim($_POST['password']);
$hash_val = md5($pswd);


$qry="select * from login where computer_code='$computer_code' and password='$hash_val'";
$raw=mysqli_query($conn,$qry);
$count=mysqli_num_rows($raw);

$query="SELECT * FROM login WHERE computer_code = '$computer_code' AND is_student = 1";
$rawst=mysqli_query($conn,$query);
$countst=mysqli_num_rows($rawst);


if (!$conn) {
    die("Database connection failed: " . mysqli_error());
}

if ($countst>0) {
	$response['is_student']="yes";
}else{
	$response['is_student']="no";
}

if($count>0){
    $response['message']="exist";
}
else{
    $response['message']="failed";
}

echo json_encode($response);
?>