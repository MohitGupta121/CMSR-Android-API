<?php include("includes/connection.php");

$clg_sub_code=trim($_POST['clg_sub_code']);

$query1 = "SELECT DISTINCT(topic.topic_id),topic.topic_name from subject_batch,topic where subject_batch.clg_sub_code= '$clg_sub_code' and subject_batch.clg_sub_code = topic.subject_code and topic.active=1";

$query2 = "SELECT * from lecture_type";

$result = mysqli_query($conn, $query1);

$result1 = mysqli_query($conn, $query2);

while($row[] = $result->fetch_assoc()) {
	$tem = $row;
	$json = json_encode(['Topics' => $tem]);
}

while($row1[] = $result1->fetch_assoc()) {
	$tem1 = $row1;
	$json1 = json_encode(['lecture_type' => $tem1]);
}


 echo $json;
 echo $json1;
?>
