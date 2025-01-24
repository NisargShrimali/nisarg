<?php 
include 'conn.php';

$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $cpasswordErr = $messageErr = $numberErr = $genderErr = $hobbyErr = $countryErr = $imageErr = "";   
$first_name = $last_name = $email = $password = $conf_pass = $address = $phone_num = $gender = $hobbies = $country = "";


if(isset($_POST['add'])){
    function input_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        if (empty($_POST["first_name"])) {
            $firstnameErr = "required";
        } else {
            $first_name = input_data($_POST["first_name"]);
        }

        if (empty($_POST["last_name"])) {
            $lastnameErr = "required";
        } else {
            $last_name = input_data($_POST["last_name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "required"; 
        } else {
            $email = input_data($_POST["email"]);
        }
        

        if (empty($_POST["password"])) {
            $passwordErr = "required";
        } else {
            $password = $_POST["password"];
            if (strlen($password) < 5) {
                $passwordErr = "Password Minimun length should be 5 character";
            }
        }
        
        if (empty($_POST["conf_pass"])) {
            $cpasswordErr = "required";
        } else {
            $conf_pass = $_POST["conf_pass"];
                if ($password !== $conf_pass) {
                    $cpasswordErr = "Passwords do not match";
                }
            } 

        if (empty($_POST["address"])) {
            $messageErr = "required";
        } else {
            $address = input_data($_POST["address"]);
        }


        if (empty($_POST["phone_num"])) {
            $numberErr = "required";
        } else {
            $phone_num = input_data($_POST["phone_num"]);
            if (!preg_match("/^[0-9]{10}$/", $phone_num)) {
                $numberErr = "Phone number must be 10 digits";
            }
        }

        
        if (empty($_POST["gender"])) {
            $genderErr = "required";
        } else {
            $gender = input_data($_POST["gender"]);
        }

        if (empty($_POST['hobbies'])) {
            $hobbiesErr = "Please tick  one opt";
        } else {
            $hobbies = implode(", ", $_POST['hobbies']);
        }

        if (empty($_POST["country"])) {
            $countryErr = "required";
        } else {
            $country = input_data($_POST["country"]);
        }

        if (!empty($_FILES["file"]["name"])) {
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "./uploads/" .$filename;

            if (move_uploaded_file($tempname, $folder)) {
                $imageErr = "";
            } else {
                $imageErr = "Error uploading file";
            }
        } else {
            $imageErr = "required";
        }

    if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($passwordErr) && empty($cpasswordErr) &&
        empty($messageErr) && empty($numberErr) && empty($genderErr) && empty($hobbiesErr) && empty($countryErr) && empty($imageErr)) 
        {

    $sql = "INSERT INTO user (first_name,last_name,email,password,conf_pass,address,phone_num,gender,hobbies,country,file)
             VALUES('$first_name','$last_name','$email','$password','$conf_pass','$address','$phone_num','$gender','$hobbies','$country','$filename')";
            if (!mysqli_query($conn, $sql)) {
              die('Error: ' . mysqli_error($conn));
        }  else {
            echo '<script language="javascript">';
            echo 'alert("Data Inserted"); location.href="display.php"';
            echo '</script>';
        }
    }     
        
}
?>

