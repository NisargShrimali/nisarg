<div class="form-container">
    <h2 class="head-bar">Crud Operation</h2>
      <form id="user-details" method="POST" action="add.php" enctype="multipart/form-data">

        <div class="form-group">
        <label>First Name:-</label>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:-</label>
        <input type="text" name="last_name" required><br><br>

        <label>Email:-</label>
        <input type="email" name="email" required><br><br>

        
        <label>Password:-</label>
        <input type="password" name="pass" id="password"><br><br>

        <label>Confirm Password:-</label>
        <input type="password" name="cpass" id="confirmpassword" onkeyup='check();'><br><br>
        <span id="passwordError" class="error"></span>

        <label>Address:-</label>
        <input type="textarea" name="address" required><br><br>

        <label>Phone Number:-</label>
        <input type="number" name="phone" required><br><br>

        <label>Gender:-</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female<br><br>

        <label>Hobbies:-</label>       
        <input type="checkbox" name="hobby[]" value="Cricket" required>Cricket
        <input type="checkbox" name="hobby[]" value="Travelling" required>Travelling<br><br>

        <label>Country:-</label>
        <select name="country" required>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        </select><br><br>

        <label>Profile Image:-</label>
        <input type="file" name="file" accept="image/*"><br><br>   

        <button type="submit" name="add" class="submit-btn" id="submitbtn">Add Data</button>
        </div>
        </div>
      </form>