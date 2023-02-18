<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="">
	<fieldset>
    <legend>Date of birth:</legend>
    <input type="Date" id="dob" name="dob"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
	
</form>
 <?php
if (isset($_POST["dob"])) {
 	
 
 if($_POST["dob"] != null) 
 	{ 
 		echo "Your birthday is: ".$_POST["dob"]; 
 	}
 }
?><br>
</body>

</html>