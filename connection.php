<?php      
    $host = "localhost";  
    $user = "ansh";  
    $password = 'Ansh@4321#@#';  
    $db_name = "busbooking2";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
