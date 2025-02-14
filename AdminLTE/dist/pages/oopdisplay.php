<?php

include 'header.php';
include 'sidebar.php';
include 'oopfunction.php';

?>

<html>
    <body>
        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-header"><h3 class="card-title">User Details</h3></div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Gender</th>
                                    <th>Hobbies</th>
                                    <th>Country</th>
                                    <th>Profile Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $fetchdata = new CRUD();
                                $sql = $fetchdata->fetchdata();
                                while($row = mysqli_fetch_array($sql)) {
                                ?>

                                <tr>
                                    <td><?= $row['first_name']?></td>
                                    <td><?= $row['last_name']?></td>
                                    <td><?= $row['email']?></td>
                                    <td><?= $row['address']?></td>
                                    <td><?= $row['phone_num']?></td>
                                    <td><?= $row['gender']?></td>
                                    <td><?= $row['hobbies']?></td>
                                    <td><?= $row['country']?></td>
                                    <td><img src="./uploads/<?= htmlspecialchars($row['file'])?>" width="100" alt="profile image"></td>
                                    <td>
                                        <a href="oopupdateform.php?id=<?= $row['id']?>">Edit</a>
                                        <a href="oopdelete.php?id=<?= $row['id']?>">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <?php include ("footer.php"); ?>
    </body>
</html>