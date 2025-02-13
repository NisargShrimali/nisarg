<?php
include ("header.php"); 
include ("sidebar.php"); 
include ('oopfunction.php');

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
                <form action="oopupdatedata.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <div class="mb-3">
                            <label>First Name:-</label>
                            <?php $first_name = isset($_POST ['first_name'])?$_POST['first_name']:$user['first_name']; ?>
                            <input type="text" name="first_name" class="form-control" value="<?php echo $user['first_name']; ?>" />
                            <span class="text-danger"><?= $error['first_name'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Last Name:-</label>
                            <?php $last_name = isset($_POST ['last_name'])?$_POST['last_name']:$user['last_name']; ?>
                            <input type="text" name="last_name" class="form-control" value="<?php echo $user['last_name']; ?>"  />
                            <span class="text-danger"><?= $error['last_name'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Email:-</label>
                            <?php $email = isset($_POST ['email'])?$_POST['email']:$user['email']; ?>
                            <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>"  />
                            <span class="text-danger"><?= $error['email'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Address:-</label><?php $address = isset($_POST ['address'])?$_POST['address']:$user['address']; ?>
                            <input type="text" name="address" class="form-control" value="<?php echo $user['address']; ?>"  />
                            <span class="text-danger"><?= $error['address'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Phone Number</label>
                            <?php $phone_num = isset($_POST ['phone_num'])?$_POST['phone_num']:$user['phone_num']; ?>
                            <input type="number" name="phone_num" class="form-control" value="<?php echo $user['phone_num']; ?>"  />
                            <span class="text-danger"><?= $error['phone_num'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Gender:-</label>
                            <?php $gender = isset($_POST['gender']) ? $_POST['gender']:$user['gender']; ?>
                         
                            <input type="radio" name="gender" value="male" <?php echo($user['gender'] == 'male') ? 'checked' : '';?> >Male
                            <input type="radio" name="gender" value="female" <?php echo($user['gender'] == 'female') ? 'checked' : '';?> > Female
                            <span class="text-danger"><?= $error['gender'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Hobbies:-</label>
                         <div>
                            <input type="checkbox" name="hobbies[]" value="Cricket" <?php echo strpos($user['hobbies'], 'Cricket') !== false ? 'checked': '';?> >Cricket
                            <input type="checkbox" name="hobbies[]" value="Travelling" <?php echo strpos($user['hobbies'], 'Travelling') !== false ? 'checked': '';?> >Travelling
                         </div>
                            <span class="text-danger"><?= $error['hobbies'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Country:-</label>
                            <?php $country = isset($_POST['country']) ? $_POST['country']:$user['country']; ?>
                            <select name="country" class="form-control">
                                <option value="India" <?php echo ($user['country'] == 'India') ? 'selected' : ''; ?>>India</option>
                                <option value="USA" <?php echo ($user['country'] == 'USA') ? 'selected' : ''; ?>>USA</option>
                                <option value="UK" <?php echo ($user['country'] == 'UK') ? 'selected' : ''; ?>>UK</option>
                            </select><br>
                            <span class="text-danger"><?= $error['country'] ?? '' ?></span>
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
        <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script src="../../dist/js/adminlte.js"></script>
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
        </script>
    </body>
</html>