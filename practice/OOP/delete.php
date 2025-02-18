<?php 
include "function.php";

if(isset($_GET['id']))
{
    $rid =$_GET['id'];
    $deletedata = new OOPS();
    $sql = $deletedata->delete($rid);
    if($sql)
    {
        echo "<script>alert('Deleted');</script>";
        echo "<script>window.location.href='display.php'</script>";
    }
}