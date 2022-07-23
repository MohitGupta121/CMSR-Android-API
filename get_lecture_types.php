<?php include("includes/connection.php");

$query= "SELECT * from lecture_type";

$result = mysqli_query($conn, $query);

while($row[] = $result->fetch_assoc()) {
    $tem = $row;
    $json = json_encode($tem);
}

 echo $json;
?>
