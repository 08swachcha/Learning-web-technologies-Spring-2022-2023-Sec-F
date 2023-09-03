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
	<title>Home</title>
		<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		.status{
			display: grid;
 			 grid-template-columns: repeat(3, 1fr);
  				gap: 10px;
		}
		.myStatus{
			border: 1px solid black;
			border-radius: 15px;
			box-shadow: 10px;
			padding:   15px;
			margin: 10px;
			box-shadow: 0 4px 8px 0 black;
			background-color: white;
		}

	</style>
</head>
<body>
<?php include '../../controller/header2.php'; $_SESSION['username'];
 $_SESSION['pass'];
 $_SESSION['type'];?>

 <div class=" status" style="position: relative;  margin: 0;  margin-top: 2%; margin-left: 0%;  text-align : left;  ">
	<?php
		include('../../Model/db.php');

		$sql = "select * from news ";
        		 $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
                    {
                    	$title = $row['title'];
                    	$publishat = $row['publishat'];
                    	$description = $row['description'];
                    	$images =  $row['images'];
                      

			


	  							echo "<div class='myStatus'>";
  	
                  echo "Title : "; echo $title ; echo"<br>";echo"<br>";
                        
                  echo   "Published at :"; echo $publishat; echo"<br>"; echo"<br>";

                  echo "Description : "; echo $description ; echo"<br>";
                   echo" <image src ='../"; echo $images; echo"' alt='Avatar' style='width:300px;height:300px;''>"; echo"<br>"; echo"<br>";


                  echo "<hr>";

                  
                  echo "</div>";
                  
                        			}
			}
		}

			?> 
                  
  	
  </div>




	<footer style=" text-align: center;">
        <p>&copy; 2023 Doctor's Portal. All rights reserved.</p>
    </footer>
</body>
</html>