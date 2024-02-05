<?php  
// Database configuration  
$database_host = "dbhost.cs.man.ac.uk";  
$database_user = "c29824zl";  
$database_pass = "group_r5";  
$database_name = "2021_comp10120_r5";  
  
// Make the connecttion 
$conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

// Check connection  
if ($conn -> connect_error) {  
    die("Connection failed: " . $conn -> connect_error);  
}

?>