<?php
include "function.php";
?>

<html>
    <head>
        <title>Disaplay Data</title>
    </head>
    <body>
        <table border="2">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>                              
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Hobbies</th>                               
                    <th>Country</th>
                    <th>Profile Image</th>
                    <th>Actions</th>                                                                                                                                                                                                                 
                </tr>
                <?php 
                $fetchdata = new OOPS();
                $sql = $fetchdata->fetchdata();
                while($row=mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td><?= $row['first_name'] ?></td>
                    <td><?= $row['last_name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['phone_num'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['hobbies'] ?></td>
                    <td><?= $row['country'] ?></td>
                    <td><img src="uploads/<?= $row['file'] ?>" width="100" height="100" alt="profile image"></td>
                    <td>
                        <a href="updateform.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php }?>
        </table>
    </body>
</html>