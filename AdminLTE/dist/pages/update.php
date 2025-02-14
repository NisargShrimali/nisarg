<?php 
      session_start();
      if (isset($_SESSION['login_in']) ) {
       
      }
      else {
        header('Location: login.php');
        exit();
    
      }
    include ("header.php"); 
    include ("sidebar.php");   
    include ("conn.php");
    include ("update_data.php");
  
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = $conn->query("SELECT * FROM user WHERE id = $id");
      if ($result && $result->num_rows > 0) {
          $user = $result->fetch_assoc();
      } else {
          die("User not found.");
      }
    }
  ?>
  <html>
    <body>                
      <div class="card card-primary card-outline mb-4">
        <div class="card-header"><div class="card-title">User Details..</div></div>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <div class="mb-3">
                        <label>First Name</label>
                        <?php $first_name = isset($_POST ['first_name'])?$_POST['first_name']:$user['first_name']; ?>
                        <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="form-control" />
                        <span class="text-danger"><?= $firstnameErr ?? '' ?></span>
                      </div>
                      
                      <div class="mb-3">
                        <label>Last Name</label>
                        <?php $last_name = isset($_POST ['last_name'])?$_POST['last_name']:$user['last_name']; ?>
                        <input type="text" name="last_name" value="<?php echo $last_name; ?>" class="form-control" />
                        <span class="text-danger"><?= $lastnameErr ?? '' ?></span>
                      </div>
                      
                      <div class="mb-3">
                        <label>Email</label>
                        <?php $email = isset($_POST ['email'])?$_POST['email']:$user['email']; ?>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?= $emailErr ?? '' ?></span>
                      </div>
                      
                      <div class="mb-3">
                        <label>Address</label>
                        <?php $address = isset($_POST ['address'])?$_POST['address']:$user['address']; ?>
                        <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" />
                        <span class="text-danger"><?= $messageErr ?? '' ?></span>
                      </div>
                      
                      <div class="mb-3">
                        <label>Phone No</label>
                        <?php $phone_num = isset($_POST ['phone_num'])?$_POST['phone_num']:$user['phone_num']; ?>
                        <input type="text" name="phone_num" value="<?php echo $phone_num; ?>" class="form-control" />
                        <span class="text-danger"><?= $numberErr ?? '' ?></span>
                      </div>

                      <div class="mb-3">
                      <label>Gender :-</label>
                      <input type="radio" name="gender" value="male" <?php echo ($user['gender'] == 'male') ? 'checked' : ''; ?> >Male
                      <input type="radio" name="gender" value="female" <?php echo ($user['gender'] == 'female') ? 'checked' : ''; ?>>Female<br>
                      </div>

                      <div class="mb-3">
                      <label>Hobbies:-</label>
                      <div>
                          <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'],'Cricket')!== false ? 'checked':'';?> >Cricket
                          <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'],'Travelling')!== false ? 'checked':'';?> > Travelling
                          
                      </div>
                      <span class="text-danger"><?= $hobbiesErr ?? '' ?></span>
                  </div>
                      <div class="mb-3">
                      <label>Country:-</label>
                      <select name="country" class="form-control">
                          <option value="India" <?php echo($user['country'] == 'India') ? 'selected':'';?>>India</option>
                          <option value="USA" <?php echo($user['country'] == 'USA') ? 'selected':'';?>>USA</option>
                          <option value="UK" <?php echo($user['country'] == 'UK') ? 'selected':'';?>>UK</option>
                      </select>
                      <span class="text-danger"><?= $countryErr ?? '' ?></span>
                  </div>

                      <div class="mb-3">
                      <img src="uploads/<?= htmlspecialchars($user['file']) ?>" width="100" height="100" alt="Profile Image"><br>
                      <label>Update Profile Image</label>
                        <input type="file" name="file" accept="image/*" class="form-control"  />
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </div>
                  </form>
                </div>
        <?php include ("footer.php"); ?>
  </body>
</html>