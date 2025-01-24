<?php 
include 'conn.php';
include 'index.html';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=$conn->query("SELECT * FROM form WHERE id=$id");
    $user=$result->fetch_assoc();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $hobby = implode(",",$_POST['hobby']);
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

        $sql = "UPDATE form SET first_name='$first_name', last_name='$last_name', email='$email', address='$address', phone='$phone', gender='$gender', hobby='$hobby', country='$country', file='$filename' WHERE id='$id'";
        $conn->query($sql);
    } else {
        $sql = "UPDATE form SET first_name='$first_name', last_name='$last_name', email='$email', address='$address', phone='$phone', gender='$gender', hobby='$hobby', country='$country' WHERE id=$id";
        $conn->query($sql);
        
    }
    header('Location: add.php');
}

?>

<?php
include 'update_form.php';
?>