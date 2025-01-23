<?php 
include 'conn.php';
include 'update1.php';
?>
<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php 
      include 'header.php';
      include 'sidebar.php';
      ?>
      <!--begin::Sidebar-->
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <!--begin::Header-->
            <div class="card-header"><div class="card-title"><h2>Updating User Details</h2></div></div>
                  <!--end::Header-->

<form method="POST" action="update.php" enctype="multipart/form-data">
              <div class="card-body">
              <input type="hidden" name="id" value="<?php echo $user['id']?>">
                  <div class="mb-3">
                      <label>First Name:-</label>
                      <input type="text" name="fname" class="form-control" value="<?php echo $user['fname'];?>" />
                      <span class="text-danger"><?= $fnameErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Last Name:-</label>
                      <input type="text" name="lname" class="form-control" value="<?php echo $user['lname'];?>" />
                      <span class="text-danger"><?= $lastnameErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Email:-</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $user['email'];?>" />
                      <span class="text-danger"><?= $emailErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Password:-</label>
                      <input type="password" name="password" value="<?php echo $user['password'];?>" class="form-control" />
                      <span class="text-danger"><?= $passwordErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Confirm Password:-</label>
                      <input type="password" name="cpass" value="<?php echo $user['cpass'];?>" class="form-control" />
                      <span class="text-danger"><?= $cpasswordErr ?? '' ?></span>
                  </div>
          
                  <div class="mb-3">
                      <label>Address:-</label>
                      <input type="text" name="address" class="form-control" value="<?php echo $user['address'];?>" />
                      <span class="text-danger"><?= $messageErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Phone Number:-</label>
                      <input type="text" name="phoneno" class="form-control" value="<?php echo $user['phoneno'];?>" />
                      <span class="text-danger"><?= $numberErr ?? '' ?></span>
                  </div>
                  <div class="mb-3">
                      <label>Gender:-</label>
                      <div>
                          <input type="radio" name="gender" value="male" <?php echo($user['gender'] == 'male') ? 'checked': '';?>> Male
                          <input type="radio" name="gender" value="female" <?php echo($user['gender'] == 'female') ? 'checked': '';?>> Female
                      </div>
                      <span class="text-danger"><?= $genderErr ?? '' ?></span>
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
              </div>

              <div class="mb-3">
                      <label>Profile Image:-</label>
                      <input type="file" name="file" class="form-control" />
                      <span class="text-danger"><?= $imageErr ?? '' ?></span>
                  </div>

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
              </div>
          </form>       
                              
                      </div>
                    <!--end::Row-->
                  </div>
                </div>
              </div>
              <!-- /.Start col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php
      include 'footer.php';
      ?>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
