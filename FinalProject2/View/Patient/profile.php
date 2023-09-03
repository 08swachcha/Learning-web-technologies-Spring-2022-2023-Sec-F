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
</head>
<body>
  <?php include '../../controller/header2.php';?>

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
                      $gender = $row["Gender"];

}
}
echo "<br><br><br>";
      
echo " <table align='center' border='1' width='912' height='300' >
  <tr>
    <th colspan='2'>Profile</th>
  </tr>
  <tr>
    <td align='center'><b>Name :</b></td>
    <td align='center'>".$fname ." ". $lname. "</td>
  </tr>
  <tr>
    <td align='center'><b>Date of birth :</b></td>
    <td align='center'>".$dob."</td>
  </tr>
  <tr>
    <td align='center'><b>Address :</b></td>
    <td align='center'>".$add."</td>
  </tr>
  <tr>
    <td align='center'><b>Occupation :</b></td>
    <td align='center'>".$type1."</td>
  </tr>
  <tr>
    <td align='center'><b>Gender :</b></td>
    <td align='center'>".$gender."</td>
  </tr>
  <tr>
    <td align='center'><b>Email :</b></td>
    <td align='center'>".$email."</td>
  </tr>
  <tr>
    <td align='center'><b>Number :</b></td>
    <td align='center'>".$phn ."</td>
  </tr>


</table>";
echo "<br><br><br>";

echo "<center><a href='edit.php'>"."Edit Profile "."</a>";
}
?>
</body>
</html> 