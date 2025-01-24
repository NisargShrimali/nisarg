<?php 
include 'conn.php';
include 'insert.php';
?>


<h2>Users</h2>

<?php
$result=$conn->query("SELECT * FROM form ");
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
        <td><?= $row['first_name']?></td>
        <td><?= $row['last_name']?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['address']?></td>
        <td><?= $row['phone']?></td>
        <td><?= $row['gender']?></td>
        <td><?= $row['hobby']?></td>
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
