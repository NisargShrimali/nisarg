<?php
include "nav.html";
?>
<html>
    <head>
        <title>User Form</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
        <script src="script.js"></script>
    </head>
    <body>
        <h4>user details</h4>
                <form id="userform" method="POST" enctype="multipart/form-data">
                
                            <label>First Name:-</label>
                            <input type="text" name="first_name"  /><br><br>
                        
                            <label>Last Name:-</label>
                            <input type="text" name="last_name" /><br><br>
                        
                            <label>Email:-</label>
                            <input type="email" name="email"  /><br><br>
                        
                            <label>Password:-</label>
                            <input type="password" name="password"  /><br><br>
                        
                            <label>Confirm Password:-</label>
                            <input type="password" name="conf_pass"  /><br><br>
                        
                            <label>Address:-</label>
                            <input type="text" name="address" /><br><br>
                    
                            <label>Phone Number:-</label>
                            <input type="number" name="phone_num" /><br><br>
                        
                            <label>Gender:-</label>
                            
                                <input type="radio" name="gender" value="male">Male
                                <input type="radio" name="gender" value="female">Female<br><br>
                            
                                <input type="hidden" name="gen">
                        
                            <label>Hobbies:-</label>
                            
                                <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                                <input type="checkbox" name="hobbies[]" value="Travelling">Travelling<br><br>
                            
                                <input type="hidden" name="hob">
                    
                            <label>Country:-</label>
                            <select name="country" >
                                <option value="">Please Select One Country</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                            </select><br><br>
                        
                            <label>Profile Image:-</label>
                            <input type="file" name="file"  /><br><br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    </body>
</html>

