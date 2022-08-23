<?php include("includes/connection.php");

$batch_id=trim($_POST['batch_id']);

$query= "SELECT attend_info_new.*,subject_batch.subject_name,subject_batch.batch,topic.topic_name,concat(time_slots.start_time,'-',time_slots.end_time) as time_slot,lecture_type.lecture_type as lecture ,(SELECT COUNT(*) from attend_record_new WHERE attend_record_new.attend_info=attend_info_new.attend_info and attend_record_new.attend=1 ) as total_present  from attend_info_new,subject_batch,topic,time_slots,lecture_type WHERE attend_info_new.batch_id=$batch_id and subject_batch.batch_id=attend_info_new.batch_id and attend_info_new.topic= topic.topic_id and attend_info_new.time_slot_id= time_slots.id and attend_info_new.lecture_type=lecture_type.lecture_id order by attend_info_new.attend_info desc";

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