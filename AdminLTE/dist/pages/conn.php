<?php

$server="localhost";
$user="root";
$pass="admin123";
$db="user";

$conn = mysqli_connect($server,$user,$pass,$db);

if($conn->connect_error){
    die("Connectioned Failed".$conn->connect_error);
}
?>
