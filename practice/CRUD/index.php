<?php

include "conn.php";
include "nav.html";
include "add.php";
?>

<html>
    <head>
        <title>CRUD OPERATION</title>
    </head>
    <body>
        <h4>USER FORM</h4>
        <form action="" method="POST" enctype="multipart/form-data">
        <label>First Name:-</label>
        <input type="text" name="first_name" /><br><br>

        <label>Last Name:-</label>
        <input type="text" name="last_name" /><br><br>

        <label>Email:-</label>
        <input type="email" name="email" /><br><br>

        <label>Password:-</label>
        <input type="password" name="password" /><br><br>

        <label>Confirm Password:-</label>
        <input type="password" name="conf_pass" /><br><br>

        <label>Address:-</label>
        <input type="text" name="address" /> <br><br>

        <label>Phone Number:-</label>
        <input type="number" name="phone_num"/><br><br>

        <label>Gender:-</label>
        <input type="radio" name="gender" value="Male" />Male
        <input type="radio" name="gender" value="Female" />female<br><br>

        <label>Hobbies:-</label>
        <input type="checkbox" name="hobbies[]" value="Cricket" />Cricket
        <input type="checkbox" name="hobbies[]" value="Travelling" />Travelling<br><br>

        <label>Country:-</label>
        <select name="country">
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">Uk</option>
        </select><br><br>

        <label>Profile Image:-</label>
        <input type="file" name="file" /><br><br>

        <button type="submit" name="add">Submit</button>
        </form>
    </body>
</html>