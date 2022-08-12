<?php include("includes/connection.php");

$batch_id=trim($_POST['batch_id']);
$semester=trim($_POST['semester']);

$query= "SELECT student_college_info_new.* from student_college_info_new, assign_student WHERE student_college_info_new.batch_id = $batch_id  AND student_college_info_new.semester = $semester AND student_college_info_new.computer_code = assign_student.computer_code AND student_college_info_new.academic_session = 22  ORDER BY student_college_info_new.enrollment_no,
student_college_info_new.student_name";


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