<?php 
include 'conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=$conn->query("SELECT * FROM user WHERE id=$id");
    $user=$result->fetch_assoc();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id=$_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $conf_pass = $_POST['conf_pass'];
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

        $sql = "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email', password='$password',conf_pass='$conf_pass', address='$address', phone_num='$phone_num', gender='$gender', hobbies='$hobbies', country='$country', file='$filename' WHERE id='$id'";
        $conn->query($sql);
    } else {
        $sql = "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email',password='$password',conf_pass='$conf_pass', address='$address', phone_num='$phone_num', gender='$gender', hobbies='$hobbies', country='$country' WHERE id=$id";
        $conn->query($sql);
    }
    header('Location: display.php');
}

