<?php 
include 'conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=$conn->query("SELECT * FROM user WHERE id=$id");
    $user=$result->fetch_assoc();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $cpass = $_POST['cpass'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
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

        $sql = "UPDATE user SET fname='$fname', lname='$lname', email='$email', password='$password',cpass='$cpass', address='$address', phoneno='$phoneno', gender='$gender', hobbies='$hobbies', country='$country', file='$filename' WHERE id='$id'";
        $conn->query($sql);
    } else {
        $sql = "UPDATE user SET fname='$fname', lname='$lname', email='$email',password='$password',cpass='$cpass', address='$address', phoneno='$phoneno', gender='$gender', hobbies='$hobbies', country='$country' WHERE id=$id";
        $conn->query($sql);
    }
    header('Location: add.php');
}
?>
