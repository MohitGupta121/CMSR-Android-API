<?php include("includes/connection.php");

// $conn=mysqli_connect("localhost","root","xxx123xxx");
// mysqli_select_db($conn,"minor_new");

$computer_code=trim($_POST['computer_code']);
$pswd=trim($_POST['password']);
$hash_val = md5($pswd);

$query="SELECT is_student FROM `login` WHERE `computer_code` = '$computer_code' and password='$hash_val'";

$result = mysqli_query($conn, $query);
$number_of_rows = mysqli_num_rows($result);

$response = array();

if($number_of_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $response[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode(array("student_info"=>$response));
?>

