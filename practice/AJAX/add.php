<?php 
  header('Content-Type: application/json');
  include "conn.php";

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
  
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) 
     {
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "./uploads/" .$filename;
        if(!move_uploaded_file($tempname, $folder)) {
          $errors['file'] = "Failed to upload the file.";
      }
     }

     $sql = "INSERT INTO user (first_name,last_name,email,password,conf_pass,address,phone_num,gender,hobbies,country,file)
             VALUES('$first_name','$last_name','$email','$password','$conf_pass','$address','$phone_num','$gender','$hobbies','$country','$filename')";
    
    if(mysqli_query($conn,$sql)){
        $response = ["status" => "success", "message" => "Data Inserted."];
      }else{
        $response = ["status" => "error", "message" => "Database error: " . mysqli_error($conn)];
      }
    
    }    

  echo json_encode($response);
