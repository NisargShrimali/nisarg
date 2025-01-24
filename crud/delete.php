<?php
include 'conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM form WHERE id=$id";
    $conn->query($sql);
    header('Location: add.php');
}

