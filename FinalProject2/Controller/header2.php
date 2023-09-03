<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #F0F8FF;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  box-shadow: 0 4px 8px 0 black;
}

.header a:hover {
  background-color: lightskyblue;
  color: black;
}


.header a.not {
  background-color: red;
  color: white;
}



@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    
  }
  
}
</style>
</head>
<body>

<div class="header">
  <h1 style=" text-align: center;">
    Welcome To Doctor's Portal
  </h1>
 
 <nav style="text-align: center;">
            
                <a href="home.php">Home</a> &nbsp;
                <a href="Profile.php">Profile</a> &nbsp;
                <a href="Appointments.php">Appointments</a> &nbsp;
            
        </nav>
     <nav style="position: absolute; top: 10%; right: 5px;">
      <a href="notification.php">Notification</a> &nbsp;
      <a href="../../controller/logout.php">LogOut</a> &nbsp;
     </nav>
</div>
<hr>

</body>
</html>
