if(isset($_POST['add'])){
    $fname=$lname=$email=$password=$cpass=$address=$phoneno=$gender=$hobbies=$country="";

    $fnameError=$lnameError=$emailError=$passwordError=$cpassError=$addressError=
    $phonenoError=$genderError=$hobbiesError=$countryError=""; 
    $isValid=true;

    if(empty($_POST['lname'])){
        $lnameError = "Last Name is required";
        $isValid = false;
    }else{
        $lname = htmlspecialchars($_POST['lname']);
    }

    if(empty($_POST["fname"])) {  
        $fnameError = "First Name is required";
        $isValid = false;  
          
    } else {  
        $fname = htmlspecialchars($_POST["fname"]);  
    }  

    if(empty($_POST['email'])){
        $emailError = "Email is required";
        $isValid = false;
    }else{
        $email = htmlspecialchars($_POST['email']);
    }

    if(empty($_POST['password'])){
        $passwordError = "Password Is Required";
        $isValid = false;
    }elseif(strlen($_POST['password']<5)){
        $passwordError = "Password should greater than five";
        $isValid = false;
    }else{
        $password = htmlspecialchars($_POST['password']);
    }


    if(empty($_POST['cpass'])){
        $cpassError = "Password Is Required";
        $isValid = false;
    }elseif(strlen($_POST['cpass']<5)){
        $cpassError = "Password should greater than five";
        $isValid = false;
    }else{
        $cpass = htmlspecialchars($_POST['cpass']);
    }


    if(empty($_POST['address'])){
        $addressError = "Address is required";
        $isValid = false;
    }else{
        $address = htmlspecialchars($_POST['address']);
    }


    if(empty($_POST['phoneno'])){
        $phonenoError = "Phone no is required";
        $isValid = false;
    }else{
        $phoneno = htmlspecialchars($_POST['phoneno']);
    }

    if(empty($_POST['gender'])){
        $genderError = "select one option";
        $isValid = false;
    }else{
        $gender = htmlspecialchars($_POST['gender']);
    }

    if(empty($_POST['hobbies'])){
        $hobbiesError = "check in any one";
        $isValid = false;
    }else{
        $hobbies = htmlspecialchars($_POST['hobbies']);
    }


    if(empty($_POST['country'])){
        $hobbiesError = "select one option";
        $isValid = false;
    }else{
        $country = htmlspecialchars($_POST['country']);
    }

    if($isValid)
    {

        exit();
    }else{
        echo "error". $sql ."<br>" .$conn->error;
    }     
}else{
    echo "<p style='color:red;'>There is error in validation </p>";

    echo "<p>$fnameError</p>";
    echo "<p>$lnameError</p>";
    echo "<p>$emailError</p>";
    echo "<p>$passwordError</p>";
    echo "<p>$cpassError</p>";
    echo "<p>$addressError</p>";
    echo "<p>$phoneError</p>";
    echo "<p>$genderError</p>";
    echo "<p>$hobbiesError</p>";
    echo "<p>$countryError</p>";

Hello Sir/Ma'am 
Good Evening!
Due To Servererror I am not able to send my daily updates on Mail.
I hope you had a wonderful day.

 Today's Update:Date(23/01/2025)
  -Completed CRUD Operation in AdminLTE theme.
  -Solve The Problem Of Updating Data in update page of CRUD Operation. 

 Tomorrow's Plan:
  -Performing Validation And Create Login page in AdminLTE theme.

 Thank you!

Best regards,
Nisarg Shrimali 
