<?php

include 'oopfunction.php';
$updatedata = new CRUD();

$error=[];
$first_name = $last_name = $email = $address = $phone_num = $gender = $hobbies = $country = "";
$filename = "";

if(($_SERVER['REQUEST_METHOD'] === 'POST')){
    
    $id = $_POST['id'];
    
    $first_name = trim($_POST['first_name']);
    if(empty($first_name)){
        $error['first_name'] = "First Name is Required";
    }
    
    //$last_name = $_POST['last_name'];
    $last_name = trim($_POST['last_name']);
    if (empty($last_name)) {
        $error['last_name'] = "Last Name is required.";
    }

    //$email = $_POST['email'];
    $email = trim($_POST['email']);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Valid Email is required.";
    }
    //$address = $_POST['address'];
    $address = trim($_POST['address']);
    if (empty($address)) {
        $error['address'] = "Address is required.";
    }
    //$phone_num = $_POST['phone_num'];
    $phone_num = trim($_POST['phone_num']);
    if (empty($phone_num) || !preg_match('/^\d{10}$/', $phone_num)) {
        $error['phone_num'] = "10 digit Number required";
    }
    //$gender = $_POST['gender'];
    $gender = $_POST['gender'] ?? "";
    if (empty($gender)) {
        $error['gender'] = "Gender is required.";
    }
    //$hobbies = implode(",",$_POST['hobbies']);
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";
    if (empty($hobbies)) {
        $error['hobbies'] = "At least one Hobby is required.";
    }
    //$country = $_POST['country'];
    $country = $_POST['country'] ?? "";
    if (empty($country)) {
        $error['country'] = "Country is required.";
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
  if (empty($error)) {
    $sql=$updatedata->update($first_name,$last_name,$email,$address,$phone_num,$gender,$hobbies,$country,$filename,$id);
    if($sql){
    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='oopdisplay.php'</script>";
    }
 }
}