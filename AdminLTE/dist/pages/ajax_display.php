<?php 
  include ("header.php");
  include ("sidebar.php"); 
?>
<html>
  <head>
    <title>Display Data</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="script.js"></script>
  </head>
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
              <tbody class ="userdata">
              </tbody>
            </table>
          </div>      
    </div>
</div>
<footer>
    <?php include("footer.php"); ?>
  </footer>
</html>