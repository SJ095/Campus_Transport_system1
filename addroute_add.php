<?php
session_start();
include('../../authentication/connection.php');
$rid = $_POST['route_id'];
$src = $_POST['source'];
$dest = $_POST['destination'];
$departure_src=$_POST['departure_src'];
$departure_dst=$_POST['departure_dst'];
$sql="insert into route values ('$rid','$src','$dest','$departure_src','$departure_dst')";
$query =mysqli_query($conn,$sql);
if($query){            
    header("location: addroute.php");
}
else{
    echo 'value exists';
}
?>
