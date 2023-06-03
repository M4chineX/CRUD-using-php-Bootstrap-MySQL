<?php
 $conn =   mysqli_connect('localhost','root','','test');
if($conn-> error){
    die("Connection error". $conn-> connect_error);
}

//$sql = "SELECT id, name, email, address FROM contacts";



?>