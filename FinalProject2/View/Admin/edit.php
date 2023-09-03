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
  <link rel="stylesheet" type="text/css" href="../CSS/model.css">
    <style type="text/css">
    
    body {
      background-color: #F0F8FF;
    }
  </style>
</head>
<body>
  <?php include '../../controller/header1.php';?>

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
                      $photo =$row['images'];

}
}
}
?>
<br><br><br>

<form method='POST' action='../../Controller/admin/editAction.php' >
 <div class="photo" style=" position: absolute;   right: 150px; width: 200px;  height: 120px ;">

              <?php echo" <image src ='../"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px ; border-radius: 50%; box-shadow: 0 4px 8px 0 black;''>";  ?><br> <br>

              </div>

              <div class=" text " style=" position: absolute; top: 20%; left: 40%; width: 400px;  height: 120px ;">
               
               <b> Username :  </b>
             
             <input type="text" class="form-control" name="fname" readonly value="<?php echo $uname; ?>">  
             <b> First Name :  </b>
             
             <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>"> 
             <b> Last Name :  </b>
             
             <input class="form-control" type="text" name="lname" value="<?php echo $lname; ?>">


             <b> Occupation :  </b>
             
             <input class="form-control" type="text" name="type" value="<?php echo $type1; ?>" readonly> 
             <b> Date of birth :  </b>
             
             <input class="form-control" type="date" name="dob" value="<?php echo $dob; ?>"> 
              <b> Gender :  </b>
             
             <select name="gender" class="form-control" value="" >
            <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
            <option value="Female">Female</option>
             <option value="Male">Male</option>
             <option value="Other">Other</option>
           </select>

             <b> Phone Number : </b>
              <input type="text" class="form-control" name="phn" value="<?php echo $phn; ?>">
             

             <b> Email : </b>
             <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">

             <b> Address : </b>
              <input type="text" class="form-control" name="add" value="<?php echo $add; ?>">
            
             <br> <br>


      <p><input class="btn-primary" style="box-shadow: 0 4px 8px 0 black; border-radius: 15px;" name="click" type="submit" value="Update">
      <button  class="btn-success" style="box-shadow: 0 4px 8px 0 black; border-radius: 15px;" onclick="goBack()">Go Back</button>
    </p>

       </div>


  </form>
</div>
  

  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html> 