<?php include("includes/connection.php");

$computer_code=trim($_POST['computer_code']);

$query="SELECT first_name, last_name FROM `faculty_info` WHERE `computer_code` = '$computer_code'";

$result = mysqli_query($conn, $query);
$number_of_rows = mysqli_num_rows($result);

$response = array();

if($number_of_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $response[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode(array("faculty_info"=>$response));
?>