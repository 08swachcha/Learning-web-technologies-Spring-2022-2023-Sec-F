<?php 
    session_start();
   include('../../Model/db.php');
    
    if ($_SERVER['REQUEST_METHOD'] === "POST"){ 

        $uname =$_REQUEST['uname'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $dob = $_REQUEST['dob'];
        $add = $_REQUEST['add'];
        $email = $_REQUEST['email'];
        $type = $_REQUEST['type'];
        $phn = $_REQUEST['phn'];

        $sql = "UPDATE user SET firstname='$fname', lastname='$lname', dob='$dob' , address='$add',email='$email',phone='$phn' WHERE username= '$uname' and type= '$type' ";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
            
                header('location: ../../view/doctor/profile.php');
            }else{
                echo "DB error, please try again";
            }

    }
    ?>