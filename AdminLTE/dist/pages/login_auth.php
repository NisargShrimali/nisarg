<?php
session_start();
include('conn.php');
if(isset($_POST['login'])){
               
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query=mysqli_query($conn,"SELECT * FROM `user` where email='$email'");
    $row = mysqli_fetch_assoc($query);

    if(!$row)
    {
        $_SESSION['message'] = "Login Failed,User Not Found!!";
        header('Location: login.php');
        exit();
    }

    if(password_verify($password , $row['password']))
    {
        if(isset($_POST['remember']))
        {
                setcookie("user", $row['email'], time() + (86400 * 30));
                setcookie("password", $password , time() + (86400 * 30));
        }

        $_SESSION['login_in']=true;
        $_SESSION['uid']=$row['id'];
        $_SESSION['first']=$row['first_name'];
        $_SESSION['last']=$row['last_name'];
        header('Location: index.php');
        exit();
    }else{
        $_SESSION['message'] = "Invalid email or password";
        header('Location: login.php');
        exit();
    }
 }else{
        $_SESSION['message'] = "Please login";
        header('Location: login.php');
        exit();
 }
