<?php
session_start();
include('../../authentication/connection.php');
$bid = $_POST['bus_id'];
$brole = $_POST['role'];          
$rid = $_POST['route_id'];
$seats = $_POST['seats'];
$did = $_POST['driver_id'];
$sql="INSERT INTO bus VALUES ('$bid','$did','$rid','$seats','$brole')";
$query =mysqli_query($conn,$sql);
if($query){        
        header("Location: addbus.php");
    }
    else{
        echo 'Value exists';
    }

?>




