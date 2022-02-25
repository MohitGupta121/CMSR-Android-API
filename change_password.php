<?php include("includes/connection.php");

	$computer_code=trim($_POST['computer_code']);
	$password=trim($_POST['password']);

    $updatepass = "UPDATE login SET password = md5($password) WHERE computer_code = $computer_code";  
    $result = mysqli_query($conn, $updatepass);

 
    if ($conn -> affected_rows == 1) {
    	 $response['message']="true";
    }else{
    	 $response['message']="false";
    }

    echo json_encode($response);

?>