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
            header('location: adminlogin.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminLogin</title>
      <script type="text/javascript">
    function validateForm() {
  let x = document.forms["login"]["uname"].value;
  let y = document.forms["login"]["pass"].value;
  if ( x == "" && y == "") 
  {
    alert( "Empty submission");
    return false;
  }
  else if (x == "") {
    alert("Username is empty");
    return false;
  }
  else if (y== "") 
  {
    alert("Password is empty");
    return false;
  }
}
</script>
</head>
<body>
<h1 style="text-align: center;">
	Doctor's Portal Admin Login
</h1>
<h2 style="text-align: center;">
<br><br>
<button onclick="document.location='welcome.php'"> Go back</button>
</h2>
  <br>
<fieldset>
  <form name="login" onsubmit="return validateForm()" method="POST" action="../controller/admin/logincontroller.php">
	<fieldset>
    <legend>Login:</legend>
    <input type="text" id="name" name="uname" placeholder="Username"><br><br>
    <input type="password" id="password" name="pass" placeholder="Password"><br>
    <input type="text" id="type" name="type" value="admin" hidden><br>
    <br>
    <input type="submit" value="Submit">
  </fieldset>

<footer style=" text-align: center;">
        <p>&copy; 2023 Doctor's Portal. All rights reserved.</p>
    </footer>

</body>
</html>