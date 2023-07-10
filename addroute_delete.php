<?php
session_start();
include('../../authentication/connection.php');
$temp=$_POST['route_id'];
$sql="DELETE FROM route WHERE route_id='$temp'";
if ($conn->query($sql) === TRUE) {
    echo "<p>Deleting successful!</p>";
    header("location:addroute.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
