<?php
    header('Content-Type: application/json');
    include ("ajax_conn.php");
    $response= [];
    
    if (($_SERVER["REQUEST_METHOD"]=="POST")) {
        $id =intval($_POST["id"]);
        $sql ="DELETE from user WHERE id = $id";
        if(mysqli_query($conn, $sql)) {
            $response =["status" => "success","message"=> "Deleted"];
        }
        else{
            $response =["status" => "error","message"=> "Error"];
        }
    }
    echo json_encode($response);
