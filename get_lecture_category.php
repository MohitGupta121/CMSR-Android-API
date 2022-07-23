<?php include("includes/connection.php");

$clg_sub_code=trim($_POST['clg_sub_code']);

$query= "SELECT subject_new.type FROM subject_new WHERE subject_new.clg_sub_code = $clg_sub_code AND subject_new.active = 1";


$result = mysqli_query($conn, $query);

while($row[] = $result->fetch_assoc()) {
	$tem = $row;
	$json = json_encode($tem);
}

 echo $json;
?>