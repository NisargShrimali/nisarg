<?php 
include "conn.php";

if($_SERVER['REQUEST_METHOD'] === "POST")
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

    if(isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
    $folder = "uploads/" . $filename;

    move_uploaded_file($tempname,$folder);

    $sql = "UPDATE user SET
        first_name = '$first_name',
        last_name = '$last_name',
        email = '$email',
        address = '$address',
        phone_num = '$phone_num',
        gender = '$gender',
        hobbies = '$hobbies',
        country = '$country',
        file = '$filename'
        WHERE id = $id";
}else{
    $sql = "UPDATE user SET
        first_name = '$first_name',
        last_name = '$last_name',
        email = '$email',
        address = '$address',
        phone_num = '$phone_num',
        gender = '$gender',
        hobbies = '$hobbies',
        country = '$country'
        WHERE id = $id";
}
    if(mysqli_query($conn,$sql))
    {
        echo '<script>alert("Data updated"); window.location.href="display.php"</script>;';
    }
} 