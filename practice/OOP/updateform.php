<?php 
include "nav.html";
include "function.php";
//include "update.php";


if(isset($_GET['id'])){
    $rid = $_GET['id'];
    $fetchdata = new OOPS();
    $sql = $fetchdata->singlefetchdata($rid);
    if($sql)
    {
        $user = $sql->fetch_assoc();
    } else{
        die("User Not Found.");
    }
}
?>

<html>
    <head>
        <title>Update Form</title>
    </head>
    <body>
        <h4>Updating User Form</h4>
        <form action="update.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?php echo $user['id'] ?>">

           <label>First Name:-</label>
           <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>"><br><br>

           <label>Last Name:-</label>
           <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>"><br><br>

           <label>Email:-</label>
           <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>

           <label>Address:-</label>
           <input type="text" name="address" value="<?php echo $user['address']; ?>"><br><br>

           <label>Phone Number:-</label>
           <input type="number" name="phone_num" value="<?php echo $user['phone_num']; ?>"><br><br>

           <label>Gender:-</label>
           <input type="radio" name="gender" value="Male" <?php echo($user['gender'] == 'Male') ? 'checked': '';?>>Male
           <input type="radio" name="gender" value="Female" <?php echo($user['gender'] == 'Female') ? 'checked': '';?>>Female<br><br>

           <label>Hobbies:-</label>
           <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'] ,'cricket') !== false ? 'checked': '';?>>Cricket
           <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'],'Travelling') !== false ? 'checked': '';?>>Travelling<br><br>

           <label>Country:-</label>
           <select name="country">
            <option value="India" <?php echo($user['country'] == 'India') ? 'selected':'';?>>India</option>
            <option value="USA" <?php echo ($user['country'] == 'USA') ? 'selected':'';?>>USA</option>
            <option value="UK" <?php echo($user['country'] == 'UK') ? 'selected':'';?>>UK</option>
           </select><br><br>

           <label>Profile Image:-</label>
           <input type="file" name="file"><br><br>
           <img src="uploads/<?= $user['file']?>" width="100" height="100" alt="profile image"><br>

           <input type="submit" name="update" value="Update">
        </form>
    </body>
</html>