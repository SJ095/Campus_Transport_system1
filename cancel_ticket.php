<?php
include('../authentication/connection.php');
session_start();
$ticket_id=$_POST['ticket_id'];
$user=$_POST['user'];
$role = $_SESSION['role'];
$bus_id =$_POST['bus_id'];

// Increment the seats of the bus
$sql1 = "UPDATE bus SET seats = seats + 1 WHERE bus_id = $bus_id";
if ($conn->query($sql1) === FALSE) {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if($role=='student'){
    $sql2 = "DELETE FROM student_ticket WHERE student_id='".$user."'";
}
else if($role=='faculty'){
    $sql2 = "DELETE FROM faculty_ticket WHERE faculty_id='".$user."'";
}

if ($conn->query($sql2) === TRUE) {
    echo "<p>Cancelling successful!</p>";
    header("location:../cancel/cancel.php"); 
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
?>
