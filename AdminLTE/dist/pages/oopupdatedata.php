<?php

include 'oopfunction.php';
$updatedata = new CRUD();

if(($_SERVER['REQUEST_METHOD'] === 'POST')){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];
    $gender = $_POST['gender'];
    $hobbies = implode(",",$_POST['hobbies']);
    $country = $_POST['country'];
    if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];
        $folder = "./uploads/" . $filename;

        if ($_FILES["file"]["error"] > 0) {
            die("Error uploading file: " . $_FILES["file"]["error"]);
        }

        if (!move_uploaded_file($tempname, $folder)) {
            die("Failed to move the uploaded file.");
        }

    }

    $sql = $updatedata->update($first_name,$last_name,$email,$address,$phone_num,$gender,$hobbies,$country,$filename,$id);
    if($sql)
    {
        echo "<script>alert('Updated successfully');</script>";
        echo "<script>window.location.href='oopdisplay.php'</script>";
    }
       
}