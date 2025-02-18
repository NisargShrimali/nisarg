<?php

$server = "localhost";
$user = "root";
$pass = "admin123";
$db = "prac";

$conn = mysqli_connect($server,$user,$pass,$db);

if(mysqli_connect_error())
{
    die("Connectioned Failed" .mysqli_connect_error());
}