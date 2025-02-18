<?php 
include "function.php";

$insertdata = new OOPS();

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['oop_add']))
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

    move_uploaded_file($tempname,$folder);

    $sql = $insertdata->insert($first_name , $last_name , $email , $password , $conf_pass , $address , $phone_num , $gender , $hobbies , $country ,$filename);

    if($sql)
    {
        echo "<script>alert('Data inserted');</script>";
            echo "<script>window.location.href='display.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        
        
    }
}