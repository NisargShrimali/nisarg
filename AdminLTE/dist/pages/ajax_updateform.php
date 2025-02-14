<?php
include "header.php";
include "sidebar.php";
include "ajax_conn.php";

    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM user WHERE id = $id");
    if($result && $result->num_rows > 0){
        $user = $result->fetch_assoc();
    }else{
        die("user not found");
    }
?>
<html>
    <head>
        <title>Updating Data</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="card card-primary card-outline mb-4">
          <div class="card-header"><div class="card-title">Updating Details</div></div>
            <form id="updatedata" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                <div class="mb-3">
                    <label>First Name:-</label>
                    <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>" class="form-control" />
                </div>

                <div class="mb-3">
                    <label>Last Name</label>
                    <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>" class="form-control" />
                </div>

                <div class="mb-3">
                    <label>Email:-</label>
                    <input type="email" name="email" value="<?php echo $user['email']; ?>" class="form-control" />
                </div>

                <div class="mb-3">
                    <label>Address:-</label>
                    <input type="text" name="address" value="<?php echo $user['address']; ?>" class="form-control" />
                </div>

                <div class="mb-3">
                    <label>Phone Number:-</label>
                    <input type="number" name="phone_num" value="<?php echo $user['phone_num']; ?>" class="form-control" />
                </div>

                <div class="mb-3">
                    <label>Gender:-</label>
                    <input type="radio" name="gender" value="male" <?php echo($user['gender'] == 'male') ? 'checked' : '';?> >Male
                    <input type="radio" name="gender" value="female" <?php echo($user['gender'] == 'female') ? 'checked':'';?>>Female
                </div>

                <div class="mb-3">
                    <label>Hobbies:-</label>
                    <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'],'Cricket') !== false ? 'checked' : '';?> >Cricket
                    <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'], 'Travelling') !== false ? 'checked' : '';?> >Travelling 
                </div>

                <div class="mb-3">
                    <label>Country:-</label>
                    <select name="country" class="form-control">
                        <option value="India" <?php echo ($user['country'] == 'India') ? 'selected' : '';?> >India</option>
                        <option value="USA" <?php echo ($user['country'] == 'USA') ? 'selected' : '';?>>USA</option>
                        <option value="UK" <?php echo ($user['country'] == 'UK') ? 'selected' : '';?>>UK</option> 
                    </select>
                </div>

                <div class="mb-3">
                    <label>Updating Profile Image:-</label>
                    <input type="file" name="file" accept="image/*" class="form-control" />
                    <img src="uploads/<?= htmlspecialchars($user['file']) ?>" width="100" height="100" alt="profile image"><br>
                </div>
              </div>
              
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
             </form>
            </div>
        </body>
    <?php include ("footer.php"); ?>
</html>