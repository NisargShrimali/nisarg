<?php
include "conn.php";

if(isset($_POST['add']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_pass = $_POST['conf_pass'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];
    $gender = $_POST['gender'];
    $hobbies = implode("," , $_POST['hobbies']);
    $country = $_POST['country'];
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
    $folder = "uploads/" . $filename;

    if(move_uploaded_file($tempname,$folder))
    {

        $sql = "INSERT INTO user(first_name,last_name,email,password,conf_pass,address,phone_num,gender,hobbies,country,file)
               VALUES('$first_name','$last_name','$email','$password','$conf_pass','$address','$phone_num','$gender','$hobbies','$country','$filename')";

        if(mysqli_query($conn,$sql)){
            echo '<script> alert("inserted");location.href="display.php";</script>';
        }else{
            echo "Error:" . mysqli_error($conn);
        }
    }else{
        echo "failed to Upload file";
    }

}