<?php include("includes/connection.php");

$clg_sub_code=trim($_POST['clg_sub_code']);

$query= "SELECT DISTINCT(topic.topic_id),topic.topic_name from subject_batch,topic where subject_batch.clg_sub_code= $clg_sub_code and subject_batch.clg_sub_code = topic.subject_code and topic.active=1";


$result = mysqli_query($conn, $query);

while($row[] = $result->fetch_assoc()) {
	$tem = $row;
	$json = json_encode($tem);
}

 echo $json;
?>