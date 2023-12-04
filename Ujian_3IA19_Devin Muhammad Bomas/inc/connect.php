<?php
  
$host = 'localhost';
$user = 'root';
$pwd = '';
$db_name = 'profile';

$con = new mysqli($host, $user, $pwd, $db_name);

if($con){
    echo "connection successfull";
}else{
    die(mysqli_error($con));
}
?>