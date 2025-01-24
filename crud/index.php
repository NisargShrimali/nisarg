<?php
include 'conn.php';
include 'index.html';
?>

<html>
    <head>
        <title>PHP CRUD</title>
        <style>
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .submit-btn {
            background-color: #04AA6D;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
        }

        .head-bar{
            background-color: #04AA6D;
            color: #fff;
            text-align: center;
        }
        
        </style>
</head>

<body>
       <?php
       include 'form.php';
       ?>
</body>

