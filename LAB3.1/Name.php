<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="">
	<fieldset>
    <legend>Name:</legend>
    <input type="text" id="name" name="name"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
	
</form>
<hr>
 <?php
 if (isset($_POST["name"])) {
 	
 
 if($_POST["name"] != null) 
 	{ 
 		echo "Your name is: ".$_POST["name"]; 
 	}
 }
 ?>
 <br>
</body>

</html>