<?php
session_start();
if (count($_SESSION)===0) 
{
	header("location: ../../controller/logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PatientsList</title>
</head>
<body>
<?php include '../../controller/header1.php';?>

<center> <a href="ptreg.php">Add new Patient</a>
	
		<table border="1" align="center">
			<tr>
				<td colspan="4">
				 <h2>Registered Patients</h2>
				</td>
			</tr>
			<?php

			$type= 'patient';
				
				  include('../../Model/db.php');
                
         		$sql = "select * from user where type='{$type}'";
        		 $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
                    {
                      $user[3] = $row['firstname'];
                      $user[4]= $row['lastname'];
                      $dob= $row["dob"];
                      $gender= $row["Gender"];
                      $user[7]= $row["address"];
                      $user[9]= $row["email"];
                      $user[8]= $row["phone"];
                      $type1 =$row["type"];
                      $gender = $row["Gender"];
                      $user[0]= $row["username"];
                      $user [1]= $row["id"];

			?>
			<tr>
				<td width="198">
					<?=$user[0] ?>
				</td>
				<td width="698">
					<p><?=$user[3]," ", $user[4] ?></p>
					<p><?=$user[7] ?></p>
					<p><?=$user[8] ?></p>
				</td>
				<td width="150">
					<a href="">Assign to a Doctor</a>
				</td>
				<td width="150" align="center">
					<a href="ptdelete.php?id=<?=$user[1] ?>">Delete Patient</a>
				</td>
			</tr>

		<?php }  }} ?>
	
		</table>

	<footer style=" text-align: center;">
        <p>&copy; 2023 Doctor's Portal. All rights reserved.</p>
    </footer>
</body>
</html>