<?php
session_start();
if (count($_SESSION)===0) 
{
  header("location: ../../controller/logout.php");
}
$_SESSION['username'];
$_SESSION['pass'];
$_SESSION['type'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Notification</title>
</head>
<body>
  <?php include '../../controller/header2.php';?>
  <button onclick="showNotification()">Show Notification</button>

  
</body>
</html>