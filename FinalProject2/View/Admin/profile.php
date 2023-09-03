<?php
session_start();
if (count($_SESSION)===0) 
{
  header("location: ../../controller/logout.php");
}
$user= $_SESSION['username'];
$pass= $_SESSION['pass'] ;
$ty = $_SESSION['type'] ;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="../CSS/profile.css">
</head>
<body>
  <?php include '../../controller/header1.php';?>
  <hr class="new1">

  <?php

    
        include('../../Model/db.php');
                
         $sql = "select * from user where username= '{$user}' and password='{$pass}' and type='{$ty}'";
         $result = mysqli_query($con, $sql);
        
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
                    {
                      $fname = $row['firstname'];
                      $lname= $row['lastname'];
                      $dob= $row["dob"];
                      $gender= $row["Gender"];
                      $add= $row["address"];
                      $email= $row["email"];
                      $phn= $row["phone"];
                      $type1 =$row["type"];
                      $photo =$row['images'];

}
}
echo "<br><br><br>";

}
?>
    <center>  
<div class="container">
  <?php echo" <image src ='../"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px;''>";  ?>
  <div class="overlay">
    <div class="text">
      <b><?php echo $fname; echo " "; echo $lname; ?></b> 
          <p><?php echo $gender ?></p>
          <p><?php echo $dob; ?></p>
          <p><?php echo $phn; ?></p>
          <p><?php echo $email; ?></p>
          <p><?php echo $add ?></p> 
           

          <br>  

    </div>
  </div>
</div>
</center>
<br><br><br>

<center><a href='edit.php'>Edit Profile </a>


</body>
</html> 