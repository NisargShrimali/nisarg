<?php
include "header.php";
include "sidebar.php";
?>
<html>
    <head>
        <title>User Form</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">USER DETAILS</div>
                <form id="userform" method="POST" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="mb-3">
                            <label>First Name:-</label>
                            <input type="text" name="first_name" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Last Name:-</label>
                            <input type="text" name="last_name" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Email:-</label>
                            <input type="email" name="email" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Password:-</label>
                            <input type="password" name="password" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Confirm Password:-</label>
                            <input type="password" name="conf_pass" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Address:-</label>
                            <input type="text" name="address" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Phone Number:-</label>
                            <input type="number" name="phone_num" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label>Gender:-</label>
                            <div>
                                <input type="radio" name="gender" value="male">Male
                                <input type="radio" name="gender" value="female">Female
                            </div>
                                <input type="hidden" name="gen">
                        </div>

                        <div class="mb-3">
                            <label>Hobbies:-</label>
                            <div>
                                <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                                <input type="checkbox" name="hobbies[]" value="Travelling">Travelling
                            </div>
                                <input type="hidden" name="hob">
                        </div>

                        <div class="mb-3">
                            <label>Country:-</label>
                            <select name="country" class="form-control">
                                <option value="">Please Select One Country</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Profile Image:-</label>
                            <input type="file" name="file" class="form-control" />
                        </div>     
                    </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    <footer>
        <?php include "footer.php"; ?>
      </footer>
    </body>
</html>

