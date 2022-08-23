<?php include("includes/connection.php");

$attend_info=trim($_POST['attend_info']);

$query= "SELECT attend_record_new.*,assign_student.student_name as name ,assign_student.enrollment_no as uno from attend_record_new,assign_student where attend_record_new.attend_info='$attend_info' and attend_record_new.student_computer_code=assign_student.computer_code ORDER BY assign_student.student_name";


$result = mysqli_query($conn, $query);

$json = array();

while($row[] = $result->fetch_assoc()) {
	$tem = $row;
	$json = json_encode($tem);
}

if ($json!=null) {
	echo $json;
}else{
	echo json_encode(array());
}
 
?>