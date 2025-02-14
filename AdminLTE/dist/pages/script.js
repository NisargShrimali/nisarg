
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
                    <a href="ajax_delete.php" class="delete-button" data-id="'+value['id']+'" title="Delete">Delete</a>\
                    </td>\
                    </tr>');
                
            });
            
            $('.delete-button').on('click',function(e){
                e.preventDefault();
                var id = $(this).data('id');
                if(confirm('Are you sure you want to delete')){
                $.ajax({
                  url: "ajax_delete.php",
                  dataType: "json",
                  type: "POST",
                  data: { id: id },
                  success: function(response)
                  {
                    if(response.status==='success')
                    {
                      alert(response.message);
                      getdata();
                    }
                    else
                    {
                      alert(response.message);
                    }
                  },
                  error: function(xhr, status, error) {
                    alert("Error: " + xhr.responseText); }
                })
              }
            });  
        }
    });
}

$(document).ready(function () {
    $("#userform").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $(".error-message").remove();

    $.ajax({
        url: "ajax_add.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType : "json",
        success: function (response) {
        if (response.status === "success") {
            alert(response.message);
            window.location.href = "ajax_display.php";
            $("#userform")[0].reset();
        } else if (response.errors) {

            $.each(response.errors, function (key, message) {
            $(`[name="${key}"]`).after(`<span class="error-message text-danger">${message}</span>`);
            });
        } else {
            alert(response.message);
        }
        },
        error: function (xhr) {
        alert("Error: " + xhr.responseText);
        }
    });
    });
    });

    $(document).ready(function () {
        $('#updatedata').on('submit' , function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $(".error-message").remove();
        $.ajax({
            url: "ajax_updatedata.php",
            type: "POST",
            contentType: false,
            processData: false,
            data: formData,
            dataType: "json",
            success: function(response){
            if(response.status === 'success'){
            alert(response.message);
            window.location.href = "ajax_display.php";
        }
            else if (response.errors){
            $.each(response.errors, function (key , message){
            $(`[name="${key}"]`).after(`<span class="error-message text-danger">${message}</span>`);
         });
        }
            else{
            alert(response.message);
            }                        
     },
            error: function (xhr ,status ,error){
            alert("Error: " + xhr.responseText);
   }
})
});
});