<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="">
	<fieldset>
    <legend>Blood Group:</legend>
   

<select name="blood" id="blood">
  <option></option>
  <option value="A+">A pos</option>
  <option value="B+">B pos</option>
  <option value="AB+">AB pos</option>
  <option value="O+">O pos</option>
</select>
  </fieldset>
   <input type="submit" value="Submit">
	
</form>

<hr>
 <?php
 if (isset($_POST["blood"])) {
 	
 
 if($_POST["blood"] != null) 
 	{ 
 		echo "Your blood group is: ".$_POST["blood"]; 
 	}
 }
 ?>
 <br>
</body>

</html>