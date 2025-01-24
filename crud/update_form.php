<form method="POST" action="update.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $user['id']?>">

    <label>First Name:-</label>
    <input type="text" name="first_name" value="<?php echo $user['first_name']?>" required><br><br>

    <label>Last Name:-</label>
    <input type="text" name="last_name" value="<?php echo $user['last_name']?>" required><br><br>

    <label>Email:-</label>
    <input type="email" name="email" value="<?php echo $user['email']?>" required><br><br>

    <label>Password:- </label>
    <input type="password" name="pass" value="<?php echo $user['pass']?>" required><br><br>

    <label>Address:-</label>
    <textarea name="address" required><?php echo $user['address']; ?></textarea><br><br>

    <label>Phone Number:-</label>
    <input type="number" name="phone" value="<?php echo $user['phone']?>" required><br><br>

    <label>Gender:-</label>
    <input type="radio" name="gender" value="Male" <?php echo($user['gender'] == 'Male') ? 'checked':'';?>>Male
    <input type="radio" name="gender" value="Female" <?php echo($user['gender'] == 'Female') ? 'checked':'';?>>Female<br><br>

    <label>Hobbies:-</label>
    <input type="checkbox" name="hobby[]" value="Cricket" <?php echo strpos($user['hobby'],'Cricket')!== false ? 'checked':'';?>>Cricket
    <input type="checkbox" name="hobby[]" value="Travelling" <?php echo strpos($user['hobby'],'Travelling')!== false ? 'checked':'';?>>Travelling<br><br>

    <label>Country:-</label>
    <select name="country" required>
        <option value="India" <?php echo($user['country'] == 'India') ? 'selected':'';?>>India</option>
        <option value="USA" <?php echo($user['country'] == 'USA') ? 'selected':'';?>>USA</option>
        <option value="UK" <?php echo($user['country'] == 'UK') ? 'selected':'';?>>UK</option>
    </select><br><br>

    <label>Profile Image:-</label>
    <input type="file" name="file" accept="image/*"><br><br>
    <button type="submit" class="submit-btn">Update</button>
</form>
