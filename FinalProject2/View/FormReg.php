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


<div>

	<div class="container">
	<div class="row">
	<div class="col-sm-5">
		<h1>Registration Form</h1>

		<div class="already">
			<center> <br> Already Registered ?<br> <a href ="ptlogin.php"> Click here</a> <br>To Login </center>
		</div>
	<div class="form">
		<form name="reg" action="../Controller/patient/RegiAction.php" method="POST">
		<b>Username:  </b><input class="form-control" type="text" name="uname" placeholder="User name" >
		<br> <br>
		<b>Password:  </b><input class="form-control" type="password" name="pass" placeholder="Password"  >
		<br>
		 <input type="text" id="type" name="type" value="patient" hidden><br>
		<b>First Name:  </b><input class="form-control" type="text" name="firstname" placeholder="First name"  >
		<br><br>
		<b>Last Name:  </b><input class="form-control" type="text" name="lastname" placeholder="Last name"  >
		<br><br>
		<b>Choose your Gender : </b>
		<input type="radio" name="gender" value="Male"  >
		Male
		<input type="radio" name="gender" value="Female" >
		Female
		<input type="radio" name="gender" value="other" >
		Other
		<br><br><br>
		<b>Date of birth:  </b><input class="form-control" type="date" name = "dob"  >
		<br><br>
		<b>Present Address: </b><input class="form-control" type="textarea" name ="add" placeholder="Present Address" >
		<br><br>
		<b>Email:  </b><input class="form-control" type="email" name ="mail" placeholder="E-mail">
		<br><br>
		<br>
		</p>
		<br>
		<input class="btn btn-primary" type="submit" name="submit" value="Sign Up"> <input class="btn btn-primary" type="reset" name="reset">
		</form>
	</div>
	</div>
	</div>
	</div>

</div>
		<br><br>
</body>
</html>