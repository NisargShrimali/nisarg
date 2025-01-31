<?php

include "header.php";
include "sidebar.php";
require_once "oopadd.php";
?>

<html>
    <body>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">User Details</div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="mb-3">
                            <label>First Name:-</label>
                            <input type="text" name="first_name" class="form-control" value="<?= htmlspecialchars($first_name) ?>"/>
                            <span class="text-danger"><?= $error['first_name'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Last Name:-</label>
                            <input type="text" name="last_name" class="form-control" value="<?= htmlspecialchars($last_name) ?>" />
                            <span class="text-danger"><?= $error['last_name'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Email:-</label>
                            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($email) ?>" />
                            <span class="text-danger"><?= $error['email'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Password:-</label>
                            <input type="password" name="password" class="form-control" />
                            <span class="text-danger"><?= $error['password'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Confirm Password:-</label>
                            <input type="password" name="conf_pass" class="form-control" />
                            <span class="text-danger"><?= $error['conf_pass'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Address:-</label>
                            <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($address) ?>" />
                            <span class="text-danger"><?= $error['address'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Phone Number:-</label>
                            <input type="number" name="phone_num" class="form-control" value="<?= htmlspecialchars($phone_num) ?>" />
                            <span class="text-danger"><?= $error['phone_num'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Gender:-</label>
                            <div>
                                <input type="radio" name="gender" value="male" <?= $gender == 'male' ? "checked" : "" ?>>Male
                                <input type="radio" name="gender" value="female" <?= $gender == 'female' ? "checked" : "" ?>>Female
                            </div>
                                <span class="text-danger"><?= $error['gender'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Hobbies:-</label>
                            <div>
                                <input type="checkbox" name="hobbies[]" value="Cricket" <?= strpos($hobbies, "Cricket") !== false ? "checked" : "" ?>>Cricket
                                <input type="checkbox" name="hobbies[]" value="Travelling" <?= strpos($hobbies, "Travelling") !== false ? "checked" : "" ?>>Travelling
                            </div>
                                <span class="text-danger"><?= $error['hobbies'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Country:-</label>
                            <select name="country" class="form-control">
                                <option name="" value="">Please Select Country</option>
                                <option value="India"<?= $country == "India" ? "selected" : "" ?>>India</option>
                                <option value="USA" <?= $country == "USA" ? "selected" : "" ?>>USA</option>
                                <option value="UK" <?= $country == "UK" ? "selected" : "" ?>>UK</option>
                            </select>
                                <span class="text-danger"><?= $error['country'] ?? '' ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Profile Image:-</label>
                            <input type="file" name="file" class="form-control">
                            <span class="text-danger"><?= $error['file'] ?? '' ?></span>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="oop_add" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include ('footer.php')?>
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