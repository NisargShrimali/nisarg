<?php 
include 'conn.php';
include 'index.html';

if(isset($_POST['add'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $gender = $_POST['gender'];
    $hobbies = implode(",",$_POST['hobbies']);
    $country = $_POST['country'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "./uploads/" . $filename;
    // Now let's move the uploaded image into the folder:
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    } else {
        echo "<h3>&nbsp; Failed to upload image!</h3>";
    }

    $sql = "INSERT INTO user(fname,lname,email,password,address,phoneno,gender,hobbies,country,file)
    VALUES('$fname','$lname','$email','$password','$address','$phoneno','$gender','$hobbies','$country','$filename')";
    $conn->query($sql);

    header('Location: add.php');
        
      
}
?>
<h2>Users</h2>

<?php
$result=$conn->query("SELECT * FROM user");
?>

<table border="3">
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Address</th>
        <th>PhoneNumber</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Country</th>
        <th>ProfileImage</th>
        <th>Actions</th>
    </tr>

    <?php while($row=$result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['fname']?></td>
        <td><?= $row['lname']?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['address']?></td>
        <td><?= $row['phoneno']?></td>
        <td><?= $row['gender']?></td>
        <td><?= $row['hobbies']?></td>
        <td><?= $row['country']?></td>
        <td><img src="./uploads/<?= $row['file']?>" width="100" alt="profile image"></td>
        <td>
        <a href="update.php?id=<?= $row['id']?>">Edit</a>
        <a href="delete.php?id=<?= $row['id']?>" onclick="return confirm('Are You Sure Want To Delete?')">Delete</a>    
        </td>
    </tr>
    <?php }
?>

</table>
</body>
</html>
