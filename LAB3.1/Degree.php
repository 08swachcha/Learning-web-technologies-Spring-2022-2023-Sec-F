<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="">
<fieldset>
    <legend>Degree:</legend>

      <input type="checkbox" class='form' value="SSC" name="checkbox[]" />SSC
      <input type="checkbox" class='form' value="HSC"  name="checkbox[]" />HSC
      <input type="checkbox" class='form' value="BSc"  name="checkbox[]" />BSc
      <input type="checkbox" class='form' value="MSc"  name="checkbox[]" />MSc
      <br>
      <input type="submit" value="Submit">
</fieldset>
	
</form>
<hr>
 <?php
 if (isset($_POST['checkbox'])) {
 	
 
 
 		$Value = join(", ", $_POST['checkbox']);
        echo "Your Degrees are   ".$Value;

 	}
 
 

 ?>
 <br>
</body>

</html>
