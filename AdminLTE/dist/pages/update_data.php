<?php 
include 'conn.php';

$firstnameErr = $lastnameErr = $emailErr  = $messageErr = $numberErr = $genderErr = $hobbiesErr = $countryErr = $imageErr = "";   
$first_name = $last_name = $email  = $address = $phone_num = $gender = $hobbies = $country = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'] ?? '';

    function input_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //$first_name = $_POST['first_name'];
    if (empty($_POST["first_name"])) {
        $firstnameErr = "First Name is required";
    } else {
        $first_name = input_data($_POST["first_name"]);
    }
    
    //$last_name = $_POST['last_name'];
    if (empty($_POST["last_name"])) {
        $lastnameErr = "Last Name is required";
    } else {
        $last_name = input_data($_POST["last_name"]);
    }
    //$email= $_POST['email'];
    if (empty($_POST["email"])) {
        $emailErr = "Email is required"; 
    } else {
        $email = input_data($_POST["email"]);
    }
    
    
    //$address = $_POST['address'];
    if (empty($_POST["address"])) {
        $messageErr = "Address is required";
    } else {
        $address = input_data($_POST["address"]);
    }
    //$phone_num = $_POST['phone_num'];
    if (empty($_POST["phone_num"])) {
        $numberErr = "Phone Number is required";
    } else {
        $phone_num = input_data($_POST["phone_num"]);
        if (!preg_match("/^[0-9]{10}$/", $phone_num)) {
            $numberErr = "Phone number must be 10 digits";
        }
    }

    //$gender = $_POST['gender'];
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = input_data($_POST["gender"]);
    }
    //$hobbies = implode(",",$_POST['hobbies']);
    if (empty($_POST['hobbies'])) {
        $hobbiesErr = "Hobbie is Required";
    } else {
        $hobbies = implode(", ", $_POST['hobbies']);
    }
    //$country = $_POST['country'];
    if (empty($_POST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = input_data($_POST["country"]);
    }
    $filename ='';
    if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];
        $folder = "./uploads/" . $filename;

        

        if (!move_uploaded_file($tempname, $folder)) {
            die("Failed to move the uploaded file.");
        }
    }
        if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) &&
        empty($messageErr) && empty($numberErr) && empty($genderErr) && empty($hobbiesErr) && empty($countryErr)) 
        {
            $sql = "UPDATE user SET first_name = '$first_name',last_name = '$last_name',email = '$email', address = '$address',phone_num = '$phone_num', gender = '$gender',hobbies = '$hobbies',country = '$country'  ";
        
            if(!empty($filename)){
                $sql.= ", file = '$filename'";
            }

            $sql .= "WHERE id = '$id'"; 

            if(!mysqli_query($conn , $sql)){
                die('Error in updating record'. mysqli_error($conn));
            }else{
                echo '<script>
                      alert("Updated!")
                      window.location.href="display.php";
                      </script>';
                      exit;
            }
        }
}