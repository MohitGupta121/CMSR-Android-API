<?php include("includes/connection.php");

$clg_sub_code=trim($_POST['clg_sub_code']);

$query= "SELECT subject_new.type FROM subject_new WHERE subject_new.clg_sub_code = '$clg_sub_code' and subject_new.active = 1";


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