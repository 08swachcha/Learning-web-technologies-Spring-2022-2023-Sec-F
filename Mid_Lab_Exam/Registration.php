<?php 
    session_start();
    //print_r($_SESSION);
    
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == "error"){
            echo "Invalid user/password ";
        }
        elseif ($_REQUEST['msg'] == "null") {
            echo "Null value ";
         } else{
            header('location: formreg.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>


		<h1>Registration Form</h1>

		<div class="already">
			<center> <br> Already Registered ?<br> <a href ="login.php"> Click here</a> <br>To Login </center>
		</div>
		<form name="reg" action="RegistrationAction.php" method="POST">
		<b>Username:  </b><input  type="text" name="uname" placeholder="User name" >
		<br> <br>
		<b>Password:  </b><input  type="password" name="pass" placeholder="Password"  >
		<br>
		 <input type="text" id="type" name="type" value="patient" hidden><br>
		<b>First Name:  </b><input  type="text" name="firstname" placeholder="First name"  >
		<br><br>
		<b>Last Name:  </b><input  type="text" name="lastname" placeholder="Last name"  >
		<br><br>
		<b>Choose your Gender : </b>
		<input type="radio" name="gender" value="Male"  >
		Male
		<input type="radio" name="gender" value="Female" >
		Female
		<input type="radio" name="gender" value="other" >
		Other
		<br><br><br>
		<b>Date of birth:  </b><input type="date" name = "dob"  >
		<br><br>
		<b>Present Address: </b><input type="textarea" name ="add" placeholder="Present Address" >
		<br><br>
		<b>Contact: </b><input type="text" name ="phone" placeholder="Phone Number">
		<br><br>
		<br>
		</p>
		<br>
		<input class="btn btn-primary" type="submit" name="submit" value="Sign Up"> <input class="btn btn-primary" type="reset" name="reset">
		</form>
	
		<br><br>
</body>
</html>