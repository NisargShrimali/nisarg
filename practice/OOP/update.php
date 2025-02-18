<?php
include "function.php";

$updatedata = new OOPS();

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];
    $gender = $_POST['gender'];
    $hobbies = implode("," , $_POST['hobbies']);
    $country = $_POST['country'];
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];


    if (!empty($filename)) {
        $folder = "./uploads/" .$filename; 
        if (!move_uploaded_file($tempname, $folder)) {
            echo "<script>alert('Failed to upload file');</script>";
            $folder = ""; 
        }
    }
    else{
        $fetchdata=new OOPS();
        $sql=$fetchdata->singlefetchdata($id);
        if ($sql) {
        $user = $sql->fetch_assoc();
        $filename = $user['file'];   
    }
  }
    $sql = $updatedata->update($first_name,$last_name,$email,$address,$phone_num,$gender,$hobbies,$country,$filename,$id);

    if($sql)
    {
        echo "<script>alert('Record Updated successfully');</script>";
        echo "<script>window.location.href='display.php';</script>";
    }
}