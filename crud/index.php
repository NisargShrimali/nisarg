<html>
    <head>
        <title>CRUD OPERATIONS</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    </head>
    <body>
        <?php 
            include 'db.php';
            include 'nav.html';
            include 'add.php';
        ?>
        <h4> User</h4>

        <form action="" method="POST" enctype="multipart/form-data">
            <label>First Name :-</label>
            <input type="text" name="first_name" value="<?= $first_name ?>">
            <span class="text-danger"><?= $firstnameErr ?></span><br><br>

            <label>Last Name :-</label>
            <input type="text" name="last_name" value="<?= $last_name ?>">
            <span class="text-danger"><?= $lastnameErr ?></span><br><br>

            <label>Email :-</label>
            <input type="email" name="email" value="<?= $email ?>">
            <span class="text-danger"><?= $emailErr ?></span><br><br>

            <label>Password :-</label>
            <input type="password" name="password" value="<?= $password ?>">
            <span class="text-danger"><?= $passwordErr ?></span><br><br>

            <label>Confirm Password :-</label>
            <input type="password" name="conf_pass" value="<?= $conf_pass ?>" >
            <span class="text-danger"><?= $cpasswordErr ?? '' ?></span><br><br>

            <label>Address :-</label>
            <input type="textarea" name="address" value="<?= $address ?>" >
            <span class="text-danger"><?= $messageErr ?></span><br><br>

            <label>Phone No :-</label>
            <input type="tel" name="phone_num" value="<?= $phone_num ?>">
            <span class="text-danger"><?= $numberErr ?></span><br><br>

            <label>Gender :-</label>
            <input type="radio" name="gender" value="male" <?= isset($gender) && $gender == 'male' ? 'checked' : '' ?>>Male
            <input type="radio" name="gender" value="female" <?= isset($gender) && $gender == 'female' ? 'checked' : '' ?>>Female
            <span class="text-danger"><?= $genderErr ?></span><br>

            <label>Hobby :-</label>
            <input type="checkbox" name="hobbies[]" value="Cricket"  <?= isset($hobbies) && strpos($hobbies, 'Cricket') !== false ? 'checked' : '' ?> >Cricket
            <input type="checkbox" name="hobbies[]" value="Travelling"   <?= isset($hobbies) && strpos($hobbies, 'Travelling') !== false ? 'checked' : '' ?>>Travelling
            <span class="text-danger"><?= $hobbyErr ?></span><br>

            <label>Country :-</label>
            <select name="country">
                <option value="India" <?= isset($country) && $country == 'India' ? 'selected' : '' ?>>India</option>
                <option value="USA" <?= isset($country) && $country == 'USA' ? 'selected' : '' ?>>USA</option>
                <option value="UK" <?= isset($country) && $country == 'UK' ? 'selected' : '' ?>>UK</option>
            </select><br>
            <span class="text-danger"><?= $countryErr ?></span><br>

            <label>Profile Image :-</label>
            <input type="file" name="file" accept="image/*"/>
            <span class="text-danger"><?= $imageErr ?></span><br><br>

            <input type="submit" name="add" value="SUBMIT">

        </form>
    </body>
</html>