<?php include("includes/connection.php");

$computer_code=trim($_POST['computer_code']);
$attend_info_id=trim($_POST['attend_info_id']);
$is_attended=trim($_POST['is_attended']);

$query= "INSERT INTO `attend_record_new` (`student_computer_code`, `attend_info`, `attend`) VALUES ('$computer_code', '$attend_info_id' , '$is_attended')";

$result = mysqli_query($conn, $query);

if ($result) {
	echo json_encode(array("INSERT SUCESS"));
}else{
	echo json_encode(array("ERROR"));
}
?>