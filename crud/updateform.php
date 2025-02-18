<?php
include 'db.php';
include ("update.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM user WHERE id = $id");
    $user = $result->fetch_assoc();
}
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    </head>
<body>
    <h4>Update Details..</h4>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        
        <label>First Name :-</label>
        <?php $first_name = isset($_POST['first_name']) ? $_POST['first_name'] :$user['first_name']; ?>
        <input type="text" name="first_name" value="<?php echo $first_name; ?>"><br><br>
        <span class="text-danger"><?= $firstnameErr ?></span> <br>

        <label>Last Name :-</label>
        <?php $last_name = isset($_POST['last_name']) ? $_POST['last_name'] :$user['last_name']; ?>
        <input type="text" name="last_name" value="<?php echo $last_name; ?>"><br><br>
        <span class="text-danger"><?= $lastnameErr ?></span> <br>

        <label>Email :-</label>
        <?php $email = isset($_POST['email']) ? $_POST['email'] : $user['email']; ?>
        <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
        <span class="text-danger"><?= $emailErr ?></span> <br>

        <label>Address :-</label>
        <?php $address = isset($_POST['address']) ? $_POST['address'] : $user['address']; ?>
        <input type="textarea" name="address" value="<?php echo $address ?>"><br><br>
        <span class="text-danger"><?= $messageErr ?></span> <br>

        <label>Phone No :-</label>
        <?php $phone_num = isset($_POST['phone_num']) ? $_POST['phone_num'] : $user['phone_num']; ?>
        <input type="tel" name="phone_num" value="<?php echo $phone_num; ?>"><br><br>
        <span class="text-danger"><?= $numberErr ?? '' ?></span> <br>

        <label>Gender :-</label>
        <input type="radio" name="gender" value="male" <?php echo ($user['gender'] == 'male') ? 'checked' : ''; ?>>Male
        <input type="radio" name="gender" value="female" <?php echo ($user['gender'] == 'female') ? 'checked' : ''; ?>>Female<br><br>

        <label>Hobby :-</label>
        <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'], 'Cricket') !== false ? 'checked' : ''; ?>>Cricket
        <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'], 'Travelling') !== false ? 'checked' : ''; ?>>Travelling<br>
        
        <label>Country :-</label>
        <select name="country">
            <option value="India" <?php echo ($user['country'] == 'India') ? 'selected' : ''; ?>>India</option>
            <option value="USA" <?php echo ($user['country'] == 'USA') ? 'selected' : ''; ?>>USA</option>
            <option value="UK" <?php echo ($user['country'] == 'UK') ? 'selected' : ''; ?>>UK</option>
        </select><br><br>

        <img src="./image/<?= $user['file'] ?>" width="100" height="100" alt="Profile Image"><br>
        <label>Update Profile Image :-</label>
        <input type="file" name="file" accept="image/*"/><br><br>
        <span class="text-danger"><?= $imageErr ?></span> <br>


        <input type="submit" name="update" value="UPDATE">
    </form>
</body>
</html>