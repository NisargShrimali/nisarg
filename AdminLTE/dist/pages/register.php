<?php
include 'conn.php';

$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $message = "";
$first_name = $last_name = $email = $password = "";

if(isset($_POST['register'])){
    function input_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(empty($_POST['first_name'])){
        $firstnameErr = "required";
    }else{
        $first_name = input_data($_POST['first_name']);
    }

    if(empty($_POST['last_name'])){
        $lastnameErr = "required";
    }else{
        $last_name = input_data($_POST['last_name']);
    }

    if(empty($_POST['email'])){
        $emailErr = "required";
    }else{
        $email = input_data($_POST['email']);
        $sql = "SELECT * FROM register WHERE email = '$email'";
        $result = mysqli_query($conn , $sql);
        if(mysqli_num_rows($result) > 0){
            $emailErr = "Email Already Exists";
        }
    }

    if(empty($_POST['password'])){
        $passwordErr = "required";
    }else{
        $password = $_POST['password'];
        
        
        if(strlen($password) < 5){
            $passwordErr = "Password Minimum length Should be 5";
        }else{
            $password = password_hash($password,PASSWORD_DEFAULT);
        }
    }

    if(empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($passwordErr)) {
        $sql = "INSERT INTO user (first_name,last_name,email,password,conf_pass,address,phone_num,gender,hobbies,country,file)
                VALUES('$first_name','$last_name','$email','$password','','','','','','','')";
        
        if(mysqli_query($conn , $sql)){
            $message = "Registration Successful <a href='login.php'>Login here</a>"; 
        }else{
            $message = "Error: " . mysqli_error($conn);
        }
    }
}

?>

<html>
    <head>
        <title>Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        .card {
            margin: 50px auto;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(128, 128, 128, 0.1);
        }
        
    </style>
    </head>
    
    <body>
    <div class="container">
        <div class="card p-4">
           <h2 class="text-center">Register </h2>
              <form method="POST" action="">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name:-</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="<?= htmlspecialchars($first_name ?? '') ?>">
                    <small class="text-danger"><?php echo $firstnameErr; ?></small>
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name:-</label>
                    <input  type="text" name="last_name" id="last_name" class="form-control" value="<?= htmlspecialchars($last_name ?? '')?>">
                    <small class="text-danger"><?php echo $lastnameErr; ?></small>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:-</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($email ?? '')?>">
                    <small class="text-danger"><?php echo $emailErr; ?></small>
                </div>

                <div class="mb-3">
                    <label for="password" class="password">Password:-</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?= htmlspecialchars($password ?? '')?>">
                    <small class="text-danger"><?php echo $passwordErr; ?></small>
                </div>

                <button type="submit" class="btn btn-primary w-100" name="register">Register</button>
                </form>
            <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a></p>
            <p class="text-success text-center"><?php echo $message; ?></p>
            </div>
        </div>
    </body>
</html>