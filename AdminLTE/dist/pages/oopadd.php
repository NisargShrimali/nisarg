<?php

include 'oopfunction.php';
$insertdata = new CRUD();

$error = [];
$first_name = $last_name = $email = $password = $conf_pass =
$address = $phone_num = $gender = $hobbies = $country = "";
$filename = "";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['oop_add'])){

    $first_name = trim($_POST['first_name']);
    
    if(empty($first_name)){
        $error['first_name'] = "First Name is Required";
    }
        
    
    $last_name = trim($_POST['last_name']);
    if(empty($last_name)){
        $error['last_name'] = "Last Name is Required";
    }

    $email = trim($_POST['email']);
    if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error['email'] = "Email is Required";
    }

    $password = trim($_POST['password']);
    $conf_pass = trim($_POST['conf_pass']);
    if(empty($password) || !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
        $error['password'] = "Password does not meet the requirements";
    } elseif($password !== $conf_pass) {
        $error['conf_pass'] = "Password is not matched";
    }
    

    $address = trim($_POST['address']);
    if(empty($address)){
        $error['address'] = "Address is Required";
    }

    $phone_num = trim($_POST['phone_num']);
    if(empty($phone_num) || !preg_match('/^\d{10}$/', $phone_num)){
        $error['phone_num'] = "Phone Number is Required";
    }

    $gender = trim($_POST['gender']) ?? "";
    if(empty($gender)){
        $error['gender'] = "Gender is Required"; 
    }

    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";
    if(empty($hobbies)){
        $error['hobbies'] = "At Least one hobbie is Required";
    }

    $country = $_POST['country'];
    if(empty($country)){
        $error['country'] = "Country is Required";
    }

    if (!empty($_FILES["file"]["name"])) {
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "./uploads/" .$filename;

    if (move_uploaded_file($tempname, $folder)) {
            $error = "";
        } else {
            $error['file'] = "Error uploading file";
        }
        } else {
            $error['file'] = "File is Required";
        }
        
    if(empty($error)){
        $sql = $insertdata->insert($first_name , $last_name , $email , $password , $conf_pass ,$address , $phone_num , $gender , $hobbies , $country , $filename);
        if($sql){
            echo "<script>alert('Data inserted');</script>";
            echo "<script>window.location.href='oopdisplay.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        
        }
    }
}


