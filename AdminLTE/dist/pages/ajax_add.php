<?php 
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  header('Content-Type: application/json');
  include "ajax_conn.php";

  $response = ["status" => "error", "errors" => []];
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = $_POST['first_name'] ?? '';
    
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $conf_pass = $_POST['conf_pass'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone_num = $_POST['phone_num'] ??'';
    $gender = $_POST['gender'] ??'';
    $hobbies = isset($_POST['hobbies']) ? implode(",",$_POST['hobbies']) : '';
    $country = $_POST['country'];

    $errors = [];

    if(empty($first_name))
    {
      $errors['first_name'] = "First Name is Required";
    }

    if(empty($last_name))
    {
      $errors['last_name'] = "Last Name is Required";
    }

    if(empty($email))
    {
      $errors['email'] = "Email is Required";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {   
      $errors['email'] = "Invalid email format."; 
    }


    if(empty($password))
    {
      $errors['password'] = "Password is Required";
    }elseif(strlen($password) < 8)
    {
      $errors['password'] = "Password should be 8 char long";
    }
    
    if($password !== $conf_pass)
    {
      $errors['conf_pass'] = "Password is not match";
    }

    if(empty($address))
    {
      $errors['address'] = "Address is Required";
    }

    if(empty($phone_num))
    {
      $errors['phone_num'] = "Phone Number is Required";
    }elseif (!preg_match("/^[0-9]{10}$/", $phone_num)) 
    {   
      $errors['phone_num'] = "Phone number must be 10 digits.";  
    }

    if(empty($gender))
    {
      $errors['gen'] = "Gender is Required";
    }

    if(empty($hobbies))
    {
      $errors['hob'] = "Hobbies is Required";
    }

    if(empty($country))
    {
      $errors['country'] = "Country is Required";
    }
    
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) 
     {
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "./uploads/" .$filename;
        if(!move_uploaded_file($tempname, $upload_path)) {
          $errors['file'] = "Failed to upload the file.";
      }
     }
      
     if(empty($errors))
     {
      $sql = "INSERT INTO user (first_name,last_name,email,password,conf_pass,address,phone_num,gender,hobbies,country,file)
             VALUES('$first_name','$last_name','$email','$password','$conf_pass','$address','$phone_num','$gender','$hobbies','$country','$filename')";
     
      if(mysqli_query($conn,$sql)){
        $response = ["status" => "success", "message" => "User data successfully inserted."];
      }else{
        $response = ["status" => "error", "message" => "Database error: " . mysqli_error($conn)];
      }
    }else{
      $response["errors"] = $errors;
    }    
  }
  echo json_encode($response);