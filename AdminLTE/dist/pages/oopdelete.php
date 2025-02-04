<?php
include ('oopfunction.php');

if(isset($_GET['id']))
{
    $rid=$_GET['id'];
    $deletedata = new CRUD();
    $sql = $deletedata->delete($rid);
    if($sql)
    {
    echo "<script>alert('Deleted successfully');</script>";
    echo "<script>window.location.href='oopdisplay.php'</script>";
    }
}


