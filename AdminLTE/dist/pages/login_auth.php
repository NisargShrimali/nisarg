<?php
session_start();
include('conn.php');
if(isset($_POST['login'])){
               
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query=mysqli_query($conn,"SELECT * FROM `user` where email='$email' && password='$password'");

    if (mysqli_num_rows($query) == 0){
            $_SESSION['message']="Login Failed. User not Found!";
            header('location:login.php');
    }
    else{
               
            $row=mysqli_fetch_array($query);
            if (isset($_POST['remember'])){
                    
                    setcookie("user", $row['email'], time() + (86400 * 30));
                    setcookie("password", $row['password'], time() + (86400 * 30));
            }
            $_SESSION['login_in']=true;     
            $_SESSION['uid']=$row['id'];
            $_SESSION['first']=$row['first_name'];
            $_SESSION['last']=$row['last_name'];
            header('location:index.php');
    }
}
else{
    header('location:login.php');
    $_SESSION['message']="Please Login!";
}
?>