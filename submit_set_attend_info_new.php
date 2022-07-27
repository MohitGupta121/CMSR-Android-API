<?php include("includes/connection.php");

$batch_id=trim($_POST['batch_id']);
$faculty_computer_code=trim($_POST['faculty_computer_code']);
$date=trim($_POST['date']);
$lecture_type=trim($_POST['lecture_type']);
$time_slot_id=trim($_POST['time_slot_id']);
$topic=trim($_POST['topic']);
$lab_group=trim($_POST['lab_group']);
$ip=trim($_POST['ip']);

$query= "INSERT INTO `attend_info_new` ( `batch_id`, `faculty_computer_code`, `date`, `lecture_type`, `time_slot_id`, `topic`, `lab_group`,`ip`) VALUES ($batch_id, $faculty_computer_code, '$date', $lecture_type, '$time_slot_id', $topic, '$lab_group', '$ip')";


$result = mysqli_query($conn, $query);

if ($result) {
	echo "INSERTed";
}else{
	echo "ERROR";
}
?>