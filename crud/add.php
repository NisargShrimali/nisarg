<?php 
include 'conn.php';

if(isset($_POST['add'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $gender = $_POST['gender'];
    $hobbies = implode(",",$_POST['hobbies']);
    $country = $_POST['country'];
    $sql = "INSERT INTO user(fname,lname,email,password,address,phoneno,gender,hobbies,country)
    VALUES('$fname','$lname','$email','$password','$address','$phoneno','$gender','$hobbies','$country')";
    $conn->query($sql);
    header('Location: index.php');
}
