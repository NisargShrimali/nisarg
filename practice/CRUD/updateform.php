<?php

include "conn.php";
include "update.php";
include "nav.html";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM user WHERE id = $id ");
    $user = $result->fetch_assoc();
}
?>
<html>
    <head>
        <title>Updating Details</title>
    </head>
    <body>
        <h4>Updating Form</h4>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

            <label>First Name:-</label>
            <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>"><br><br>

            <label>Last Name:-</label>
            <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>"><br><br>

            <label>Email:-</label>
            <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>

            <label>Address:-</label>
            <input type="text" name="address" value="<?php echo $user['address']; ?>"><br><br>

            <label>Phone Number:-</label>
            <input type="number"  name="phone_num" value="<?php echo $user['phone_num']; ?>"><br><br>

            <label>Gender:-</label>
            <input type="radio" name="gender" value="Male" <?php echo ($user['gender'] == 'Male') ? 'checked' : ''; ?>>Male
            <input type="radio" name="gender" value="Female" <?php echo ($user['gender'] == 'Female') ? 'checked' : ''; ?>>Female<br><br>

            <label>Hobbies:-</label>
            <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'],'Cricket') !== false ? 'checked' : ''; ?>>Cricket
            <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'],'Travelling') !== false ? 'checked' : ''; ?>>Travelling<br><br>

            <label>Country:-</label>
            <select name="country">
                <option value="India" <?php echo ($user['country'] == 'India') ? 'selected': ''; ?>>India</option>
                <option value="USA" <?php echo ($user['country'] == 'USA') ? 'selected': ''; ?>>USA</option>
                <option value="UK" <?php echo ($user['country'] == 'UK') ? 'selected' : ''; ?>>UK</option>
            </select><br><br>

            <label>Profile Image:-</label>
            <input type="file" name="file"><br>
            <img src="uploads/<?= $user['file'] ?>" width="10" height="10" alt="profile image"><br>

            <input type="submit" name="update" value="UPDATE">

        </form>
    </body>
</html>