<?php
include 'conn.php';
include 'index.html';

if(isset($_POST['add'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $hobby = implode(",",$_POST['hobby']);
    $country = $_POST['country'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "./uploads/" . $filename;
    // Now let's move the uploaded image into the folder:
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    } else {
        echo "<h3>&nbsp; Failed to upload image!</h3>";
    }

    $sql = "INSERT INTO form(first_name,last_name,email,pass,cpass,address,phone,gender,hobby,country,file)
    VALUES('$first_name','$last_name','$email','$pass','$cpass','$address','$phone','$gender','$hobby','$country','$filename')";
    $conn->query($sql);

    header('Location: add.php');
        
      
}
?>