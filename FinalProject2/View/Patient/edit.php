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
                      $uname= $row["username"];

}
}
echo "<br><br><br>";

echo "<form method='POST' action='../../Controller/patient/editAction.php' >";
echo " <table align='center' border='1' width='912' height='300' >
  <tr>
    <th colspan='2'>Profile</th>
  </tr>
      <tr>
            <td align='center'> Username:</td>
            <td align='center'>". "<input type='text' value= '".$uname."'name='uname' readonly>" ."</td>
      </tr>
      <tr>
            <td align='center'> First Name:</td>
            <td align='center'>". "<input type='text' value= '".$fname."'name='fname'>" ."</td>
      </tr>
      <tr>
            <td align='center'> Last Name:</td>
            <td align='center'>". "<input type='text' value= '".$lname."'name='lname'>" ."</td>
      </tr>
      <tr>
            <td align='center'> Date of Birth:</td>
            <td align='center'>". "<input type='text' value= '".$dob."'name='dob'>" ."</td>
      </tr>
      <tr>
            <td align='center'> Address :</td>
            <td align='center'>". "<input type='text' value= '".$add."'name='add'>" ."</td>
      </tr>
    <tr>
            <td align='center'> Occupation :</td>
            <td align='center'>". "<input type='text' value= '".$type1."'name='type' readonly>" ."</td>
      </tr>
    <tr>
            <td align='center'> Email :</td>
            <td align='center'>". "<input type='text' value= '".$email."'name='email'>" ."</td>
      </tr>
     <tr>
            <td align='center'> Phone Number :</td>
            <td align='center'>". "<input type='text' value= '".$phn."'name='phn'>" ."</td>
      </tr>


</table>";
echo "<br><br><br>";
echo "<center><input type='submit' value='Edit Product'>";
echo "</form>";
}
?>
</body>
</html> 