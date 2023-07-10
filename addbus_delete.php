<?php
session_start();
include('../../authentication/connection.php');
$temp=$_POST['bus_id'];
$sql="DELETE FROM bus WHERE bus_id='$temp'";
if ($conn->query($sql) === TRUE) {
    echo "<p>Deleting successful!</p>";
    header("location:addbus.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
