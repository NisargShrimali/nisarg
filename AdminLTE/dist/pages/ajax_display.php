<?php 
  include ("header.php");
  include ("sidebar.php"); 
?>
<html>
  <head>
    <title>Display Data</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

    <script>
        $(document).ready(function () {
            getdata();
        });

        function getdata()
        {
            $.ajax({
                url: "ajax_getu.php",
                type: "GET",
                dataType: "json",
                success: function (response){
                  //console.log(response);
                    $('.userdata').empty();
                    $.each(response, function(key ,value){
                      //console.log(value['first_name']);
                        $('.userdata').append('<tr>' +
                            '<td>'+value['first_name']+'</td>\
                            <td>'+value['last_name']+'</td>\
                            <td>'+value['email']+'</td>\
                            <td>'+value['address']+'</td>\
                            <td>'+value['phone_num']+'</td>\
                            <td>'+value['gender']+'</td>\
                            <td>'+value['hobbies']+'</td>\
                            <td>'+value['country']+'</td>\
                            <td><img src="uploads/'+value['file']+'" width="100" height="100" alt="profile image"</td>\
                            <td>\
                            <a href="ajax_updateform.php?id='+value['id']+'" title="Edit">Edit</a>\
                            <a href="#" data-id="'+value['id']+'" title="Delete"></a>\
                            </td>\
                            </tr>');
                        
                    });
                }
            });
        }
        </script>
</body>
<footer>
  <?php include("footer.php"); ?>
  </footer>
  </html>