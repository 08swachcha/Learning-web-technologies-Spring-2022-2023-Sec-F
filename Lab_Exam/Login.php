<?php 
    
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == "error"){
            echo "Invalid user/password ";
        }
        elseif ($_REQUEST['msg'] == "null") {
            echo "Null value ";
         } else{
            header('location: login.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<center>
	<fieldset>
		<legend>
	<h1>Login</h1>
	</legend>
	<form action="loginaction.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" placeholder="Username" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Password" required><br><br>
		<input type="submit" value="Login">
	</form>
	</fieldset>
	</center>
	<div class="already">
			<center> <br> Not Registered ?<br> <a href ="registration.php"> Click here</a> <br>To Registration </center>
		</div>
</body>
</html>
