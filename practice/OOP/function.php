<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','admin123');
define('DB_NAME','prac');

class OOPS{
    private $con;
    function __construct()
    {
        $this->con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        if(mysqli_connect_error())
        {
            echo "Connectioned Failed" . mysqli_connect_error();
        }
    }


public function insert($first_name,$last_name,$email,$password,$conf_pass,$address,$phone_num,$gender,$hobbies,$country,$filename)
    {
        $ret = mysqli_query($this->con,"INSERT INTO user (first_name,last_name,email,password,conf_pass,address,phone_num,gender,hobbies,country,file)
              VALUES ('$first_name','$last_name','$email','$password','$conf_pass','$address','$phone_num','$gender','$hobbies','$country','$filename')");
        return $ret;
    }   

public function fetchdata()
    {
        $result = mysqli_query($this->con,"SELECT * FROM user");
        return $result;
    }

public function singlefetchdata($rid)
    {
        $result = mysqli_query($this->con,"SELECT * FROM user WHERE id = $rid ");
        return $result;
    }

public function update($first_name,$last_name,$email,$address,$phone_num,$gender,$hobbies,$country,$filename,$id)
    {
        $updaterecord = mysqli_query($this->con,"UPDATE user SET first_name = '$first_name',last_name = '$last_name',email = '$email' , address = '$address' , phone_num = '$phone_num' , gender = '$gender' , hobbies = '$hobbies' , country = '$country' , file = '$filename' WHERE id = '$id'");
        return $updaterecord;
    }
public function delete($rid)
    {
        $deleterecord = mysqli_query($this->con, "DELETE FROM user WHERE id = $rid");
        return $deleterecord;
    }
}