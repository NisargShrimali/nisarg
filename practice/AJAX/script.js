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