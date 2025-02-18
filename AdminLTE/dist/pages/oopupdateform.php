<?php
include ("header.php"); 
include ("sidebar.php"); 
include ('oopfunction.php');
include "oopupdatedata.php";

if(isset($_GET['id'])){
    $rid = $_GET['id'];
    $fetchdata = new CRUD();
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
    <body>
        <div class="card card-primary card outline mb-4">
            <div class="card-header"><div class="card-title">Updating Details</div></div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <div class="mb-3">
                            <label>First Name:-</label>
                            <?php $first_name = isset($_POST['first_name'])?$_POST['first_name']:$user['first_name']; ?>
                            <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>" />
                            <span class="text-danger"><?= $errors['first_name'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Last Name:-</label>
                            <?php $last_name = isset($_POST ['last_name'])?$_POST['last_name']:$user['last_name']; ?>
                            <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>"  />
                            <span class="text-danger"><?= $errors['last_name'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Email:-</label>
                            <?php $email = isset($_POST ['email'])?$_POST['email']:$user['email']; ?>
                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"  />
                            <span class="text-danger"><?= $errors['email'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Address:-</label><?php $address = isset($_POST ['address'])?$_POST['address']:$user['address']; ?>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>"  />
                            <span class="text-danger"><?= $errors['address'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Phone Number</label>
                            <?php $phone_num = isset($_POST ['phone_num'])?$_POST['phone_num']:$user['phone_num']; ?>
                            <input type="number" name="phone_num" class="form-control" value="<?php echo $phone_num; ?>"  />
                            <span class="text-danger"><?= $errors['phone_num'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Gender:-</label>
                            <?php $gender = isset($_POST['gender']) ? $_POST['gender']:$user['gender']; ?>
                         
                            <input type="radio" name="gender" value="male" <?php echo($user['gender'] == 'male') ? 'checked' : '';?> >Male
                            <input type="radio" name="gender" value="female" <?php echo($user['gender'] == 'female') ? 'checked' : '';?> > Female
                            <span class="text-danger"><?= $errors['gender'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Hobbies:-</label>
                         <div>
                            <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'], 'Cricket') !== false ? 'checked': '';?> >Cricket
                            <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'], 'Travelling') !== false ? 'checked': '';?> >Travelling
                         </div>
                            <span class="text-danger"><?= $errors['hobbies'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Country:-</label>
                            <?php $country = isset($_POST['country']) ? $_POST['country']:$user['country']; ?>
                            <select name="country" class="form-control">
                                <option value="India" <?php echo ($user['country'] == 'India') ? 'selected' : ''; ?>>India</option>
                                <option value="USA" <?php echo ($user['country'] == 'USA') ? 'selected' : ''; ?>>USA</option>
                                <option value="UK" <?php echo ($user['country'] == 'UK') ? 'selected' : ''; ?>>UK</option>
                            </select><br>
                            <span class="text-danger"><?= $errors['country'] ?? '' ?></span>
                        </div>

                    <div class="mb-3">
                      <img src="uploads/<?= htmlspecialchars($user['file']) ?>" width="100" height="100" alt="Profile Image"><br>
                      <label>Update Profile</label>
                        <input type="file" name="file" accept="image/*" class="form-control"  />
                    </div>
                    
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                </div>
            </form>
        </div>
        <?php include ("footer.php"); ?>
    </body>
</html>