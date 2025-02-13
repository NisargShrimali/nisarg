<?php 
header('Content-Type: application/json');
include ("ajax_conn.php");

$response = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];
    $gender = $_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? implode(",",$_POST['hobbies']) : '';
    $country = $_POST['country'];

    $errors = [];

    if(empty($first_name))
    {
        $errors['first_name'] = "first name is required";
    }

    if(empty($last_name))
    {
        $errors['last_name'] = "last name is required";
    }

    if(empty($email))
    {
        $errors['email'] = "email is required";
    }

    if(empty($address))
    {
        $errors['address'] = "address is required";
    }

    if(empty($phone_num))
    {
        $errors['phone_num'] = "phone number is required";
    }else if(!preg_match("/^[0-9]{10}$/",$phone_num))
    {
        $errors['phone_num'] = "phone number must be 10 digit";
    }

    if(empty($gender))
    {
        $errors['gender'] = "gender is required";
    }

    if(empty($hobbies))
    {
        $errors['hobbies'] = "hobbies are required";
    }

    if(empty($country))
    {
        $errors['country'] = "country is required";
    }

    $filename = '';
    if(isset($_FILES['file']) && $_FILES['file']['size'] > 0)
    {
        $filename = $_FILES["file"]["name"];
        $tmpname = $_FILES["file"]["tmp_name"];
        $folder = "uploads/" . $filename;

        if(!move_uploaded_file($tmpname , $folder))
        {
            $response = ["status" => "error" , "message" => "file upload error"];
            echo json_encode($response);    
            exit;
        }
    }

    if(empty($errors))
    {
        $sql = "UPDATE user SET 
                first_name='$first_name', 
                last_name='$last_name', 
                email='$email', 
                address='$address', 
                phone_num='$phone_num', 
                gender='$gender', 
                hobbies='$hobbies', 
                country='$country'";

            if(!empty($filename))
            {
                $sql .=", file='$filename'";
            }
        $sql .= "WHERE id='$id'";
        if(mysqli_query($conn,$sql))
        {
            $response = ["status" => "success" , "message" => "succefully updated"];
        }
        else{
            $response = ["status" => "error" , "message" => "Error in updating data"];
        }
    }
    else{
        $response['errors']=$errors;
    }
}
echo json_encode($response);
exit;