<?php include("includes/connection.php");

$computer_code=trim($_POST['computer_code']);

$query= "call h_assigned_subjects_to_faculty('$computer_code',22)";

$result = mysqli_query($conn, $query);

$response = array();

while($row = mysqli_fetch_assoc($result)) {
	$response[] = $row;
}

header('Content-Type: application/json');
echo json_encode(array($response));
?>