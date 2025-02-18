  <?php 
  include 'conn.php';
  include ("header.php"); 
  include ("sidebar.php"); 
  include ("add1.php");
  ?>
  <html>
   <body>
    <div class="container mt-5">
      <div class="card">
          <div class="card-header">USER DETAILS</div>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="mb-3">
                      <label>First Name:-</label>
                      <input type="text" name="first_name" class="form-control" value="<?= htmlspecialchars($first_name ?? '') ?>" />
                      <span class="text-danger"><?= $firstnameErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Last Name:-</label>
                      <input type="text" name="last_name" class="form-control" value="<?= htmlspecialchars($last_name ?? '') ?>" />
                      <span class="text-danger"><?= $lastnameErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Email:-</label>
                      <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($email ?? '') ?>" />
                      <span class="text-danger"><?= $emailErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Password:-</label>
                      <input type="password" name="password" class="form-control" value="<?= htmlspecialchars($password?? '') ?>"  />
                      <span class="text-danger"><?= $passwordErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Confirm Password:-</label>
                      <input type="password" name="conf_pass" class="form-control" value="<?= htmlspecialchars($conf_pass ?? '') ?>" />
                      <span class="text-danger"><?= $cpasswordErr ?? '' ?></span>
                  </div>
          
                  <div class="mb-3">
                      <label>Address:-</label>
                      <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($address ?? '') ?>" />
                      <span class="text-danger"><?= $messageErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Phone Number:-</label>
                      <input type="text" name="phone_num" class="form-control" value="<?= htmlspecialchars($phone_num ?? '') ?>" />
                      <span class="text-danger"><?= $numberErr ?? '' ?></span>
                  </div>

                  <div class="mb-3">
                      <label>Gender:-</label>
                      <div>
                          <input type="radio" name="gender" value="male" <?= isset($gender) && $gender == 'male' ? 'checked' : '' ?>> Male
                          <input type="radio" name="gender" value="female" <?= isset($gender) && $gender == 'female' ? 'checked' : '' ?>> Female
                      </div>
                      <span class="text-danger"><?= $genderErr ?? '' ?></span>
                  </div>

                  <div class="mb-3">
                      <label>Hobbies:-</label>
                      <div>
                          <input type="checkbox" name="hobbies[]" value="Cricket" <?= isset($hobbies) && strpos($hobbies, 'Cricket') !== false ? 'checked' : '' ?>>Cricket
                          <input type="checkbox" name="hobbies[]" value="Travelling" <?= isset($hobbies) && strpos($hobbies, 'Travelling') !== false ? 'checked' : '' ?>> Travelling
                      </div>
                      <span class="text-danger"><?= $hobbiesErr ?? '' ?></span>
                  </div>

                  <div class="mb-3">
                      <label>Country:-</label>
                      <select name="country" class="form-control">
                        <option name="" value="">--Please Select one country--</option>
                          <option value="India" <?= isset($country) && $country == 'India' ? 'selected' : '' ?>>India</option>
                          <option value="USA" <?= isset($country) && $country == 'USA' ? 'selected' : '' ?>>USA</option>
                          <option value="UK" <?= isset($country) && $country == 'UK' ? 'selected' : '' ?>>UK</option>
                      </select>
                      <span class="text-danger"><?= $countryErr ?? '' ?></span>
                  </div>
              </div>

              <div class="mb-3">
                      <label>Profile Image:-</label>
                      <input type="file" name="file" class="form-control" />
                      <span class="text-danger"><?= $imageErr ?? '' ?></span>
                  </div>

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="add">Submit</button>
              </div>
          </form>   
        </div>
      </div>
    <?php include ("footer.php"); ?>
  </body>
</html>