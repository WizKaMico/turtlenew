<?php 

$server = "localhost"; 
$database = "turtle"; 
$username = "root"; 
$password = ""; 

$conn = new mysqli($server, $username, $password, $database); 
if($conn){
    
}else{
    echo "CONNECTION LOST";
}

?>