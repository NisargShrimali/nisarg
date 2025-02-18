<html>
    <head>
        <title>User Details</title>    
    </head>
<body>
<?php 
    include 'db.php'; 
    include 'nav.html'; 
    
    echo "<h3>User Details...</h3>";
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql); 
?>
<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone No</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Country</th>
        <th>Profile Image</th>
        <th>Actions</th>
    </tr>
<?php    while ($row = $result->fetch_assoc())  {    ?>
    <tr>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['last_name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['address'] ?></td>
        <td><?= $row['phone_num'] ?></td>
        <td><?= $row['gender'] ?></td>
        <td><?= $row['hobbies'] ?></td>
        <td><?= $row['country'] ?></td>
        <td><img src="./image/<?= $row['file'] ?>" width="100" height="100" alt="Profile Image"></td>
        <td>
            <a href="updateform.php?id= <?= $row['id'] ?>">EDIT</a>
            <a href="delete.php?id= <?= $row['id'] ?>" onclick=" return confirm('Are You Sure?')">DELETE</a>
        </td>    
    </tr>
<?php } ?>   
</table>
</body>
</html>