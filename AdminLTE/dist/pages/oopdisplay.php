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
                    
                </div>
            </div>
        </div>
        <?php include ("footer.php"); ?>
    </body>
</html>