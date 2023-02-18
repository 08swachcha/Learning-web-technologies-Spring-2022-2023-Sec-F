<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="">
	<fieldset>
    <legend>Gender:</legend>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
<br>
<br>
    <input type="submit" value="Submit">
  </fieldset>
	
</form>
<hr>
 <?php
 if (isset($_POST["gender"])) {
 	
 
 if($_POST["gender"] != null) 
 	{ 
 		echo "Your gender is: ".$_POST["gender"]; 
 	}
 
 }

 ?>
 <br>
</body>

</html>