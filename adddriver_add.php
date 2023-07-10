<?php
session_start();
include('../../authentication/connection.php');
$did = $_POST['driver_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$sql="INSERT INTO driver VALUES ('$did','$name','$phone')";
$query =mysqli_query($conn,$sql);
if($query){
    header("Location: adddriver.php");
}
else{
    echo 'Value exists';
}

?>
