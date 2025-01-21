<?php 
include 'conn.php';
include 'index.html';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=$conn->query("SELECT * FROM user WHERE id=$id");
    $user=$result->fetch_assoc();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $gender=$_POST['gender'];
    $hobbies=implode(",",$_POST['hobbies']);
    $country=$_POST['country'];

    if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];
        $folder = "./uploads/" . $filename;

        if ($_FILES["file"]["error"] > 0) {
            die("Error uploading file: " . $_FILES["file"]["error"]);
        }

        if (!move_uploaded_file($tempname, $folder)) {
            die("Failed to move the uploaded file.");
        }

        $sql = "UPDATE user SET fname='$fname', lname='$lname', email='$email', address='$address', phoneno='$phoneno', gender='$gender', hobbies='$hobbies', country='$country', file='$filename' WHERE id='$id'";
        $conn->query($sql);
    } else {
        $sql = "UPDATE user SET fname='$fname', lname='$lname', email='$email', address='$address', phoneno='$phoneno', gender='$gender', hobbies='$hobbies', country='$country' WHERE id=$id";
        $conn->query($sql);
        
    }
    header('Location: add.php');
}

?>

<form method="POST" action="update.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $user['id']?>">

    <label>First Name:-</label>
    <input type="text" name="fname" value="<?php echo $user['fname']?>" required><br><br>

    <label>Last Name:-</label>
    <input type="text" name="lname" value="<?php echo $user['lname']?>" required><br><br>

    <label>Email:-</label>
    <input type="email" name="email" value="<?php echo $user['email']?>" required><br><br>

    <label>Password:- </label>
    <input type="password" name="password" value="<?php echo $user['password']?>" required><br><br>

    <label>Address:-</label>
    <textarea name="address" required><?php echo $user['address']; ?></textarea><br><br>

    <label>Phone Number:-</label>
    <input type="number" name="phoneno" value="<?php echo $user['phoneno']?>" required><br><br>

    <label>Gender:-</label>
    <input type="radio" name="gender" value="Male" <?php echo($user['gender'] == 'Male') ? 'checked':'';?>>Male
    <input type="radio" name="gender" value="Female" <?php echo($user['gender'] == 'Female') ? 'checked':'';?>>Female<br><br>

    <label>Hobbies:-</label>
    <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'],'Cricket')!== false ? 'checked':'';?>>Cricket
    <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'],'Travelling')!== false ? 'checked':'';?>>Travelling<br><br>

    <label>Country:-</label>
    <select name="country" required>
        <option value="India" <?php echo($user['country'] == 'India') ? 'selected':'';?>>India</option>
        <option value="USA" <?php echo($user['country'] == 'USA') ? 'selected':'';?>>USA</option>
        <option value="UK" <?php echo($user['country'] == 'UK') ? 'selected':'';?>>UK</option>
    </select><br><br>

    <label>Profile Image:-</label>
    <input type="file" name="file" accept="image/*"><br><br>
    <button type="submit">Update</button>
</form>
