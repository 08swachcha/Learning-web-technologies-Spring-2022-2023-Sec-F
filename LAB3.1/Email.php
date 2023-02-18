<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="">
	<fieldset>
    <legend>Email:</legend>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
	
</form>

<hr>
 <?php
 if (isset($_POST["email"])) {
 	
 
 if($_POST["email"] != null) 
 	{ 
 		echo "Your email is: ".$_POST["email"]; 
 	}
 }
 ?>
 <br>
</body>

</html>