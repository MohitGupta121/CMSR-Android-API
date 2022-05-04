<?php include("includes/connection.php");

$computer_code=trim($_POST['computer_code']);

$query= "SELECT DISTINCT subject_batch.* , subject_new.university_sub_code, department.name,department.dept_code from subject_batch , batch_coordinate , subject_new , department WHERE batch_coordinate.faculty_computer_code = $computer_code and subject_batch.academic_session_id = 22 and batch_coordinate.active =1 and subject_batch.batch_id = batch_coordinate.batch and subject_batch.flag=1 and subject_batch.department = department.id and subject_new.subject_name=subject_batch.subject_name and subject_new.semester=subject_batch.semester and subject_new.active=1";

$result = mysqli_query($conn, $query);

while($row[] = $result->fetch_assoc()) {
	$tem = $row;
	$json = json_encode($tem);
}

 echo $json;
?>