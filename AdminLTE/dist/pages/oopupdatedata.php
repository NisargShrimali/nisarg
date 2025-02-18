<?php

$updatedata = new CRUD();  
$errors=[];
$first_name = $last_name = $email = $address = $phone_num = $gender = $hobbies = $country = "";


if(($_SERVER['REQUEST_METHOD'] === 'POST')){
    
    $id = intval($_POST['id']);
    $first_name = trim($_POST['first_name']);
    if(empty($first_name)){
        $errors['first_name'] = "First Name is Required";
    }
    
    $last_name = trim($_POST['last_name']);
    if (empty($last_name)) {
        $errors['last_name'] = "Last Name is required.";
    }

    $email = trim($_POST['email']);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email is required.";
    }

    $address = trim($_POST['address']);
    if (empty($address)) {
        $errors['address'] = "Address is required.";
    }

    $phone_num = trim($_POST['phone_num']);
    if (empty($phone_num) || !preg_match('/^\d{10}$/', $phone_num)) {
        $errors['phone_num'] = "Number required";
    }

    $gender = $_POST['gender'] ?? "";
    if (empty($gender)) {
        $errors['gender'] = "Gender is required.";
    }

    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";
    if (empty($hobbies)) {
        $errors['hobbies'] = " one Hobbie is required.";
    }

    $country = $_POST['country'] ?? "";
    if (empty($country)) {
        $errors['country'] = "Country is required.";
    }

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES['file']['tmp_name'];
   

    if (!empty($filename)) {
        $folder = "./uploads/" .$filename; 
        if (!move_uploaded_file($tempname, $folder)) {
            echo "<script>alert('Failed to upload file');</script>";
            $folder = ""; 
        }
    }
    else{
        $fetchdata=new CRUD();
        $sql=$fetchdata->singlefetchdata($id);
        if ($sql) {
        $user = $sql->fetch_assoc();
        $filename = $user['file'];   
    }
  }
  if (empty($errors)) {
    $sql = $updatedata->update($first_name,$last_name,$email,$address,$phone_num,$gender,$hobbies,$country,$filename,$id);
    if($sql){
    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='oopdisplay.php';</script>";
    }
 } 


}