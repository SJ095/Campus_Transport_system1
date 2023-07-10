<?php
session_start();
include('../../authentication/connection.php');
$temp=$_POST['driver_id'];
$sql="DELETE FROM driver WHERE driver_id='$temp'";
if ($conn->query($sql) === TRUE) {
    echo "<p>Deleting successful!</p>";
    header("location:adddriver.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
