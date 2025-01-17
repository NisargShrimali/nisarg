<?php
include 'conn.php';
?>

<html>
    <head>
        <title>PHP CRUD</title>
</head>

<body>
    <h2>Crud Operation</h2>
      <form method="POST" action="add.php">
        <label>First Name:-</label>
        <input type="text" name="fname" required><br><br>

        <label>Last Name:-</label>
        <input type="text" name="lname" required><br><br>

        <label>Email:-</label>
        <input type="email" name="email" required><br><br>

        <label>Password:-</label>
        <input type="password" name="password" required><br><br>

        <label>Confirm Password:-</label>
        <input type="password" name="password" required><br><br>


        <label>Address:-</label>
        <input type="textarea" name="address" required><br><br>

        <label>Phone Number:-</label>
        <input type="number" name="phoneno" required><br><br>

        <label>Gender:-</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female<br><br>

        <label>Hobbies:-</label>
        <input type="checkbox" name="hobbies[]" value="Cricket" required>Cricket
        <input type="checkbox" name="hobbies[]" value="Travelling" required>Travelling<br><br>

        <label>Country:-</label>
        <select name="country" required>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        </select><br><br>

        <button type="submit" name="add">Add Data</button>
      </form>

<h2>Users</h2>

<?php
$result=$conn->query("SELECT * FROM user");
?>

<table border="3">
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>ProfileImage</th>
        <th>Address</th>
        <th>PhoneNumber</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Country</th>
        <th>Actions</th>
    </tr>

    <?php while($row=$result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['fname']?></td>
        <td><?= $row['lname']?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['pimage']?></td>
        <td><?= $row['address']?></td>
        <td><?= $row['phoneno']?></td>
        <td><?= $row['gender']?></td>
        <td><?= $row['hobbies']?></td>
        <td><?= $row['country']?></td>
        <td>
        <a href="update.php?id=<?= $row['id']?>">Edit</a>
        <a href="delete.php?id=<?= $row['id']?>">delete</a>    
        </td>
    </tr>
    <?php }
?>

</table>
</body>
</html>